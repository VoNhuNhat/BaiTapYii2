<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'authClientCollection' => [
            'class' => 'yii\authclient\Collection',
            'clients' => [
                'facebook' => [
                    'class' => 'yii\authclient\clients\Facebook',
                    //'authUrl' => 'https://www.facebook.com/dialog/oauth?display=popup',
                    'clientId' => '2366290573586973',
                    'clientSecret' => '4d0181dd5530b2c1e881ba5b4a10c889',
                    'attributeNames' => ['name', 'email', 'first_name', 'last_name', 'picture', 'birthday'],
                ],
                'google' => [
                    'class' => 'yii\authclient\clients\Google',
                    //'authUrl' => 'https://www.facebook.com/dialog/oauth?display=popup',
                    'clientId' => '1098505262709-teu4mj36ub9cf04fbovhcs19ga284tt0.apps.googleusercontent.com',
                    'clientSecret' => 'yT-7oYk2rIASU8FTkrFCOGEJ',
                    // 'attributeNames' => ['name', 'email', 'first_name', 'last_name', 'picture', 'birthday'],
                ],
            ],
        ],
    ],
];
