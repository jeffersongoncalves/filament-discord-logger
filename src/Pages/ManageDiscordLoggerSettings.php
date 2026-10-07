<?php

namespace JeffersonGoncalves\Filament\DiscordLogger\Pages;

use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;
use JeffersonGoncalves\SettingsDiscordLogger\Settings\DiscordLoggerSettings;

class ManageDiscordLoggerSettings extends SettingsPage
{
    protected static string $settings = DiscordLoggerSettings::class;

    protected static ?string $navigationIcon = 'heroicon-o-bell-alert';

    public const LEVELS = ['debug', 'info', 'notice', 'warning', 'error', 'critical', 'alert', 'emergency'];

    public static function getNavigationLabel(): string
    {
        return __('filament-discord-logger::pages.navigation_label');
    }

    public static function getNavigationGroup(): ?string
    {
        return __('filament-discord-logger::pages.navigation_group');
    }

    public function getTitle(): string
    {
        return __('filament-discord-logger::pages.title');
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make(__('filament-discord-logger::pages.sections.delivery.heading'))
                    ->description(__('filament-discord-logger::pages.sections.delivery.description'))
                    ->columns(2)
                    ->schema([
                        Toggle::make('enabled')
                            ->label(__('filament-discord-logger::pages.fields.enabled'))
                            ->columnSpanFull(),
                        TextInput::make('webhook_url')
                            ->label(__('filament-discord-logger::pages.fields.webhook_url.label'))
                            ->helperText(__('filament-discord-logger::pages.fields.webhook_url.helper'))
                            ->placeholder('https://discord.com/api/webhooks/...')
                            ->url()
                            ->password()
                            ->revealable()
                            ->columnSpanFull(),
                        Select::make('level')
                            ->label(__('filament-discord-logger::pages.fields.level'))
                            ->options(array_combine(self::LEVELS, array_map('ucfirst', self::LEVELS)))
                            ->required(),
                        Toggle::make('queue_enabled')
                            ->label(__('filament-discord-logger::pages.fields.queue_enabled.label'))
                            ->helperText(__('filament-discord-logger::pages.fields.queue_enabled.helper')),
                        TextInput::make('from_name')
                            ->label(__('filament-discord-logger::pages.fields.from_name')),
                        TextInput::make('from_avatar_url')
                            ->label(__('filament-discord-logger::pages.fields.from_avatar_url'))
                            ->url(),
                    ]),

                Section::make(__('filament-discord-logger::pages.sections.routing.heading'))
                    ->description(__('filament-discord-logger::pages.sections.routing.description'))
                    ->schema([
                        KeyValue::make('level_webhooks')
                            ->label(__('filament-discord-logger::pages.fields.level_webhooks.label'))
                            ->helperText(__('filament-discord-logger::pages.fields.level_webhooks.helper'))
                            ->keyLabel(__('filament-discord-logger::pages.fields.level_key'))
                            ->valueLabel(__('filament-discord-logger::pages.fields.webhook_url.label'))
                            ->keyPlaceholder('CRITICAL'),
                        KeyValue::make('mentions')
                            ->label(__('filament-discord-logger::pages.fields.mentions.label'))
                            ->helperText(__('filament-discord-logger::pages.fields.mentions.helper'))
                            ->keyLabel(__('filament-discord-logger::pages.fields.level_key'))
                            ->valueLabel(__('filament-discord-logger::pages.fields.mentions.value'))
                            ->keyPlaceholder('CRITICAL')
                            ->valuePlaceholder('@here'),
                    ]),

                Section::make(__('filament-discord-logger::pages.sections.content.heading'))
                    ->description(__('filament-discord-logger::pages.sections.content.description'))
                    ->columns(2)
                    ->schema([
                        Toggle::make('runtime_context')
                            ->label(__('filament-discord-logger::pages.fields.runtime_context'))
                            ->columnSpanFull(),
                        Select::make('stacktrace')
                            ->label(__('filament-discord-logger::pages.fields.stacktrace.label'))
                            ->options([
                                'smart' => __('filament-discord-logger::pages.fields.stacktrace.smart'),
                                'full' => __('filament-discord-logger::pages.fields.stacktrace.full'),
                                'none' => __('filament-discord-logger::pages.fields.stacktrace.none'),
                            ])
                            ->required(),
                        Toggle::make('attach_stacktrace')
                            ->label(__('filament-discord-logger::pages.fields.attach_stacktrace')),
                    ]),

                Section::make(__('filament-discord-logger::pages.sections.noise.heading'))
                    ->description(__('filament-discord-logger::pages.sections.noise.description'))
                    ->columns(2)
                    ->collapsed()
                    ->schema([
                        Select::make('grouping_strategy')
                            ->label(__('filament-discord-logger::pages.fields.grouping_strategy.label'))
                            ->options([
                                'exception' => __('filament-discord-logger::pages.fields.grouping_strategy.exception'),
                                'level_message' => __('filament-discord-logger::pages.fields.grouping_strategy.level_message'),
                                'message' => __('filament-discord-logger::pages.fields.grouping_strategy.message'),
                            ])
                            ->required(),
                        Toggle::make('grouping_normalize')
                            ->label(__('filament-discord-logger::pages.fields.grouping_normalize')),
                        Toggle::make('deduplication_enabled')
                            ->label(__('filament-discord-logger::pages.fields.deduplication_enabled')),
                        TextInput::make('deduplication_window')
                            ->label(__('filament-discord-logger::pages.fields.deduplication_window'))
                            ->numeric()
                            ->minValue(1)
                            ->required(),
                        Toggle::make('deduplication_summary')
                            ->label(__('filament-discord-logger::pages.fields.deduplication_summary'))
                            ->columnSpanFull(),
                        Toggle::make('rate_limit_enabled')
                            ->label(__('filament-discord-logger::pages.fields.rate_limit_enabled'))
                            ->columnSpanFull(),
                        TextInput::make('rate_limit_global_max')
                            ->label(__('filament-discord-logger::pages.fields.rate_limit_global_max'))
                            ->numeric()
                            ->minValue(1)
                            ->required(),
                        TextInput::make('rate_limit_global_per_seconds')
                            ->label(__('filament-discord-logger::pages.fields.rate_limit_global_per_seconds'))
                            ->numeric()
                            ->minValue(1)
                            ->required(),
                        TextInput::make('rate_limit_fingerprint_max')
                            ->label(__('filament-discord-logger::pages.fields.rate_limit_fingerprint_max'))
                            ->numeric()
                            ->minValue(1)
                            ->required(),
                        TextInput::make('rate_limit_fingerprint_per_seconds')
                            ->label(__('filament-discord-logger::pages.fields.rate_limit_fingerprint_per_seconds'))
                            ->numeric()
                            ->minValue(1)
                            ->required(),
                    ]),
            ]);
    }

    /**
     * Normalizes the per-level maps: Monolog level names in uppercase, blank rows dropped.
     *
     * @param  array<string, mixed>  $data
     * @return array<string, mixed>
     */
    protected function mutateFormDataBeforeSave(array $data): array
    {
        foreach (['level_webhooks', 'mentions'] as $key) {
            $data[$key] = self::normalizeLevelMap((array) ($data[$key] ?? []));
        }

        $data['from_name'] = filled($data['from_name'] ?? null) ? $data['from_name'] : null;
        $data['from_avatar_url'] = filled($data['from_avatar_url'] ?? null) ? $data['from_avatar_url'] : null;
        $data['webhook_url'] = (string) ($data['webhook_url'] ?? '');

        return $data;
    }

    /**
     * @param  array<mixed>  $map
     * @return array<string, string>
     */
    public static function normalizeLevelMap(array $map): array
    {
        $normalized = [];

        foreach ($map as $level => $value) {
            $level = strtoupper(trim((string) $level));

            if (in_array(strtolower($level), self::LEVELS, true) && filled($value)) {
                $normalized[$level] = trim((string) $value);
            }
        }

        return $normalized;
    }
}
