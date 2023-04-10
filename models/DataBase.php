<?php

require_once('./assets/Const.php');

class DataBase{

    public static function conectarDB() : mysqli{
        $db = new mysqli(DB_HOST, DB_USER_NAME, DB_PASSWORD, DB_NAME);
        
        if ($db->connect_errno) {
            printf("Falló la conexión: ".$db->connect_error);
            exit();
        }
        return $db;
    }


}