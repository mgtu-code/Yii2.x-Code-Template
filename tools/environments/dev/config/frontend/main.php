<?php
$params = array_merge(
    require(dirname(dirname(__DIR__)) . '/config/common//params.php'),
    require(dirname(dirname(__DIR__)) . '/config/common/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => '@source/frontend',
    'bootstrap' => ['log','debug','gii'],
    'controllerNamespace' => 'source\frontend\controllers',
    'runtimePath' => dirname(dirname(__DIR__)) . '/runtime',
    'modules' => [
        'debug' => [
            'class' => 'yii\debug\Module',
        ],
        'gii' => [
            'class' => 'yii\gii\Module',
        ],
    ],
    'components' => [
        /**
         * Yii::$app->themeManager->currentTheme ='base';
         */
        'themeManager' => [
            'class' => \source\common\components\ThemeManager::className(),
            //主题theme的class
            'themeClass' => \yii\base\Theme::className(),
            //可用主题配置
            'config' => [
                'default' => [
                    'pathMap' => [
                        '@app/views' => '@app/themes/default/views',
                    ],
                    'baseUrl' => '@web',
                ],
                'base' => [
                    'pathMap' => [
                        '@app/views' => '@app/themes/base/views',
                    ],
                    'baseUrl' => '@web',
                ],
            ],
            //默认主题
            'defaultTheme' => 'default',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                    'logFile' => '@runtime/frontend/logs',
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
