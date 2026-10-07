<?php

return [
    'navigation_label' => 'Discord Logger',
    'navigation_group' => 'Ustawienia',
    'title' => 'Ustawienia Discord Logger',
    'sections' => [
        'delivery' => [
            'heading' => 'Dostarczanie',
            'description' => 'Dokąd i od jakiego poziomu logi są wysyłane do Discorda.',
        ],
        'routing' => [
            'heading' => 'Kierowanie i wzmianki',
            'description' => 'Wysyłaj wybrane poziomy na inny kanał i powiadamiaj osoby o ważnych błędach.',
        ],
        'content' => [
            'heading' => 'Treść wiadomości',
            'description' => 'Co zawiera każda wiadomość Discord.',
        ],
        'noise' => [
            'heading' => 'Kontrola szumu',
            'description' => 'Grupuj powtarzające się błędy i ograniczaj liczbę wysyłanych wiadomości.',
        ],
    ],
    'fields' => [
        'enabled' => 'Wysyłaj logi do Discorda',
        'webhook_url' => [
            'label' => 'URL webhooka',
            'helper' => 'Pozostaw puste, aby użyć URL z .env (LOG_DISCORD_WEBHOOK_URL). Przechowywany w postaci zaszyfrowanej.',
        ],
        'level' => 'Minimalny poziom',
        'level_key' => 'Poziom',
        'queue_enabled' => [
            'label' => 'Wysyłaj w tle (kolejka)',
            'helper' => 'Zalecane: żądania nigdy nie są blokowane, a limity Discorda są ponawiane.',
        ],
        'from_name' => 'Nazwa bota',
        'from_avatar_url' => 'URL awatara bota',
        'level_webhooks' => [
            'label' => 'Webhook dla poziomu',
            'helper' => 'Np. CRITICAL na kanał #alerty. Poziomy bez wiersza używają głównego webhooka. Przechowywany w postaci zaszyfrowanej.',
        ],
        'mentions' => [
            'label' => 'Wzmianki dla poziomu',
            'helper' => 'Użyj @here, @everyone, <@&ROLE_ID> lub <@USER_ID>.',
            'value' => 'Wzmianka',
        ],
        'runtime_context' => 'Dołącz żądanie, job lub polecenie, które zapisało log',
        'stacktrace' => [
            'label' => 'Stacktrace',
            'smart' => 'Inteligentny',
            'full' => 'Pełny',
            'none' => 'Brak',
        ],
        'attach_stacktrace' => 'Dołącz pełny stacktrace jako plik',
        'grouping_strategy' => [
            'label' => 'Grupuj błędy według',
            'exception' => 'Klasa i miejsce wyjątku',
            'level_message' => 'Poziom i wiadomość',
            'message' => 'Wiadomość',
        ],
        'grouping_normalize' => 'Ignoruj liczby, UUID i hashe podczas grupowania',
        'deduplication_enabled' => 'Wysyłaj każdy błąd tylko raz na okno',
        'deduplication_window' => 'Okno deduplikacji (sekundy)',
        'deduplication_summary' => 'Wysyłaj podsumowanie „wystąpiło N razy”',
        'rate_limit_enabled' => 'Limit wysyłania',
        'rate_limit_global_max' => 'Maks. wiadomości',
        'rate_limit_global_per_seconds' => 'Na sekundy',
        'rate_limit_fingerprint_max' => 'Maks. wiadomości na błąd',
        'rate_limit_fingerprint_per_seconds' => 'Na sekundy, na błąd',
    ],
];
