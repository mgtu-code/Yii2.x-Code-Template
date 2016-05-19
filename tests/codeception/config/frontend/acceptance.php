<?php
defined('YII_APP_BASE_PATH') or define('YII_APP_BASE_PATH', dirname(dirname(dirname(dirname(__DIR__)))));

/**
 * Application configuration for frontend acceptance tests
 */
return yii\helpers\ArrayHelper::merge(
    require(YII_APP_BASE_PATH . '/config/common/main.php'),
    require(YII_APP_BASE_PATH . '/config/common/main-local.php'),
    require(YII_APP_BASE_PATH . '/config/frontend/main.php'),
    require(YII_APP_BASE_PATH . '/config/frontend/main-local.php'),
    require(dirname(__DIR__) . '/config.php'),
    require(dirname(__DIR__) . '/acceptance.php'),
    require(__DIR__ . '/config.php'),
    [
    ]
);
