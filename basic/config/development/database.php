<?php

/**
 * for development env
 */
class DATABASE_CONFIG {

    public $default = array(
        'driver' => 'mysql',
        'persistent' => false,
        'host' => 'localhost',
        'login' => 'user',
        'password' => 'password',
        'database' => 'database_name',
        'encoding' => 'utf8',
        'prefix' => '',
    );
    public $test = array(
        'driver' => 'mysql',
        'persistent' => false,
        'host' => 'localhost',
        'login' => 'user',
        'password' => 'password',
        'database' => 'test_database_name',
        'encoding' => 'utf8',
        'prefix' => '',
    );

}
