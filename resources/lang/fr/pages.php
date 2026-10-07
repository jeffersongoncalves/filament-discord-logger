<?php

return [
    'navigation_label' => 'Discord Logger',
    'navigation_group' => 'Paramètres',
    'title' => 'Paramètres de Discord Logger',
    'sections' => [
        'delivery' => [
            'heading' => 'Envoi',
            'description' => 'Où et à partir de quel niveau les logs sont envoyés à Discord.',
        ],
        'routing' => [
            'heading' => 'Routage et mentions',
            'description' => 'Envoyez certains niveaux vers un autre canal et notifiez des personnes pour les erreurs importantes.',
        ],
        'content' => [
            'heading' => 'Contenu du message',
            'description' => 'Ce que contient chaque message Discord.',
        ],
        'noise' => [
            'heading' => 'Contrôle du bruit',
            'description' => 'Regroupez les erreurs répétées et limitez le nombre de messages envoyés.',
        ],
    ],
    'fields' => [
        'enabled' => 'Envoyer les logs à Discord',
        'webhook_url' => [
            'label' => 'URL du webhook',
            'helper' => 'Laissez vide pour utiliser l\'URL du .env (LOG_DISCORD_WEBHOOK_URL). Stockée chiffrée.',
        ],
        'level' => 'Niveau minimum',
        'level_key' => 'Niveau',
        'queue_enabled' => [
            'label' => 'Envoyer en arrière-plan (file d\'attente)',
            'helper' => 'Recommandé : les requêtes ne sont jamais bloquées et les limites de Discord sont réessayées.',
        ],
        'from_name' => 'Nom du bot',
        'from_avatar_url' => 'URL de l\'avatar du bot',
        'level_webhooks' => [
            'label' => 'Webhook par niveau',
            'helper' => 'Ex. : CRITICAL vers un canal #alertes. Les niveaux sans ligne utilisent le webhook principal. Stocké chiffré.',
        ],
        'mentions' => [
            'label' => 'Mentions par niveau',
            'helper' => 'Utilisez @here, @everyone, <@&ROLE_ID> ou <@USER_ID>.',
            'value' => 'Mention',
        ],
        'runtime_context' => 'Inclure la requête, le job ou la commande à l\'origine du log',
        'stacktrace' => [
            'label' => 'Stacktrace',
            'smart' => 'Intelligent',
            'full' => 'Complet',
            'none' => 'Aucun',
        ],
        'attach_stacktrace' => 'Joindre la stacktrace complète en fichier',
        'grouping_strategy' => [
            'label' => 'Regrouper les erreurs par',
            'exception' => 'Classe et emplacement de l\'exception',
            'level_message' => 'Niveau et message',
            'message' => 'Message',
        ],
        'grouping_normalize' => 'Ignorer les nombres, UUID et hashs lors du regroupement',
        'deduplication_enabled' => 'Envoyer chaque erreur une seule fois par fenêtre',
        'deduplication_window' => 'Fenêtre de déduplication (secondes)',
        'deduplication_summary' => 'Envoyer un résumé « survenu N fois »',
        'rate_limit_enabled' => 'Limite d\'envoi',
        'rate_limit_global_max' => 'Messages maximum',
        'rate_limit_global_per_seconds' => 'Par secondes',
        'rate_limit_fingerprint_max' => 'Messages maximum par erreur',
        'rate_limit_fingerprint_per_seconds' => 'Par secondes, par erreur',
    ],
];
