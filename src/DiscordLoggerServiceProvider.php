<?php

namespace JeffersonGoncalves\Filament\DiscordLogger;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class DiscordLoggerServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-discord-logger')
            ->hasTranslations();
    }
}
