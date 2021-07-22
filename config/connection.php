<?php
require('config.php');

class Connect {
     public static function connection(){

        $db_params = [
            'host' => 'localhost',
            'user' => 'postgres',
            'password' => '1234',
            'dbname' => 'MarketFar',
            'port' => '5432'
        ];

        $connection_string = "host = {$db_params['host']} user = {$db_params['user']} password = {$db_params['password']} dbname = {$db_params['dbname']} port = {$db_params['port']}"; 
        $db = pg_connect($connection_string);
        return $db;
     }
}

?>