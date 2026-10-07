<?php

namespace JeffersonGoncalves\Filament\DiscordLogger;

use JeffersonGoncalves\Filament\DiscordLogger\Pages\ManageDiscordLoggerSettings;
use JeffersonGoncalves\FilamentAnalyticsCore\AbstractAnalyticsPlugin;

class DiscordLoggerPlugin extends AbstractAnalyticsPlugin
{
    public function getId(): string
    {
        return 'filament-discord-logger';
    }

    protected function getSettingsPageClass(): ?string
    {
        return ManageDiscordLoggerSettings::class;
    }
}
