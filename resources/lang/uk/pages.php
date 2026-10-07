<?php

return [
    'navigation_label' => 'Discord Logger',
    'navigation_group' => 'Налаштування',
    'title' => 'Налаштування Discord Logger',
    'sections' => [
        'delivery' => [
            'heading' => 'Доставка',
            'description' => 'Куди і починаючи з якого рівня логи надсилаються в Discord.',
        ],
        'routing' => [
            'heading' => 'Маршрутизація та згадки',
            'description' => 'Надсилайте окремі рівні в інший канал і сповіщайте людей про важливі помилки.',
        ],
        'content' => [
            'heading' => 'Вміст повідомлення',
            'description' => 'Що містить кожне повідомлення Discord.',
        ],
        'noise' => [
            'heading' => 'Контроль шуму',
            'description' => 'Групуйте повторювані помилки та обмежуйте кількість надісланих повідомлень.',
        ],
    ],
    'fields' => [
        'enabled' => 'Надсилати логи в Discord',
        'webhook_url' => [
            'label' => 'URL вебхука',
            'helper' => 'Залиште порожнім, щоб використати URL з .env (LOG_DISCORD_WEBHOOK_URL). Зберігається в зашифрованому вигляді.',
        ],
        'level' => 'Мінімальний рівень',
        'level_key' => 'Рівень',
        'queue_enabled' => [
            'label' => 'Надсилати у фоні (черга)',
            'helper' => 'Рекомендовано: запити ніколи не блокуються, а ліміти Discord повторюються.',
        ],
        'from_name' => 'Ім\'я бота',
        'from_avatar_url' => 'URL аватара бота',
        'level_webhooks' => [
            'label' => 'Вебхук для рівня',
            'helper' => 'Наприклад, CRITICAL у канал #alerts. Рівні без рядка використовують основний вебхук. Зберігається в зашифрованому вигляді.',
        ],
        'mentions' => [
            'label' => 'Згадки для рівня',
            'helper' => 'Використовуйте @here, @everyone, <@&ROLE_ID> або <@USER_ID>.',
            'value' => 'Згадка',
        ],
        'runtime_context' => 'Додавати запит, задачу або команду, що записала лог',
        'stacktrace' => [
            'label' => 'Стек викликів',
            'smart' => 'Розумний',
            'full' => 'Повний',
            'none' => 'Немає',
        ],
        'attach_stacktrace' => 'Додавати повний стек викликів файлом',
        'grouping_strategy' => [
            'label' => 'Групувати помилки за',
            'exception' => 'Класом і місцем винятку',
            'level_message' => 'Рівнем і повідомленням',
            'message' => 'Повідомленням',
        ],
        'grouping_normalize' => 'Ігнорувати числа, UUID і хеші під час групування',
        'deduplication_enabled' => 'Надсилати кожну помилку лише раз за вікно',
        'deduplication_window' => 'Вікно дедуплікації (секунди)',
        'deduplication_summary' => 'Надсилати підсумок «сталося N разів»',
        'rate_limit_enabled' => 'Обмеження надсилання',
        'rate_limit_global_max' => 'Макс. повідомлень',
        'rate_limit_global_per_seconds' => 'За секунд',
        'rate_limit_fingerprint_max' => 'Макс. повідомлень на помилку',
        'rate_limit_fingerprint_per_seconds' => 'За секунд, на помилку',
    ],
];
