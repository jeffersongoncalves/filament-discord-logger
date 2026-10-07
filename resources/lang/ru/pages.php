<?php

return [
    'navigation_label' => 'Discord Logger',
    'navigation_group' => 'Настройки',
    'title' => 'Настройки Discord Logger',
    'sections' => [
        'delivery' => [
            'heading' => 'Доставка',
            'description' => 'Куда и начиная с какого уровня логи отправляются в Discord.',
        ],
        'routing' => [
            'heading' => 'Маршрутизация и упоминания',
            'description' => 'Отправляйте определённые уровни в другой канал и уведомляйте людей о важных ошибках.',
        ],
        'content' => [
            'heading' => 'Содержимое сообщения',
            'description' => 'Что включает каждое сообщение Discord.',
        ],
        'noise' => [
            'heading' => 'Контроль шума',
            'description' => 'Группируйте повторяющиеся ошибки и ограничивайте количество отправляемых сообщений.',
        ],
    ],
    'fields' => [
        'enabled' => 'Отправлять логи в Discord',
        'webhook_url' => [
            'label' => 'URL вебхука',
            'helper' => 'Оставьте пустым, чтобы использовать URL из .env (LOG_DISCORD_WEBHOOK_URL). Хранится в зашифрованном виде.',
        ],
        'level' => 'Минимальный уровень',
        'level_key' => 'Уровень',
        'queue_enabled' => [
            'label' => 'Отправлять в фоне (очередь)',
            'helper' => 'Рекомендуется: запросы никогда не блокируются, а лимиты Discord повторяются.',
        ],
        'from_name' => 'Имя бота',
        'from_avatar_url' => 'URL аватара бота',
        'level_webhooks' => [
            'label' => 'Вебхук для уровня',
            'helper' => 'Например, CRITICAL в канал #alerts. Уровни без строки используют основной вебхук. Хранится в зашифрованном виде.',
        ],
        'mentions' => [
            'label' => 'Упоминания для уровня',
            'helper' => 'Используйте @here, @everyone, <@&ROLE_ID> или <@USER_ID>.',
            'value' => 'Упоминание',
        ],
        'runtime_context' => 'Добавлять запрос, задачу или команду, записавшую лог',
        'stacktrace' => [
            'label' => 'Стек вызовов',
            'smart' => 'Умный',
            'full' => 'Полный',
            'none' => 'Нет',
        ],
        'attach_stacktrace' => 'Прикладывать полный стек вызовов файлом',
        'grouping_strategy' => [
            'label' => 'Группировать ошибки по',
            'exception' => 'Классу и месту исключения',
            'level_message' => 'Уровню и сообщению',
            'message' => 'Сообщению',
        ],
        'grouping_normalize' => 'Игнорировать числа, UUID и хеши при группировке',
        'deduplication_enabled' => 'Отправлять каждую ошибку только раз за окно',
        'deduplication_window' => 'Окно дедупликации (секунды)',
        'deduplication_summary' => 'Отправлять сводку «произошло N раз»',
        'rate_limit_enabled' => 'Ограничение отправки',
        'rate_limit_global_max' => 'Макс. сообщений',
        'rate_limit_global_per_seconds' => 'За секунд',
        'rate_limit_fingerprint_max' => 'Макс. сообщений на ошибку',
        'rate_limit_fingerprint_per_seconds' => 'За секунд, на ошибку',
    ],
];
