<?php

require_once 'AppController.php';
class DefaultController extends AppController{

    public function index(){
        // display login.php
        $this->render('login');
    }

    public function addprojects(){
        $this->render('addprojects');
    }

}