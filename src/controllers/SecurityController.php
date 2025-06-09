<?php

require_once 'AppController.php';
require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../repository/UserRepository.php';

class SecurityController extends AppController
{
    public function login()
    {
        if (!$this->isPost()) {
            return $this->render('login');
        }

        if (!isset($_POST['email']) || !isset($_POST['password'])) {
            return $this->render('login', ['messages' => ['Brakuje danych logowania.']]);
        }

        $email = $_POST['email'];
        $password = $_POST['password'];

        $userRepository = new UserRepository();
        $user = $userRepository->getUserByEmail($email);

        if (!$user) {
            return $this->render('login', ['messages' => ['Użytkownik nie istnieje.']]);
        }

        if (!password_verify($password, $user->getPassword())) {
            return $this->render('login', ['messages' => ['Nieprawidłowe hasło.']]);
        }

        // Logowanie zakończone sukcesem
        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/projects");
        exit();
    }

    public function register()
    {
        if (!$this->isPost()) {
            return $this->render('register');
        }

        if (
            !isset($_POST['email']) ||
            !isset($_POST['password']) ||
            !isset($_POST['confirm_password'])
        ) {
            return $this->render('register', ['messages' => ['Brakuje danych.']]);
        }

        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirm_password'];

        if ($password !== $confirmPassword) {
            return $this->render('register', ['messages' => ['Hasła się nie zgadzają.']]);
        }

        $userRepository = new UserRepository();

        if ($userRepository->getUserByEmail($email)) {
            return $this->render('register', ['messages' => ['Użytkownik o tym emailu już istnieje.']]);
        }

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $user = new User($email, $hashedPassword);
        $userRepository->addUser($user);

        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/login");
        exit();
    }
}
