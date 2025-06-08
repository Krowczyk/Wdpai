<?php

require_once 'AppController.php';
class DefaultController extends AppController{

    public function index(){
        // display login.php
        $this->render('login');
    }
    public function projects(){
        // display projects.php
        $this->render('projects');
    }
    public function search(){
        // display search.php
        $this->render('search');
    }
}