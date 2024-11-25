<?php

return [
    'items' => [
        // check order
        'check-order' => [
            'connection' => 'redis',
            'queue' => 'check-order',
            'timeout' => 60,
            'retry_after' => 60,
            'max_tries' => 3,
        ],
        // check place
        'check-place' => [
            'connection' => 'redis',
            'queue' => 'check-place',
            'timeout' => 60,
            'retry_after' => 60,
            'max_tries' => 3,
        ],
        // order sync
        'order-sync' => [
            'connection' => 'redis',
            'queue' => 'order-sync',
            'timeout' => 60,
            'retry_after' => 60,
            'max_tries' => 3,
        ],
        // product sync
        'product-sync' => [
            'connection' => 'redis',
            'queue' => 'product-sync',
            'timeout' => 60,
            'retry_after' => 60,
            'max_tries' => 3,
        ],
        // comment sync
        'comment-sync' => [
            'connection' => 'redis',
            'queue' => 'comment-sync',
            'timeout' => 60,
            'retry_after' => 60,
            'max_tries' => 3,
        ],
    ],
];