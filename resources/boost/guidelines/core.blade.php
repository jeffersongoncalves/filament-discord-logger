## Filament Discord Logger

Filament settings page for jeffersongoncalves/laravel-discord-logger, backed by jeffersongoncalves/laravel-settings-discord-logger (Spatie Laravel Settings). Webhook, level, per-level channels, mentions, deduplication and rate limits are edited in the panel instead of `.env`.

### Installation

@verbatim
<code-snippet name="Install the plugin" lang="bash">
composer require jeffersongoncalves/filament-discord-logger:"^1.0"
php artisan migrate
</code-snippet>
@endverbatim

### Register Plugin

@verbatim
<code-snippet name="Register in PanelProvider" lang="php">
use JeffersonGoncalves\Filament\DiscordLogger\DiscordLoggerPlugin;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugins([
            DiscordLoggerPlugin::make()
                // ->settingsPage(false)
                ,
        ]);
}
</code-snippet>
@endverbatim

### Architecture
- `DiscordLoggerPlugin` extends `JeffersonGoncalves\FilamentAnalyticsCore\AbstractAnalyticsPlugin` and registers `ManageDiscordLoggerSettings`
- Settings class: `JeffersonGoncalves\SettingsDiscordLogger\Settings\DiscordLoggerSettings` (group `discord-logger`)
- The `discord` logging channel is registered by laravel-settings-discord-logger; add it to the stack in `config/logging.php`
- Translations live under `filament-discord-logger::pages.*`

### Best Practices
- Per-level maps (`level_webhooks`, `mentions`) are saved with UPPERCASE Monolog levels; unknown levels and empty values are dropped
- Leave the webhook URL empty to keep using `LOG_DISCORD_WEBHOOK_URL` from `.env`
