<?php
class myconnection extends mysqli {
    public function __construct(){
        parent::__construct('127.0.0.1', 'user', '123', 'demo', 3306');
    }
}