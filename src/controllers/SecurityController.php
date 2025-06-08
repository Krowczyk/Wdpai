<?php

require_once 'AppController.php';
require_once __DIR__ . '/../models/User.php';
require_once __DIR__.'/../repository/UserRepository.php';
class SecurityController extends AppController
{
    public function login() {
        $userRepository = new UserRepository();

        $email = $_POST['email'];
        $password = $_POST['password'];
        $user = $userRepository->getUserByEmail($email);
        if(!$user) {
            return $this->render('login',['messages'=>['User does not exist']]);
        }

        if($user->getEmail() !== $email){
            return $this->render('login',['messages'=>['Wrong Email']]);
        }
        if($user->getPassword() !== $password){
            return  $this->render('login',['messages'=>['Wrong Password']]);
        }


        //return $this->render('projects');
        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/projects");
    }
}