<?php
/**
 * The manifest of files that are local to specific environment.
 * This file returns a list of environments that the application
 * may be installed under. The returned data must be in the following
 * format:
 *
 * ```php
 * return [
 *     'environment name' => [
 *         'path' => 'directory storing the local files',
 *         'skipFiles'  => [
 *             // list of files that should only copied once and skipped if they already exist
 *         ],
 *         'setWritable' => [
 *             // list of directories that should be set writable
 *         ],
 *         'setExecutable' => [
 *             // list of files that should be set executable
 *         ],
 *         'setCookieValidationKey' => [
 *             // list of config files that need to be inserted with automatically generated cookie validation keys
 *         ],
 *         'createSymlink' => [
 *             // list of symlinks to be created. Keys are symlinks, and values are the targets.
 *         ],
 *     ],
 * ];
 * ```
 */
return [
    //开发模式
    'Development' => [
        //模版代码目录
        'path' => 'dev',
        //设置可读写的目录
        'setWritable' => [
            'backend/assets',
            'frontend/assets',
            'runtime',
            'data',
        ],
        //设置可执行的文件
        'setExecutable' => [
            'console/yii',
            'console/yii.bat',
            'tests/codeception/bin/yii',
        ],
        //设置cookie的key
        'setCookieValidationKey' => [
            'config/backend/main.php',
            'config/frontend/main.php',
        ],
        //软链设置
        'createSymlink' => [
            'index.php' => 'frontend/index.php',
            'index-test.php' => 'frontend/index-test.php',
            'robots' => 'frontend/robots',
            'assets' => 'frontend/assets',
            '/frontend/data' => '/data',
            '/frontend/static' => '/static',
            '/backend/data' => '/data',
            '/backend/static' => '/static',
        ],
        //运行前清除的目录
        'setCleanPath'=>[
            'frontend',
            'backend',
        ],
        //运行web程序的用户
        'webUser'=>'nobody',
    ],
    //生产模式
    'Production' => [
        //模版代码目录
        'path' => 'prod',
        //设置可读写的目录
        'setWritable' => [
            'backend/assets',
            'frontend/assets',
            'runtime',
            'data',
        ],
        //设置可执行的文件
        'setExecutable' => [
            'console/yii',
            'console/yii.bat',
        ],
        //设置cookie的key
        'setCookieValidationKey' => [
            'config/backend/main.php',
            'config/frontend/main.php',
        ],
        //软链设置
        'createSymlink' => [
            'index.php' => 'frontend/index.php',
            'robots' => 'frontend/robots',
            'assets' => 'frontend/assets',
            '/frontend/data' => '/data',
            '/frontend/static' => '/static',
            '/backend/data' => '/data',
            '/backend/static' => '/static',
        ],
        //运行前清除的目录
        'setCleanPath'=>[
            'frontend',
            'backend',
        ],
        //运行web程序的用户
        'webUser'=>'nobody',
    ],
];
