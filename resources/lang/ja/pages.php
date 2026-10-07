<?php

return [
    'navigation_label' => 'Discord Logger',
    'navigation_group' => '設定',
    'title' => 'Discord Logger 設定',
    'sections' => [
        'delivery' => [
            'heading' => '配信',
            'description' => 'ログを Discord のどこに、どのレベルから送信するか。',
        ],
        'routing' => [
            'heading' => 'ルーティングとメンション',
            'description' => '特定のレベルを別のチャンネルに送り、重要なエラーで担当者に通知します。',
        ],
        'content' => [
            'heading' => 'メッセージ内容',
            'description' => '各 Discord メッセージに含める内容。',
        ],
        'noise' => [
            'heading' => 'ノイズ制御',
            'description' => '繰り返しのエラーをまとめ、送信するメッセージ数を制限します。',
        ],
    ],
    'fields' => [
        'enabled' => 'ログを Discord に送信',
        'webhook_url' => [
            'label' => 'Webhook URL',
            'helper' => '空のままにすると .env の URL（LOG_DISCORD_WEBHOOK_URL）を使用します。暗号化して保存されます。',
        ],
        'level' => '最小レベル',
        'level_key' => 'レベル',
        'queue_enabled' => [
            'label' => 'バックグラウンドで送信（キュー）',
            'helper' => '推奨：リクエストがブロックされず、Discord のレート制限は再試行されます。',
        ],
        'from_name' => 'ボット名',
        'from_avatar_url' => 'ボットのアバター URL',
        'level_webhooks' => [
            'label' => 'レベル別 Webhook',
            'helper' => '例：CRITICAL を #alerts チャンネルへ。行のないレベルはメインの Webhook を使用します。暗号化して保存されます。',
        ],
        'mentions' => [
            'label' => 'レベル別メンション',
            'helper' => '@here、@everyone、<@&ROLE_ID>、<@USER_ID> を使用します。',
            'value' => 'メンション',
        ],
        'runtime_context' => 'ログを出力したリクエスト、ジョブ、コマンドを含める',
        'stacktrace' => [
            'label' => 'スタックトレース',
            'smart' => 'スマート',
            'full' => '完全',
            'none' => 'なし',
        ],
        'attach_stacktrace' => '完全なスタックトレースをファイルとして添付',
        'grouping_strategy' => [
            'label' => 'エラーのグループ化基準',
            'exception' => '例外クラスと発生位置',
            'level_message' => 'レベルとメッセージ',
            'message' => 'メッセージ',
        ],
        'grouping_normalize' => 'グループ化時に数値・UUID・ハッシュを無視',
        'deduplication_enabled' => '各エラーを期間ごとに 1 回だけ送信',
        'deduplication_window' => '重複排除の期間（秒）',
        'deduplication_summary' => '「N 回発生」のサマリーを送信',
        'rate_limit_enabled' => '送信制限',
        'rate_limit_global_max' => '最大メッセージ数',
        'rate_limit_global_per_seconds' => '秒あたり',
        'rate_limit_fingerprint_max' => 'エラーごとの最大メッセージ数',
        'rate_limit_fingerprint_per_seconds' => '秒あたり（エラーごと）',
    ],
];
