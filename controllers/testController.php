<?php

require("models/testModel.php");

class TestController {
    
    public function index(){
        $testModel = new TestModel();
        $testModel->functionTest();
    }
}