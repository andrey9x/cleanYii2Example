<?php

return [
    'id' => 'otus',
    'basePath' => __DIR__ . '/../',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false
        ],
        'request' => [
            'cookieValidationKey' => 'ds3jklj92ioJnjr33kBbnBgTY3rf',
        ]
    ],
    'bootstrap' => ['debug'],
    'modules' => [
        'debug' => [
            'class' => \yii\debug\Module::class,
            'allowedIPs' => ['*'],
        ]
    ]
];
