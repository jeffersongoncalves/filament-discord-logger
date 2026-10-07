<?php

return [
    'navigation_label' => 'Discord Logger',
    'navigation_group' => 'Sozlamalar',
    'title' => 'Discord Logger sozlamalari',
    'sections' => [
        'delivery' => [
            'heading' => 'Yetkazish',
            'description' => 'Loglar Discordʼga qayerga va qaysi darajadan boshlab yuborilishi.',
        ],
        'routing' => [
            'heading' => 'Yoʻnaltirish va eslatmalar',
            'description' => 'Muayyan darajalarni boshqa kanalga yuboring va muhim xatolarda odamlarni ogohlantiring.',
        ],
        'content' => [
            'heading' => 'Xabar mazmuni',
            'description' => 'Har bir Discord xabari nimani oʻz ichiga oladi.',
        ],
        'noise' => [
            'heading' => 'Shovqin nazorati',
            'description' => 'Takrorlanuvchi xatolarni guruhlang va yuboriladigan xabarlar sonini cheklang.',
        ],
    ],
    'fields' => [
        'enabled' => 'Loglarni Discordʼga yuborish',
        'webhook_url' => [
            'label' => 'Webhook URL manzili',
            'helper' => '.env dagi URLʼdan (LOG_DISCORD_WEBHOOK_URL) foydalanish uchun boʻsh qoldiring. Shifrlangan holda saqlanadi.',
        ],
        'level' => 'Minimal daraja',
        'level_key' => 'Daraja',
        'queue_enabled' => [
            'label' => 'Fon rejimida yuborish (navbat)',
            'helper' => 'Tavsiya etiladi: soʻrovlar hech qachon bloklanmaydi va Discord cheklovlari qayta uriniladi.',
        ],
        'from_name' => 'Bot nomi',
        'from_avatar_url' => 'Bot avatari URL manzili',
        'level_webhooks' => [
            'label' => 'Daraja boʻyicha webhook',
            'helper' => 'Masalan, CRITICAL #alerts kanaliga. Qatori yoʻq darajalar asosiy webhookdan foydalanadi. Shifrlangan holda saqlanadi.',
        ],
        'mentions' => [
            'label' => 'Daraja boʻyicha eslatmalar',
            'helper' => '@here, @everyone, <@&ROLE_ID> yoki <@USER_ID> dan foydalaning.',
            'value' => 'Eslatma',
        ],
        'runtime_context' => 'Log yozgan soʻrov, vazifa yoki buyruqni qoʻshish',
        'stacktrace' => [
            'label' => 'Stacktrace',
            'smart' => 'Aqlli',
            'full' => 'Toʻliq',
            'none' => 'Yoʻq',
        ],
        'attach_stacktrace' => 'Toʻliq stacktraceʼni fayl sifatida biriktirish',
        'grouping_strategy' => [
            'label' => 'Xatolarni guruhlash',
            'exception' => 'Istisno klassi va joylashuvi',
            'level_message' => 'Daraja va xabar',
            'message' => 'Xabar',
        ],
        'grouping_normalize' => 'Guruhlashda raqamlar, UUID va xeshlarni eʼtiborsiz qoldirish',
        'deduplication_enabled' => 'Har bir xatoni oyna davomida faqat bir marta yuborish',
        'deduplication_window' => 'Takrorlarni olib tashlash oynasi (soniya)',
        'deduplication_summary' => '"N marta yuz berdi" xulosasini yuborish',
        'rate_limit_enabled' => 'Yuborish cheklovi',
        'rate_limit_global_max' => 'Maks. xabarlar',
        'rate_limit_global_per_seconds' => 'Soniya ichida',
        'rate_limit_fingerprint_max' => 'Xato uchun maks. xabarlar',
        'rate_limit_fingerprint_per_seconds' => 'Soniya ichida, xato uchun',
    ],
];
