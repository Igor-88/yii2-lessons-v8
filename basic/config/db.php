<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=127.0.0.1:3307;dbname=foo',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
    'enableSchemaCache' => true,
    'schemaCache' => 'cache',
    'schemaCacheDuration' => 60,

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
