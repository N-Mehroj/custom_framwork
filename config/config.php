<?php

return [
    'logging' => [
        'default' => 'file',
        'channels' => [
            'file' => [
                'path' => __DIR__.'/../storage/logs/app.log',
                'level' => 'debug',
            ],
        ],
    ],
];
