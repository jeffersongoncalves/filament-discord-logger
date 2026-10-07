<?php

use Filament\Facades\Filament;
use Illuminate\Foundation\Auth\User;
use JeffersonGoncalves\Filament\DiscordLogger\DiscordLoggerPlugin;
use JeffersonGoncalves\Filament\DiscordLogger\Pages\ManageDiscordLoggerSettings;
use JeffersonGoncalves\SettingsDiscordLogger\Settings\DiscordLoggerSettings;
use Livewire\Livewire;

beforeEach(function () {
    Filament::setCurrentPanel(Filament::getPanel('test'));
    $this->actingAs((new User)->forceFill(['id' => 1, 'name' => 'Admin', 'email' => 'admin@example.com']));
});

it('registers the settings page on the panel', function () {
    expect(Filament::getPanel('test')->getPages())->toContain(ManageDiscordLoggerSettings::class)
        ->and(DiscordLoggerPlugin::make()->getId())->toBe('filament-discord-logger');
});

it('can hide the settings page', function () {
    $plugin = DiscordLoggerPlugin::make()->settingsPage(false);
    $flag = new ReflectionProperty($plugin, 'hasSettingsPage');
    $flag->setAccessible(true);

    expect($flag->getValue($plugin))->toBeFalse();
});

it('uses translated labels', function () {
    expect(ManageDiscordLoggerSettings::getNavigationLabel())->toBe('Discord Logger');

    app()->setLocale('pt_BR');

    expect((new ManageDiscordLoggerSettings)->getTitle())->toBe('Configurações do Discord Logger');
});

it('saves the settings from the page', function () {
    Livewire::test(ManageDiscordLoggerSettings::class)
        ->fillForm([
            'webhook_url' => 'https://discord.com/api/webhooks/1/token',
            'level' => 'warning',
            'level_webhooks' => ['critical' => 'https://discord.com/api/webhooks/2/alerts', 'bogus' => 'x'],
            'mentions' => [' Critical ' => '@here', 'ERROR' => ''],
            'deduplication_window' => 120,
        ])
        ->call('save')
        ->assertHasNoFormErrors();

    $settings = app(DiscordLoggerSettings::class)->refresh();

    expect($settings->webhook_url)->toBe('https://discord.com/api/webhooks/1/token')
        ->and($settings->level)->toBe('warning')
        ->and($settings->level_webhooks)->toBe(['CRITICAL' => 'https://discord.com/api/webhooks/2/alerts'])
        ->and($settings->mentions)->toBe(['CRITICAL' => '@here'])
        ->and($settings->deduplication_window)->toBe(120);
});

it('normalizes per-level maps to uppercase Monolog levels', function () {
    expect(ManageDiscordLoggerSettings::normalizeLevelMap(['warning' => ' x ', 'nope' => 'y', 'ERROR' => null]))
        ->toBe(['WARNING' => 'x']);
});
