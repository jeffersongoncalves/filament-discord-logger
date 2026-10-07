<?php

return [
    'navigation_label' => 'Discord Logger',
    'navigation_group' => 'Settings',
    'title' => 'Discord Logger Settings',

    'sections' => [
        'delivery' => [
            'heading' => 'Delivery',
            'description' => 'Where and from which level logs are sent to Discord.',
        ],
        'routing' => [
            'heading' => 'Routing & mentions',
            'description' => 'Send specific levels to another channel and ping people on important errors.',
        ],
        'content' => [
            'heading' => 'Message content',
            'description' => 'What each Discord message includes.',
        ],
        'noise' => [
            'heading' => 'Noise control',
            'description' => 'Group repeated errors and cap how many messages are sent.',
        ],
    ],

    'fields' => [
        'enabled' => 'Send logs to Discord',
        'webhook_url' => [
            'label' => 'Webhook URL',
            'helper' => 'Leave empty to use the URL from .env (LOG_DISCORD_WEBHOOK_URL). Stored encrypted.',
        ],
        'level' => 'Minimum level',
        'level_key' => 'Level',
        'queue_enabled' => [
            'label' => 'Send in the background (queue)',
            'helper' => 'Recommended: requests are never blocked and Discord rate limits are retried.',
        ],
        'from_name' => 'Bot name',
        'from_avatar_url' => 'Bot avatar URL',
        'level_webhooks' => [
            'label' => 'Webhook per level',
            'helper' => 'E.g. CRITICAL to an #alerts channel. Levels without a row use the main webhook. Stored encrypted.',
        ],
        'mentions' => [
            'label' => 'Mentions per level',
            'helper' => 'Use @here, @everyone, <@&ROLE_ID> or <@USER_ID>.',
            'value' => 'Mention',
        ],
        'runtime_context' => 'Include the request, job or command that logged',
        'stacktrace' => [
            'label' => 'Stacktrace',
            'smart' => 'Smart',
            'full' => 'Full',
            'none' => 'None',
        ],
        'attach_stacktrace' => 'Attach the full stacktrace as a file',
        'grouping_strategy' => [
            'label' => 'Group errors by',
            'exception' => 'Exception class and location',
            'level_message' => 'Level and message',
            'message' => 'Message',
        ],
        'grouping_normalize' => 'Ignore numbers, UUIDs and hashes when grouping',
        'deduplication_enabled' => 'Send each error only once per window',
        'deduplication_window' => 'Deduplication window (seconds)',
        'deduplication_summary' => 'Send an "occurred N times" summary',
        'rate_limit_enabled' => 'Rate limit',
        'rate_limit_global_max' => 'Max messages',
        'rate_limit_global_per_seconds' => 'Per seconds',
        'rate_limit_fingerprint_max' => 'Max messages per error',
        'rate_limit_fingerprint_per_seconds' => 'Per seconds, per error',
    ],
];
