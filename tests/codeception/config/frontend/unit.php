<?php

/**
 * Application configuration for frontend unit tests
 */
return yii\helpers\ArrayHelper::merge(
    require(YII_APP_BASE_PATH . '/config/common/main.php'),
    require(YII_APP_BASE_PATH . '/config/common/main-local.php'),
    require(YII_APP_BASE_PATH . '/config/frontend/main.php'),
    require(YII_APP_BASE_PATH . '/config/frontend/main-local.php'),
    require(dirname(__DIR__) . '/config.php'),
    require(dirname(__DIR__) . '/unit.php'),
    require(__DIR__ . '/config.php'),
    [
    ]
);
