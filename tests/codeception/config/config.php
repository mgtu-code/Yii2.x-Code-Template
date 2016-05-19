<?php
/**
 * Application configuration shared by all applications and test types
 */
return [
    'language' => 'zh-CN',
    'controllerMap' => [
//        'fixture' => [
//            'class' => 'yii\faker\FixtureController',
//            'fixtureDataPath' => '@tests/codeception/common/fixtures/data',
//            'templatePath' => '@tests/codeception/common/templates/fixtures',
//            'namespace' => 'tests\codeception\common\fixtures',
//        ],
    ],
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost:8889;dbname=yii2_test',
            'username' => 'root',
            'password' => 'root',
            'charset' => 'utf8mb4',
        ],
        'mailer' => [
            'useFileTransport' => true,
        ],
        'urlManager' => [
            'showScriptName' => true,
        ],
    ],
];
