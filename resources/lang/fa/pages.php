<?php

return [
    'navigation_label' => 'Discord Logger',
    'navigation_group' => 'تنظیمات',
    'title' => 'تنظیمات Discord Logger',
    'sections' => [
        'delivery' => [
            'heading' => 'ارسال',
            'description' => 'لاگ‌ها به کجا و از چه سطحی به Discord ارسال می‌شوند.',
        ],
        'routing' => [
            'heading' => 'مسیردهی و اشاره‌ها',
            'description' => 'سطوح خاص را به کانال دیگری بفرستید و در خطاهای مهم به افراد اطلاع دهید.',
        ],
        'content' => [
            'heading' => 'محتوای پیام',
            'description' => 'هر پیام Discord شامل چه چیزی است.',
        ],
        'noise' => [
            'heading' => 'کنترل نویز',
            'description' => 'خطاهای تکراری را گروه‌بندی کنید و تعداد پیام‌های ارسالی را محدود کنید.',
        ],
    ],
    'fields' => [
        'enabled' => 'ارسال لاگ‌ها به Discord',
        'webhook_url' => [
            'label' => 'آدرس Webhook',
            'helper' => 'برای استفاده از آدرس موجود در .env (LOG_DISCORD_WEBHOOK_URL) خالی بگذارید. به‌صورت رمزنگاری‌شده ذخیره می‌شود.',
        ],
        'level' => 'حداقل سطح',
        'level_key' => 'سطح',
        'queue_enabled' => [
            'label' => 'ارسال در پس‌زمینه (صف)',
            'helper' => 'توصیه می‌شود: درخواست‌ها هرگز مسدود نمی‌شوند و محدودیت‌های Discord دوباره امتحان می‌شوند.',
        ],
        'from_name' => 'نام ربات',
        'from_avatar_url' => 'آدرس آواتار ربات',
        'level_webhooks' => [
            'label' => 'Webhook برای هر سطح',
            'helper' => 'مثلاً CRITICAL به کانال #alerts. سطوح بدون ردیف از Webhook اصلی استفاده می‌کنند. به‌صورت رمزنگاری‌شده ذخیره می‌شود.',
        ],
        'mentions' => [
            'label' => 'اشاره‌ها برای هر سطح',
            'helper' => 'از @here، @everyone، <@&ROLE_ID> یا <@USER_ID> استفاده کنید.',
            'value' => 'اشاره',
        ],
        'runtime_context' => 'افزودن درخواست، کار یا فرمانی که لاگ را ثبت کرد',
        'stacktrace' => [
            'label' => 'Stacktrace',
            'smart' => 'هوشمند',
            'full' => 'کامل',
            'none' => 'هیچ',
        ],
        'attach_stacktrace' => 'پیوست Stacktrace کامل به‌صورت فایل',
        'grouping_strategy' => [
            'label' => 'گروه‌بندی خطاها بر اساس',
            'exception' => 'کلاس و محل استثنا',
            'level_message' => 'سطح و پیام',
            'message' => 'پیام',
        ],
        'grouping_normalize' => 'نادیده گرفتن اعداد، UUIDها و هش‌ها هنگام گروه‌بندی',
        'deduplication_enabled' => 'ارسال هر خطا فقط یک بار در هر بازه',
        'deduplication_window' => 'بازه حذف تکرار (ثانیه)',
        'deduplication_summary' => 'ارسال خلاصه «N بار رخ داد»',
        'rate_limit_enabled' => 'محدودیت ارسال',
        'rate_limit_global_max' => 'حداکثر پیام',
        'rate_limit_global_per_seconds' => 'در هر چند ثانیه',
        'rate_limit_fingerprint_max' => 'حداکثر پیام برای هر خطا',
        'rate_limit_fingerprint_per_seconds' => 'در هر چند ثانیه، برای هر خطا',
    ],
];
