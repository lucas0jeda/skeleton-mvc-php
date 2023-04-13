<?php

require("models/testModel.php");

class TestController {
    
    public function index(){
        $testModel = new TestModel();
        $resultConsult = $testModel->functionTest();
        var_dump($resultConsult);
    }

    public function testCurl(){        
        $testModel = new TestModel();
        $resultCurl = $testModel->testCurl();
        echo $resultCurl;  
    }
}