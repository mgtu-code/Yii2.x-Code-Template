<?php
$params = array_merge(
    require(dirname(dirname(__DIR__)) . '/config/common//params.php'),
    require(dirname(dirname(__DIR__)) . '/config/common/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-backend',
    'basePath' => '@source/backend',
    'runtimePath' => dirname(dirname(__DIR__)) . '/runtime',
    'controllerNamespace' => 'source\backend\controllers',
    'bootstrap' => ['log','debug','gii'],
    'modules' => [
        'debug' => [
            'class' => 'yii\debug\Module',
        ],
        'gii' => [
            'class' => 'yii\gii\Module',
        ],
    ],
    'components' => [
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                    'logFile' => '@runtime/backend/logs',
                ],
            ],
        ],
        'request' => [
            'cookieValidationKey' => '',
        ],
        'errorHandler' => [
            //'errorAction' => 'site/error',
        ],
        'session' => [
            'class' => 'yii\web\CacheSession',
            'cache'=>'cache',
        ],
    ],
    'params' => $params,
];
