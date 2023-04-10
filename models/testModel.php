<?php

require_once("DataBase.php");

class TestModel {

    private $db;

    public function __construct(){
        $this->db = DataBase::conectarDB();
    }

    public function functionTest(){
        echo "Hello world by Model Function Test";
    }

}