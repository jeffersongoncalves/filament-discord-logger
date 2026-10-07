<?php

return [
    'navigation_label' => 'Discord Logger',
    'navigation_group' => 'Parametrlər',
    'title' => 'Discord Logger parametrləri',
    'sections' => [
        'delivery' => [
            'heading' => 'Çatdırılma',
            'description' => 'Logların Discord-a hara və hansı səviyyədən göndərildiyi.',
        ],
        'routing' => [
            'heading' => 'Yönləndirmə və qeydlər',
            'description' => 'Müəyyən səviyyələri başqa kanala göndərin və vacib xətalarda insanları xəbərdar edin.',
        ],
        'content' => [
            'heading' => 'Mesajın məzmunu',
            'description' => 'Hər Discord mesajına nə daxildir.',
        ],
        'noise' => [
            'heading' => 'Səs-küyə nəzarət',
            'description' => 'Təkrarlanan xətaları qruplaşdırın və göndərilən mesajların sayını məhdudlaşdırın.',
        ],
    ],
    'fields' => [
        'enabled' => 'Logları Discord-a göndər',
        'webhook_url' => [
            'label' => 'Webhook URL-i',
            'helper' => '.env-dəki URL-dən (LOG_DISCORD_WEBHOOK_URL) istifadə etmək üçün boş buraxın. Şifrələnmiş saxlanılır.',
        ],
        'level' => 'Minimum səviyyə',
        'level_key' => 'Səviyyə',
        'queue_enabled' => [
            'label' => 'Arxa planda göndər (növbə)',
            'helper' => 'Tövsiyə olunur: sorğular heç vaxt bloklanmır və Discord limitləri təkrar cəhd edilir.',
        ],
        'from_name' => 'Bot adı',
        'from_avatar_url' => 'Bot avatar URL-i',
        'level_webhooks' => [
            'label' => 'Səviyyəyə görə webhook',
            'helper' => 'Məs. CRITICAL #alerts kanalına. Sətri olmayan səviyyələr əsas webhook-dan istifadə edir. Şifrələnmiş saxlanılır.',
        ],
        'mentions' => [
            'label' => 'Səviyyəyə görə qeydlər',
            'helper' => '@here, @everyone, <@&ROLE_ID> və ya <@USER_ID> istifadə edin.',
            'value' => 'Qeyd',
        ],
        'runtime_context' => 'Logu yazan sorğunu, işi və ya əmri əlavə et',
        'stacktrace' => [
            'label' => 'Stacktrace',
            'smart' => 'Ağıllı',
            'full' => 'Tam',
            'none' => 'Heç biri',
        ],
        'attach_stacktrace' => 'Tam stacktrace-i fayl kimi əlavə et',
        'grouping_strategy' => [
            'label' => 'Xətaları qruplaşdır',
            'exception' => 'İstisna sinfi və yeri',
            'level_message' => 'Səviyyə və mesaj',
            'message' => 'Mesaj',
        ],
        'grouping_normalize' => 'Qruplaşdırarkən rəqəmləri, UUID və hash-ləri nəzərə alma',
        'deduplication_enabled' => 'Hər xətanı pəncərə ərzində yalnız bir dəfə göndər',
        'deduplication_window' => 'Təkrarlanma pəncərəsi (saniyə)',
        'deduplication_summary' => '"N dəfə baş verdi" xülasəsi göndər',
        'rate_limit_enabled' => 'Göndərmə limiti',
        'rate_limit_global_max' => 'Maks. mesaj',
        'rate_limit_global_per_seconds' => 'Saniyə ərzində',
        'rate_limit_fingerprint_max' => 'Xəta başına maks. mesaj',
        'rate_limit_fingerprint_per_seconds' => 'Saniyə ərzində, xəta başına',
    ],
];
