<?php

return [
    'navigation_label' => 'Discord Logger',
    'navigation_group' => 'Ayarlar',
    'title' => 'Discord Logger Ayarları',
    'sections' => [
        'delivery' => [
            'heading' => 'Teslimat',
            'description' => 'Logların Discord\'a nereye ve hangi seviyeden itibaren gönderileceği.',
        ],
        'routing' => [
            'heading' => 'Yönlendirme ve bahsetmeler',
            'description' => 'Belirli seviyeleri başka bir kanala gönderin ve önemli hatalarda kişileri uyarın.',
        ],
        'content' => [
            'heading' => 'Mesaj içeriği',
            'description' => 'Her Discord mesajının içeriği.',
        ],
        'noise' => [
            'heading' => 'Gürültü kontrolü',
            'description' => 'Tekrarlanan hataları gruplayın ve gönderilen mesaj sayısını sınırlayın.',
        ],
    ],
    'fields' => [
        'enabled' => 'Logları Discord\'a gönder',
        'webhook_url' => [
            'label' => 'Webhook URL\'si',
            'helper' => '.env\'deki URL\'yi (LOG_DISCORD_WEBHOOK_URL) kullanmak için boş bırakın. Şifrelenmiş olarak saklanır.',
        ],
        'level' => 'Minimum seviye',
        'level_key' => 'Seviye',
        'queue_enabled' => [
            'label' => 'Arka planda gönder (kuyruk)',
            'helper' => 'Önerilir: istekler asla engellenmez ve Discord sınırları yeniden denenir.',
        ],
        'from_name' => 'Bot adı',
        'from_avatar_url' => 'Bot avatar URL\'si',
        'level_webhooks' => [
            'label' => 'Seviye başına webhook',
            'helper' => 'Örn. CRITICAL için #alerts kanalı. Satırı olmayan seviyeler ana webhook\'u kullanır. Şifrelenmiş olarak saklanır.',
        ],
        'mentions' => [
            'label' => 'Seviye başına bahsetmeler',
            'helper' => '@here, @everyone, <@&ROLE_ID> veya <@USER_ID> kullanın.',
            'value' => 'Bahsetme',
        ],
        'runtime_context' => 'Log yazan isteği, işi veya komutu ekle',
        'stacktrace' => [
            'label' => 'Stacktrace',
            'smart' => 'Akıllı',
            'full' => 'Tam',
            'none' => 'Yok',
        ],
        'attach_stacktrace' => 'Tam stacktrace\'i dosya olarak ekle',
        'grouping_strategy' => [
            'label' => 'Hataları şuna göre grupla',
            'exception' => 'İstisna sınıfı ve konumu',
            'level_message' => 'Seviye ve mesaj',
            'message' => 'Mesaj',
        ],
        'grouping_normalize' => 'Gruplarken sayıları, UUID\'leri ve hash\'leri yok say',
        'deduplication_enabled' => 'Her hatayı pencere başına yalnızca bir kez gönder',
        'deduplication_window' => 'Tekilleştirme penceresi (saniye)',
        'deduplication_summary' => '"N kez oluştu" özeti gönder',
        'rate_limit_enabled' => 'Gönderim sınırı',
        'rate_limit_global_max' => 'Maks. mesaj',
        'rate_limit_global_per_seconds' => 'Saniye başına',
        'rate_limit_fingerprint_max' => 'Hata başına maks. mesaj',
        'rate_limit_fingerprint_per_seconds' => 'Saniye başına, hata başına',
    ],
];
