<?php

return [
    'navigation_label' => 'Discord Logger',
    'navigation_group' => 'Einstellungen',
    'title' => 'Discord-Logger-Einstellungen',
    'sections' => [
        'delivery' => [
            'heading' => 'Zustellung',
            'description' => 'Wohin und ab welchem Level Logs an Discord gesendet werden.',
        ],
        'routing' => [
            'heading' => 'Routing und Erwähnungen',
            'description' => 'Bestimmte Level an einen anderen Kanal senden und bei wichtigen Fehlern Personen benachrichtigen.',
        ],
        'content' => [
            'heading' => 'Nachrichteninhalt',
            'description' => 'Was jede Discord-Nachricht enthält.',
        ],
        'noise' => [
            'heading' => 'Rauschkontrolle',
            'description' => 'Wiederholte Fehler gruppieren und die Anzahl gesendeter Nachrichten begrenzen.',
        ],
    ],
    'fields' => [
        'enabled' => 'Logs an Discord senden',
        'webhook_url' => [
            'label' => 'Webhook-URL',
            'helper' => 'Leer lassen, um die URL aus der .env zu verwenden (LOG_DISCORD_WEBHOOK_URL). Wird verschlüsselt gespeichert.',
        ],
        'level' => 'Mindest-Level',
        'level_key' => 'Level',
        'queue_enabled' => [
            'label' => 'Im Hintergrund senden (Queue)',
            'helper' => 'Empfohlen: Anfragen werden nie blockiert und Discord-Rate-Limits werden erneut versucht.',
        ],
        'from_name' => 'Bot-Name',
        'from_avatar_url' => 'Bot-Avatar-URL',
        'level_webhooks' => [
            'label' => 'Webhook pro Level',
            'helper' => 'Z. B. CRITICAL an einen #alerts-Kanal. Level ohne Zeile nutzen den Haupt-Webhook. Wird verschlüsselt gespeichert.',
        ],
        'mentions' => [
            'label' => 'Erwähnungen pro Level',
            'helper' => 'Verwenden Sie @here, @everyone, <@&ROLE_ID> oder <@USER_ID>.',
            'value' => 'Erwähnung',
        ],
        'runtime_context' => 'Anfrage, Job oder Befehl einschließen, der geloggt hat',
        'stacktrace' => [
            'label' => 'Stacktrace',
            'smart' => 'Intelligent',
            'full' => 'Vollständig',
            'none' => 'Keiner',
        ],
        'attach_stacktrace' => 'Vollständigen Stacktrace als Datei anhängen',
        'grouping_strategy' => [
            'label' => 'Fehler gruppieren nach',
            'exception' => 'Exception-Klasse und Ort',
            'level_message' => 'Level und Nachricht',
            'message' => 'Nachricht',
        ],
        'grouping_normalize' => 'Zahlen, UUIDs und Hashes beim Gruppieren ignorieren',
        'deduplication_enabled' => 'Jeden Fehler nur einmal pro Zeitfenster senden',
        'deduplication_window' => 'Deduplizierungsfenster (Sekunden)',
        'deduplication_summary' => 'Zusammenfassung „N-mal aufgetreten“ senden',
        'rate_limit_enabled' => 'Ratenbegrenzung',
        'rate_limit_global_max' => 'Max. Nachrichten',
        'rate_limit_global_per_seconds' => 'Pro Sekunden',
        'rate_limit_fingerprint_max' => 'Max. Nachrichten pro Fehler',
        'rate_limit_fingerprint_per_seconds' => 'Pro Sekunden, pro Fehler',
    ],
];
