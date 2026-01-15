<?php

class Review
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllReviews()
    {
        $stmt = $this->db->query("SELECT * FROM reviews");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function createReview($data)
    {
        $stmt = $this->db->prepare("INSERT INTO reviews (review, username) VALUES (:review, :username)");
        return $stmt->execute($data);
    }
}
