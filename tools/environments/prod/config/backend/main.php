<?php
$params = array_merge(
    require(dirname(dirname(__DIR__)) . '/config/common/params.php'),
    require(__DIR__ . '/params.php')
);

return [
    'id' => 'app-backend',
    'basePath' => '@source/backend',
    'controllerNamespace' => 'source\backend\controllers',
    'bootstrap' => ['log'],
    'runtimePath' => dirname(dirname(__DIR__)) . '/runtime',
    'modules' => [
       
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
