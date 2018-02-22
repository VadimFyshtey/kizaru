<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log', 'comments'],
    'language' => 'ru',
    'defaultRoute' => 'home/index',
    'modules'=>[
        'comments' => [
            'class' => 'yeesoft\comments\Comments',
            'userModel' => 'app\models\entities\User',
            'userAvatar' => function(){
                return false;
            }
        ],
        'admin' => [
            'class' => 'app\modules\admin\Module',
            'layout' => 'admin'
        ],
        'yii2images' => [
            'class' => 'rico\yii2images\Module',
            //be sure, that permissions ok
            //if you cant avoid permission errors you have to create "images" folder in web root manually and set 777 permissions
            'imagesStorePath' => 'images/upload/store', //path to origin images
            'imagesCachePath' => 'images/upload/cache', //path to resized copies
            'graphicsLibrary' => 'GD', //but really its better to use 'Imagick'
            'placeHolderPath' => '@webroot/images/upload/store/no-image.png', // if you want to get placeholder when image not exists, string will be processed by Yii::getAlias
            'imageCompressionQuality' => 100, // Optional. Default value is 85.
        ],
    ],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [

        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'E3e05jc9Vb7h0e8vWZaeUkGtot5e8Tvd',
            'baseUrl' => '',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\entities\User',
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
                'biography' => 'biography/index',
                'video' => 'video/index',
                'music' => 'music/index',

                'albums/page/<page:\d+>' => 'albums/index',
                'albums/<alias:[\s\S\w\W\d\D]*>' => 'albums/view',
                'albums' => 'albums/index',

                'news/page/<page:\d+>' => 'news/index',
                'news/<alias:[\s\S\w\W\d\D]*>' => 'news/view',
                'news' => 'news/index',

                'interview/page/<page:\d+>' => 'interview/index',
                'interview/<alias:[\s\S\w\W\d\D]*>' => 'interview/view',
                'interview' => 'interview/index',

                'texts/page/<page:\d+>' => 'texts/index',
                'texts/<alias:[\s\S\w\W\d\D]*>' => 'texts/view',
                'texts' => 'texts/index',

                'photo/page/<page:\d+>' => 'photo/index',
                'photo' => 'photo/index',

                'logout' => 'site/logout',
                'login' => 'site/login',
                'by88' => 'site/by88',
                'copyright' => 'site/copyright',

                '' => 'home/index',
            ],
        ],

    ],
    'controllerMap' => [
        'elfinder' => [
            'class' => 'mihaildev\elfinder\PathController',
            'access' => ['@'],
            'root' => [
                'baseUrl' => '/web',
                'path' => 'images/upload/global',
                'name' => 'Global'
            ],
        ]
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
