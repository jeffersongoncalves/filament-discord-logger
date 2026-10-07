<?php

return [
    'navigation_label' => 'Discord Logger',
    'navigation_group' => '设置',
    'title' => 'Discord Logger 设置',
    'sections' => [
        'delivery' => [
            'heading' => '投递',
            'description' => '日志发送到 Discord 的位置以及从哪个级别开始发送。',
        ],
        'routing' => [
            'heading' => '路由与提及',
            'description' => '将特定级别发送到其他频道，并在重要错误时通知相关人员。',
        ],
        'content' => [
            'heading' => '消息内容',
            'description' => '每条 Discord 消息包含的内容。',
        ],
        'noise' => [
            'heading' => '噪音控制',
            'description' => '合并重复的错误并限制发送的消息数量。',
        ],
    ],
    'fields' => [
        'enabled' => '将日志发送到 Discord',
        'webhook_url' => [
            'label' => 'Webhook URL',
            'helper' => '留空则使用 .env 中的 URL（LOG_DISCORD_WEBHOOK_URL）。加密存储。',
        ],
        'level' => '最低级别',
        'level_key' => '级别',
        'queue_enabled' => [
            'label' => '在后台发送（队列）',
            'helper' => '推荐：请求永不阻塞，Discord 限流会自动重试。',
        ],
        'from_name' => '机器人名称',
        'from_avatar_url' => '机器人头像 URL',
        'level_webhooks' => [
            'label' => '按级别的 Webhook',
            'helper' => '例如将 CRITICAL 发送到 #alerts 频道。没有对应行的级别使用主 Webhook。加密存储。',
        ],
        'mentions' => [
            'label' => '按级别的提及',
            'helper' => '使用 @here、@everyone、<@&ROLE_ID> 或 <@USER_ID>。',
            'value' => '提及',
        ],
        'runtime_context' => '包含产生日志的请求、任务或命令',
        'stacktrace' => [
            'label' => '堆栈跟踪',
            'smart' => '智能',
            'full' => '完整',
            'none' => '无',
        ],
        'attach_stacktrace' => '将完整堆栈跟踪作为文件附加',
        'grouping_strategy' => [
            'label' => '错误分组依据',
            'exception' => '异常类和位置',
            'level_message' => '级别和消息',
            'message' => '消息',
        ],
        'grouping_normalize' => '分组时忽略数字、UUID 和哈希',
        'deduplication_enabled' => '每个时间窗口内每个错误只发送一次',
        'deduplication_window' => '去重时间窗口（秒）',
        'deduplication_summary' => '发送“发生 N 次”摘要',
        'rate_limit_enabled' => '发送限制',
        'rate_limit_global_max' => '最大消息数',
        'rate_limit_global_per_seconds' => '每秒数',
        'rate_limit_fingerprint_max' => '每个错误的最大消息数',
        'rate_limit_fingerprint_per_seconds' => '每秒数（每个错误）',
    ],
];
