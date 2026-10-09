# Changelog

All notable changes to this project will be documented in this file.

## 3.1.0 - 2026-10-09

`Plugin::make()->navigationGroup(string|Closure)` puts the settings page in one of your panel's own navigation groups (requires filament-analytics-core 3.1). Without it the translated group is kept.

## 3.0.0 - 2026-10-07

First release for Filament 5.x.

Settings page for [laravel-discord-logger](https://github.com/jeffersongoncalves/laravel-discord-logger) on top of [laravel-settings-discord-logger](https://github.com/jeffersongoncalves/laravel-settings-discord-logger):

- Delivery: on/off, webhook URL (empty keeps .env), minimum level, queue, bot name and avatar
- Routing & mentions: webhook and mention per level
- Message content: runtime context, stacktrace mode and attachment
- Noise control: grouping, deduplication, rate limits
- Translations in 18 languages
