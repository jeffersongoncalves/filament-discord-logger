---
name: filament-discord-logger-development
description: Build and work with the Filament Discord Logger plugin — the settings page that manages laravel-discord-logger (webhook, level, per-level channels, mentions, deduplication, rate limits) from the database.
---

# Filament Discord Logger Development

## When to use this skill

Use this skill when:
- Letting admins configure Discord error logging from a Filament panel
- Debugging why logs don't reach Discord after changing the settings page
- Adding a field to the Discord Logger settings page

## Package Overview

- **Package**: `jeffersongoncalves/filament-discord-logger` (branch `3.x` for Filament 5.x)
- **Namespace**: `JeffersonGoncalves\Filament\DiscordLogger`
- **Dependencies**: `jeffersongoncalves/filament-analytics-core:^3.0`, `jeffersongoncalves/laravel-settings-discord-logger:^1.0` (which requires `jeffersongoncalves/laravel-discord-logger`)

## Version Compatibility

| Branch | Filament | PHP |
|--------|----------|-----|
| 1.x | 3.x | ^8.2 |
| 2.x | 4.x | ^8.2 |
| 3.x | 5.x | ^8.2 |

## Setup

```php
use JeffersonGoncalves\Filament\DiscordLogger\DiscordLoggerPlugin;

$panel->plugins([
    DiscordLoggerPlugin::make(),
]);
```

```bash
php artisan migrate
```

```php
// config/logging.php — the `discord` channel itself is registered automatically
'stack' => ['driver' => 'stack', 'channels' => ['daily', 'discord']],
```

## How values flow

1. The page saves `JeffersonGoncalves\SettingsDiscordLogger\Settings\DiscordLoggerSettings`.
2. When the `discord` channel is first resolved, `SettingsLogger` merges those values over `config/discord-logger.php` and the channel config.
3. An empty webhook URL keeps `LOG_DISCORD_WEBHOOK_URL` from `.env`.

## Troubleshooting

- **Nothing reaches Discord**: check `enabled`, the minimum level, and that `discord` is in the logging stack; run `php artisan discord-logger:test`.
- **Change not applied in a long-running worker**: queue workers keep the resolved channel; restart them (`php artisan queue:restart`).
- **Settings table missing**: the logger falls back to the `.env` config until `php artisan migrate` runs.
