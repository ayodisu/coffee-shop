<?php

class User
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function findUserByEmailOrUsername($emailOrUsername)
    {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE email = :emailOrUsername OR username = :emailOrUsername");
        $stmt->execute([':emailOrUsername' => $emailOrUsername]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function register($data)
    {
        $stmt = $this->db->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
        return $stmt->execute([
            ":username" => $data['username'],
            ":email" => $data['email'],
            ":password" => $data['password']
        ]);
    }
}
