<?php

return [
    'navigation_label' => 'Discord Logger',
    'navigation_group' => 'Configurações',
    'title' => 'Configurações do Discord Logger',
    'sections' => [
        'delivery' => [
            'heading' => 'Entrega',
            'description' => 'Para onde e a partir de qual nível os logs são enviados ao Discord.',
        ],
        'routing' => [
            'heading' => 'Roteamento e menções',
            'description' => 'Envie níveis específicos para outro canal e avise pessoas em erros importantes.',
        ],
        'content' => [
            'heading' => 'Conteúdo da mensagem',
            'description' => 'O que cada mensagem do Discord inclui.',
        ],
        'noise' => [
            'heading' => 'Controle de ruído',
            'description' => 'Agrupe erros repetidos e limite quantas mensagens são enviadas.',
        ],
    ],
    'fields' => [
        'enabled' => 'Enviar logs para o Discord',
        'webhook_url' => [
            'label' => 'URL do webhook',
            'helper' => 'Deixe vazio para usar a URL do .env (LOG_DISCORD_WEBHOOK_URL). Armazenada criptografada.',
        ],
        'level' => 'Nível mínimo',
        'level_key' => 'Nível',
        'queue_enabled' => [
            'label' => 'Enviar em segundo plano (fila)',
            'helper' => 'Recomendado: as requisições nunca ficam bloqueadas e os limites do Discord são repetidos.',
        ],
        'from_name' => 'Nome do bot',
        'from_avatar_url' => 'URL do avatar do bot',
        'level_webhooks' => [
            'label' => 'Webhook por nível',
            'helper' => 'Ex.: CRITICAL para um canal #alertas. Níveis sem linha usam o webhook principal. Armazenado criptografado.',
        ],
        'mentions' => [
            'label' => 'Menções por nível',
            'helper' => 'Use @here, @everyone, <@&ROLE_ID> ou <@USER_ID>.',
            'value' => 'Menção',
        ],
        'runtime_context' => 'Incluir a requisição, job ou comando que gerou o log',
        'stacktrace' => [
            'label' => 'Stacktrace',
            'smart' => 'Inteligente',
            'full' => 'Completo',
            'none' => 'Nenhum',
        ],
        'attach_stacktrace' => 'Anexar o stacktrace completo como arquivo',
        'grouping_strategy' => [
            'label' => 'Agrupar erros por',
            'exception' => 'Classe e local da exceção',
            'level_message' => 'Nível e mensagem',
            'message' => 'Mensagem',
        ],
        'grouping_normalize' => 'Ignorar números, UUIDs e hashes ao agrupar',
        'deduplication_enabled' => 'Enviar cada erro só uma vez por janela',
        'deduplication_window' => 'Janela de deduplicação (segundos)',
        'deduplication_summary' => 'Enviar um resumo "ocorreu N vezes"',
        'rate_limit_enabled' => 'Limite de envio',
        'rate_limit_global_max' => 'Máximo de mensagens',
        'rate_limit_global_per_seconds' => 'Por segundos',
        'rate_limit_fingerprint_max' => 'Máximo de mensagens por erro',
        'rate_limit_fingerprint_per_seconds' => 'Por segundos, por erro',
    ],
];
