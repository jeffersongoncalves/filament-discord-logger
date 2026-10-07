<?php

return [
    'navigation_label' => 'Discord Logger',
    'navigation_group' => 'الإعدادات',
    'title' => 'إعدادات Discord Logger',
    'sections' => [
        'delivery' => [
            'heading' => 'التسليم',
            'description' => 'إلى أين ومن أي مستوى تُرسَل السجلات إلى Discord.',
        ],
        'routing' => [
            'heading' => 'التوجيه والإشارات',
            'description' => 'أرسل مستويات محددة إلى قناة أخرى ونبّه الأشخاص عند الأخطاء المهمة.',
        ],
        'content' => [
            'heading' => 'محتوى الرسالة',
            'description' => 'ما الذي تتضمنه كل رسالة على Discord.',
        ],
        'noise' => [
            'heading' => 'التحكم في الضوضاء',
            'description' => 'جمّع الأخطاء المتكررة وحدّد عدد الرسائل المرسلة.',
        ],
    ],
    'fields' => [
        'enabled' => 'إرسال السجلات إلى Discord',
        'webhook_url' => [
            'label' => 'رابط الـ Webhook',
            'helper' => 'اتركه فارغًا لاستخدام الرابط من ملف .env (LOG_DISCORD_WEBHOOK_URL). يُخزَّن مشفرًا.',
        ],
        'level' => 'الحد الأدنى للمستوى',
        'level_key' => 'المستوى',
        'queue_enabled' => [
            'label' => 'الإرسال في الخلفية (طابور)',
            'helper' => 'موصى به: لا تُحظر الطلبات أبدًا وتُعاد محاولة حدود Discord.',
        ],
        'from_name' => 'اسم البوت',
        'from_avatar_url' => 'رابط صورة البوت',
        'level_webhooks' => [
            'label' => 'Webhook لكل مستوى',
            'helper' => 'مثال: CRITICAL إلى قناة #alerts. المستويات بدون سطر تستخدم الـ Webhook الرئيسي. يُخزَّن مشفرًا.',
        ],
        'mentions' => [
            'label' => 'الإشارات لكل مستوى',
            'helper' => 'استخدم @here أو @everyone أو <@&ROLE_ID> أو <@USER_ID>.',
            'value' => 'الإشارة',
        ],
        'runtime_context' => 'تضمين الطلب أو المهمة أو الأمر الذي أنشأ السجل',
        'stacktrace' => [
            'label' => 'تتبع المكدس',
            'smart' => 'ذكي',
            'full' => 'كامل',
            'none' => 'بدون',
        ],
        'attach_stacktrace' => 'إرفاق تتبع المكدس الكامل كملف',
        'grouping_strategy' => [
            'label' => 'تجميع الأخطاء حسب',
            'exception' => 'فئة الاستثناء وموقعه',
            'level_message' => 'المستوى والرسالة',
            'message' => 'الرسالة',
        ],
        'grouping_normalize' => 'تجاهل الأرقام وUUID والـ hash عند التجميع',
        'deduplication_enabled' => 'إرسال كل خطأ مرة واحدة فقط لكل نافذة',
        'deduplication_window' => 'نافذة إزالة التكرار (بالثواني)',
        'deduplication_summary' => 'إرسال ملخص "حدث N مرة"',
        'rate_limit_enabled' => 'حد الإرسال',
        'rate_limit_global_max' => 'الحد الأقصى للرسائل',
        'rate_limit_global_per_seconds' => 'لكل ثوانٍ',
        'rate_limit_fingerprint_max' => 'الحد الأقصى للرسائل لكل خطأ',
        'rate_limit_fingerprint_per_seconds' => 'لكل ثوانٍ، لكل خطأ',
    ],
];
