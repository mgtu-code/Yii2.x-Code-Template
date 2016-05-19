<?php
$params = array_merge(
    require(dirname(dirname(__DIR__)) . '/config/common/params.php'),
    require(__DIR__ . '/params.php'),
);

return [
    'id' => 'app-console',
    'basePath' => '@source/console',
    'bootstrap' => ['log'],
    'controllerNamespace' => 'source\console\controllers',
    'runtimePath' => dirname(dirname(__DIR__)) . '/runtime',
    'components' => [
        'log' => [
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                    'logFile' => '@runtime/console/logs',
                ],
            ],
        ],
    ],
    'params' => $params,
];
