<?php

return [
    'navigation_label' => 'Discord Logger',
    'navigation_group' => 'सेटिंग्स',
    'title' => 'Discord Logger सेटिंग्स',
    'sections' => [
        'delivery' => [
            'heading' => 'डिलीवरी',
            'description' => 'लॉग Discord पर कहाँ और किस स्तर से भेजे जाते हैं।',
        ],
        'routing' => [
            'heading' => 'रूटिंग और मेंशन',
            'description' => 'विशेष स्तरों को दूसरे चैनल पर भेजें और महत्वपूर्ण त्रुटियों पर लोगों को सूचित करें।',
        ],
        'content' => [
            'heading' => 'संदेश सामग्री',
            'description' => 'हर Discord संदेश में क्या शामिल है।',
        ],
        'noise' => [
            'heading' => 'शोर नियंत्रण',
            'description' => 'दोहराई गई त्रुटियों को समूहित करें और भेजे जाने वाले संदेशों की संख्या सीमित करें।',
        ],
    ],
    'fields' => [
        'enabled' => 'लॉग Discord पर भेजें',
        'webhook_url' => [
            'label' => 'Webhook URL',
            'helper' => '.env का URL (LOG_DISCORD_WEBHOOK_URL) इस्तेमाल करने के लिए खाली छोड़ें। एन्क्रिप्टेड रूप में संग्रहीत।',
        ],
        'level' => 'न्यूनतम स्तर',
        'level_key' => 'स्तर',
        'queue_enabled' => [
            'label' => 'बैकग्राउंड में भेजें (क्यू)',
            'helper' => 'अनुशंसित: अनुरोध कभी ब्लॉक नहीं होते और Discord की सीमाओं पर दोबारा प्रयास होता है।',
        ],
        'from_name' => 'बॉट का नाम',
        'from_avatar_url' => 'बॉट अवतार URL',
        'level_webhooks' => [
            'label' => 'प्रति स्तर Webhook',
            'helper' => 'जैसे CRITICAL को #alerts चैनल पर। बिना पंक्ति वाले स्तर मुख्य Webhook इस्तेमाल करते हैं। एन्क्रिप्टेड रूप में संग्रहीत।',
        ],
        'mentions' => [
            'label' => 'प्रति स्तर मेंशन',
            'helper' => '@here, @everyone, <@&ROLE_ID> या <@USER_ID> का उपयोग करें।',
            'value' => 'मेंशन',
        ],
        'runtime_context' => 'लॉग करने वाला अनुरोध, जॉब या कमांड शामिल करें',
        'stacktrace' => [
            'label' => 'स्टैकट्रेस',
            'smart' => 'स्मार्ट',
            'full' => 'पूर्ण',
            'none' => 'कोई नहीं',
        ],
        'attach_stacktrace' => 'पूरा स्टैकट्रेस फ़ाइल के रूप में संलग्न करें',
        'grouping_strategy' => [
            'label' => 'त्रुटियों को इसके अनुसार समूहित करें',
            'exception' => 'एक्सेप्शन क्लास और स्थान',
            'level_message' => 'स्तर और संदेश',
            'message' => 'संदेश',
        ],
        'grouping_normalize' => 'समूहित करते समय संख्याएँ, UUID और हैश अनदेखा करें',
        'deduplication_enabled' => 'हर त्रुटि को प्रति विंडो केवल एक बार भेजें',
        'deduplication_window' => 'डुप्लिकेशन विंडो (सेकंड)',
        'deduplication_summary' => '"N बार हुआ" सारांश भेजें',
        'rate_limit_enabled' => 'भेजने की सीमा',
        'rate_limit_global_max' => 'अधिकतम संदेश',
        'rate_limit_global_per_seconds' => 'प्रति सेकंड',
        'rate_limit_fingerprint_max' => 'प्रति त्रुटि अधिकतम संदेश',
        'rate_limit_fingerprint_per_seconds' => 'प्रति सेकंड, प्रति त्रुटि',
    ],
];
