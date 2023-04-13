<?php

require_once("DataBase.php");
require("assets/curl.php");

class TestModel {

    private $db;

    public function __construct(){
        $this->db = DataBase::conectarDB();
    }

    public function functionTest(){
        $query = "select * from test";
        $result = false;
        $select = $this->db->query($query);
        if($select){
            $result = $select->fetch_all(MYSQLI_ASSOC);
        }
        return $result;
    }

    public function testCurl(){
        $resultCurl = curl::get("https://api.mercadolibre.com/categories/MLU158301/attributes");
        echo $resultCurl;
    }

}