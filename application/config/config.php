<?php

class Config {

    public $baseurl = "http://localhost/php/";

    public function __construct(){
        
        $this->base_url = $this->baseurl;
        
        $this->database = new Medoo\Medoo([
            'type' => 'mysql',
            'host' => 'localhost',
            'database' => 'boirplate',
            'username' => 'root',
            'password' => ''
        ]);  
        
              
    }

}
