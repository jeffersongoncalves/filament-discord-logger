<?php

return [
    'navigation_label' => 'Discord Logger',
    'navigation_group' => 'Impostazioni',
    'title' => 'Impostazioni di Discord Logger',
    'sections' => [
        'delivery' => [
            'heading' => 'Consegna',
            'description' => 'Dove e da quale livello i log vengono inviati a Discord.',
        ],
        'routing' => [
            'heading' => 'Instradamento e menzioni',
            'description' => 'Invia livelli specifici a un altro canale e avvisa le persone sugli errori importanti.',
        ],
        'content' => [
            'heading' => 'Contenuto del messaggio',
            'description' => 'Cosa include ogni messaggio Discord.',
        ],
        'noise' => [
            'heading' => 'Controllo del rumore',
            'description' => 'Raggruppa gli errori ripetuti e limita quanti messaggi vengono inviati.',
        ],
    ],
    'fields' => [
        'enabled' => 'Invia i log a Discord',
        'webhook_url' => [
            'label' => 'URL del webhook',
            'helper' => 'Lascia vuoto per usare l\'URL del .env (LOG_DISCORD_WEBHOOK_URL). Memorizzato cifrato.',
        ],
        'level' => 'Livello minimo',
        'level_key' => 'Livello',
        'queue_enabled' => [
            'label' => 'Invia in background (coda)',
            'helper' => 'Consigliato: le richieste non vengono mai bloccate e i limiti di Discord vengono ritentati.',
        ],
        'from_name' => 'Nome del bot',
        'from_avatar_url' => 'URL dell\'avatar del bot',
        'level_webhooks' => [
            'label' => 'Webhook per livello',
            'helper' => 'Es.: CRITICAL verso un canale #alert. I livelli senza riga usano il webhook principale. Memorizzato cifrato.',
        ],
        'mentions' => [
            'label' => 'Menzioni per livello',
            'helper' => 'Usa @here, @everyone, <@&ROLE_ID> o <@USER_ID>.',
            'value' => 'Menzione',
        ],
        'runtime_context' => 'Includi la richiesta, il job o il comando che ha generato il log',
        'stacktrace' => [
            'label' => 'Stacktrace',
            'smart' => 'Intelligente',
            'full' => 'Completo',
            'none' => 'Nessuno',
        ],
        'attach_stacktrace' => 'Allega lo stacktrace completo come file',
        'grouping_strategy' => [
            'label' => 'Raggruppa gli errori per',
            'exception' => 'Classe e posizione dell\'eccezione',
            'level_message' => 'Livello e messaggio',
            'message' => 'Messaggio',
        ],
        'grouping_normalize' => 'Ignora numeri, UUID e hash nel raggruppamento',
        'deduplication_enabled' => 'Invia ogni errore una sola volta per finestra',
        'deduplication_window' => 'Finestra di deduplicazione (secondi)',
        'deduplication_summary' => 'Invia un riepilogo "si è verificato N volte"',
        'rate_limit_enabled' => 'Limite di invio',
        'rate_limit_global_max' => 'Messaggi massimi',
        'rate_limit_global_per_seconds' => 'Per secondi',
        'rate_limit_fingerprint_max' => 'Messaggi massimi per errore',
        'rate_limit_fingerprint_per_seconds' => 'Per secondi, per errore',
    ],
];
