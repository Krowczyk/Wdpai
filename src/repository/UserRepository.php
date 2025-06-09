<?php

require_once "Repository.php";
require_once __DIR__."/../models/User.php";

class UserRepository extends Repository
{
    public function getUserByEmail(string $email): ?User
    {
            $stmt = $this->database->connect()->prepare("SELECT * FROM users WHERE email=:email");
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->execute();

            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if(!$user){
                return null;
            }
            return new User($user['email'], $user['password']);

    }
    public function addUser(User $user): void
    {
        $stmt = $this->database->connect()->prepare('
            INSERT INTO users (email, password)
            VALUES (:email, :password)
        ');
        $email = $user->getEmail();
        $password = $user->getPassword();
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR);

        $stmt->execute();
        }
}