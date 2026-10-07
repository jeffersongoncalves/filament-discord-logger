<?php

return [
    'navigation_label' => 'Discord Logger',
    'navigation_group' => 'Instellingen',
    'title' => 'Discord Logger-instellingen',
    'sections' => [
        'delivery' => [
            'heading' => 'Bezorging',
            'description' => 'Waarheen en vanaf welk niveau logs naar Discord worden gestuurd.',
        ],
        'routing' => [
            'heading' => 'Routering en vermeldingen',
            'description' => 'Stuur bepaalde niveaus naar een ander kanaal en waarschuw mensen bij belangrijke fouten.',
        ],
        'content' => [
            'heading' => 'Berichtinhoud',
            'description' => 'Wat elk Discord-bericht bevat.',
        ],
        'noise' => [
            'heading' => 'Ruisbeheersing',
            'description' => 'Groepeer herhaalde fouten en beperk hoeveel berichten worden verstuurd.',
        ],
    ],
    'fields' => [
        'enabled' => 'Logs naar Discord sturen',
        'webhook_url' => [
            'label' => 'Webhook-URL',
            'helper' => 'Laat leeg om de URL uit .env te gebruiken (LOG_DISCORD_WEBHOOK_URL). Wordt versleuteld opgeslagen.',
        ],
        'level' => 'Minimumniveau',
        'level_key' => 'Niveau',
        'queue_enabled' => [
            'label' => 'Op de achtergrond versturen (queue)',
            'helper' => 'Aanbevolen: verzoeken worden nooit geblokkeerd en Discord-limieten worden opnieuw geprobeerd.',
        ],
        'from_name' => 'Botnaam',
        'from_avatar_url' => 'Avatar-URL van de bot',
        'level_webhooks' => [
            'label' => 'Webhook per niveau',
            'helper' => 'Bijv. CRITICAL naar een #alerts-kanaal. Niveaus zonder rij gebruiken de hoofdwebhook. Wordt versleuteld opgeslagen.',
        ],
        'mentions' => [
            'label' => 'Vermeldingen per niveau',
            'helper' => 'Gebruik @here, @everyone, <@&ROLE_ID> of <@USER_ID>.',
            'value' => 'Vermelding',
        ],
        'runtime_context' => 'Het verzoek, de job of het commando dat logde toevoegen',
        'stacktrace' => [
            'label' => 'Stacktrace',
            'smart' => 'Slim',
            'full' => 'Volledig',
            'none' => 'Geen',
        ],
        'attach_stacktrace' => 'Volledige stacktrace als bestand bijvoegen',
        'grouping_strategy' => [
            'label' => 'Fouten groeperen op',
            'exception' => 'Exceptieklasse en locatie',
            'level_message' => 'Niveau en bericht',
            'message' => 'Bericht',
        ],
        'grouping_normalize' => 'Getallen, UUID\'s en hashes negeren bij groeperen',
        'deduplication_enabled' => 'Elke fout maar één keer per venster versturen',
        'deduplication_window' => 'Deduplicatievenster (seconden)',
        'deduplication_summary' => 'Een samenvatting "N keer opgetreden" versturen',
        'rate_limit_enabled' => 'Verzendlimiet',
        'rate_limit_global_max' => 'Max. berichten',
        'rate_limit_global_per_seconds' => 'Per seconden',
        'rate_limit_fingerprint_max' => 'Max. berichten per fout',
        'rate_limit_fingerprint_per_seconds' => 'Per seconden, per fout',
    ],
];
