<?php

require_once 'AppController.php';
class DefaultController extends AppController{

    public function index(){
        // display login.html
        $this->render('login');
    }
    public function projects(){
        // display projects.html
        $this->render('projects');
    }
    public function search(){
        // display search.html
        $this->render('search');
    }
}