<?php

return [
    'main'=>[
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=192.168.33.10;dbname=itbook',
    'username' => 'admin',
    'password' => '123456',
    'charset' => 'utf8',
    ],
    'log'=>[
        'class' => 'yii\db\Connection',
        'dsn' => 'mysql:host=192.168.33.10;dbname=itbook',
        'username' => 'admin',
        'password' => '123456',
        'charset' => 'utf8',
    ],

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
