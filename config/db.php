<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => $_ENV['DB_DRIVER'].':host='.$_ENV['DB_HOST'].';dbname='.$_ENV['DB_NAME'],
    'username' => $_ENV['DB_USERNAME'],
    'password' => $_ENV['DB_PASSWORD'],
    'charset' => $_ENV['DB_CHARSET'],
    'enableSchemaCache' => true
];