<div class="filament-hidden">

![Filament Discord Logger](https://raw.githubusercontent.com/jeffersongoncalves/filament-discord-logger/2.x/art/jeffersongoncalves-filament-discord-logger.png)

</div>

# Filament Discord Logger

[![Buy Me A Coffee](https://img.shields.io/badge/Buy%20Me%20A%20Coffee-support-FFDD00?style=flat-square&logo=buy-me-a-coffee&logoColor=black)](https://buymeacoffee.com/jeffersongoncalves)

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jeffersongoncalves/filament-discord-logger.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-discord-logger)
[![Tests](https://img.shields.io/github/actions/workflow/status/jeffersongoncalves/filament-discord-logger/tests.yml?branch=2.x&label=tests&style=flat-square)](https://github.com/jeffersongoncalves/filament-discord-logger/actions?query=workflow%3ATests+branch%3A2.x)
[![Total Downloads](https://img.shields.io/packagist/dt/jeffersongoncalves/filament-discord-logger.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-discord-logger)
[![License](https://img.shields.io/packagist/l/jeffersongoncalves/filament-discord-logger.svg?style=flat-square)](LICENSE.md)

A Filament settings page for [laravel-discord-logger](https://github.com/jeffersongoncalves/laravel-discord-logger): manage the Discord webhook, minimum level, per-level channels, mentions, deduplication and rate limits from the admin panel instead of `.env`.

Built on top of [jeffersongoncalves/laravel-settings-discord-logger](https://github.com/jeffersongoncalves/laravel-settings-discord-logger), which stores the values with Spatie Laravel Settings and injects them into the logger at runtime.

## Compatibility

| Branch | Filament | Package version |
|--------|----------|-----------------|
| 1.x | 3.x | `^1.0` |
| 2.x | 4.x | `^2.0` |
| 3.x | 5.x | `^3.0` |

## Installation

```bash
composer require jeffersongoncalves/filament-discord-logger:"^2.0"
php artisan migrate
```

The settings migration seeds every value from your current config, so an app already configured through `.env` keeps working.

Send logs to the `discord` channel (registered automatically) from your stack:

```php
// config/logging.php
'stack' => [
    'driver' => 'stack',
    'channels' => ['daily', 'discord'],
],
```

## Usage

Add the plugin to your panel provider:

```php
use JeffersonGoncalves\Filament\DiscordLogger\DiscordLoggerPlugin;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugins([
            DiscordLoggerPlugin::make(),
        ]);
}
```

Then open **Settings > Discord Logger**:

| Section | Options |
|---------|---------|
| Delivery | On/off, webhook URL (empty = keep `.env`, stored encrypted), minimum level, queue, bot name and avatar |
| Routing & mentions | A webhook per level (e.g. `CRITICAL` to `#alerts`) and mentions per level (`@here`, `<@&ROLE_ID>`, `<@USER_ID>`) |
| Message content | Request/job/command context, stacktrace mode, full stacktrace as attachment |
| Noise control | Error grouping, deduplication window and summary, global and per-error rate limits |

Run `php artisan discord-logger:test` to send a test message to the stored webhook.

### Customization

```php
DiscordLoggerPlugin::make()
    ->settingsPage(false), // don't register the settings page
```

### Navigation group

Put the settings page in one of your panel's own navigation groups (a string or a closure):

```php
DiscordLoggerPlugin::make()
    ->navigationGroup(fn (): string => __('admin.navigation.settings')),
```

## Requirements

- PHP 8.2 or higher
- Filament 4.x

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Jèfferson Gonçalves](https://github.com/jeffersongoncalves)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
