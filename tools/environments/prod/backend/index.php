<?php
defined('YII_DEBUG') or define('YII_DEBUG', false);
defined('YII_ENV') or define('YII_ENV', 'prod');

require(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');
require(__DIR__ . '/../config/common/bootstrap.php');
require(__DIR__ . '/../config/backend/bootstrap.php');

$config = yii\helpers\ArrayHelper::merge(
    require(__DIR__ . '/../config/common/main.php'),
    require(__DIR__ . '/../config/common/main-local.php'),
    require(__DIR__ . '/../config/backend/main.php'),
    require(__DIR__ . '/../config/backend/main-local.php')
);

$application = new yii\web\Application($config);
$application->run();
