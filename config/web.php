<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'name' => 'ニチアサッター',
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'assetManager' => [
            'forceCopy' => YII_DEBUG ? true : false, // 開発中はassetsを常に上書きする。本番は、gitで上げたassetsが読まれるので、パフォーマンスのためにfalseっとく
            'appendTimestamp' => true, // 最終更新日時が変わったら、ブラウザキャッシュもクリアされるようにする
            'bundles' => [
                'yii\bootstrap\BootstrapAsset' => [
                    // 'sourcePath' => '@app-npm-assets/bootstrap/dist',   // do not publish the bundle
                    'css' => [
                        // (YII_DEBUG) ? 'css/bootstrap.css' : 'css/bootstrap.min.css'
                        'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css',
                    ],
                    'js' => [],
                ],
                'yii\bootstrap\BootstrapPluginAsset' => [
                    // 'sourcePath' => '@app-npm-assets/bootstrap/dist',   // do not publish the bundle
                    'js' => [
                        'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js',
                        'js/bootstrap.min.js',
                    ],
                    'depends' => ['yii\web\JqueryAsset'],
                ],
                'yii\web\JqueryAsset' => [
                    'sourcePath' => null,   // do not publish the bundle
                    'js' => [
                        'https://code.jquery.com/jquery-3.2.1.min.js',
                    ],
                ],
            ],
        ],

        'authClientCollection' => [
            'class' => 'yii\authclient\Collection',
            'clients' => [
                'twitter' => [
                    'class' => 'yii\authclient\clients\Twitter',
                    'attributeParams' => [
                        'include_email' => 'true'
                    ],
                    // 'clientId' => getenv('TWITTER_CONSUMER_KEY'),
                    // 'clientSecret' => getenv('TWITTER_CONSUMER_SECRET'),
                    'consumerKey' => getenv('TWITTER_CONSUMER_KEY'),
                    'consumerSecret' => getenv('TWITTER_CONSUMER_SECRET'),
                ],
            ],
        ],

        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'NKtCB3Spo99brNf6HJzNO_p8gYJvBwPk',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,

        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        'allowedIPs' => ['127.0.0.1', '::1', '192.168.83.1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        'allowedIPs' => ['127.0.0.1', '::1', '192.168.83.1'],
    ];
}

return $config;
