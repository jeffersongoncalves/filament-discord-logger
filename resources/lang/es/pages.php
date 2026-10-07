<?php

return [
    'navigation_label' => 'Discord Logger',
    'navigation_group' => 'Configuración',
    'title' => 'Configuración de Discord Logger',
    'sections' => [
        'delivery' => [
            'heading' => 'Entrega',
            'description' => 'A dónde y desde qué nivel se envían los logs a Discord.',
        ],
        'routing' => [
            'heading' => 'Enrutamiento y menciones',
            'description' => 'Envía niveles específicos a otro canal y avisa a personas en errores importantes.',
        ],
        'content' => [
            'heading' => 'Contenido del mensaje',
            'description' => 'Qué incluye cada mensaje de Discord.',
        ],
        'noise' => [
            'heading' => 'Control de ruido',
            'description' => 'Agrupa errores repetidos y limita cuántos mensajes se envían.',
        ],
    ],
    'fields' => [
        'enabled' => 'Enviar logs a Discord',
        'webhook_url' => [
            'label' => 'URL del webhook',
            'helper' => 'Déjalo vacío para usar la URL del .env (LOG_DISCORD_WEBHOOK_URL). Se almacena cifrada.',
        ],
        'level' => 'Nivel mínimo',
        'level_key' => 'Nivel',
        'queue_enabled' => [
            'label' => 'Enviar en segundo plano (cola)',
            'helper' => 'Recomendado: las peticiones nunca se bloquean y los límites de Discord se reintentan.',
        ],
        'from_name' => 'Nombre del bot',
        'from_avatar_url' => 'URL del avatar del bot',
        'level_webhooks' => [
            'label' => 'Webhook por nivel',
            'helper' => 'Ej.: CRITICAL a un canal #alertas. Los niveles sin fila usan el webhook principal. Se almacena cifrado.',
        ],
        'mentions' => [
            'label' => 'Menciones por nivel',
            'helper' => 'Usa @here, @everyone, <@&ROLE_ID> o <@USER_ID>.',
            'value' => 'Mención',
        ],
        'runtime_context' => 'Incluir la petición, job o comando que generó el log',
        'stacktrace' => [
            'label' => 'Stacktrace',
            'smart' => 'Inteligente',
            'full' => 'Completo',
            'none' => 'Ninguno',
        ],
        'attach_stacktrace' => 'Adjuntar el stacktrace completo como archivo',
        'grouping_strategy' => [
            'label' => 'Agrupar errores por',
            'exception' => 'Clase y ubicación de la excepción',
            'level_message' => 'Nivel y mensaje',
            'message' => 'Mensaje',
        ],
        'grouping_normalize' => 'Ignorar números, UUIDs y hashes al agrupar',
        'deduplication_enabled' => 'Enviar cada error solo una vez por ventana',
        'deduplication_window' => 'Ventana de deduplicación (segundos)',
        'deduplication_summary' => 'Enviar un resumen "ocurrió N veces"',
        'rate_limit_enabled' => 'Límite de envío',
        'rate_limit_global_max' => 'Máximo de mensajes',
        'rate_limit_global_per_seconds' => 'Por segundos',
        'rate_limit_fingerprint_max' => 'Máximo de mensajes por error',
        'rate_limit_fingerprint_per_seconds' => 'Por segundos, por error',
    ],
];
