<?php

class Order
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function createOrder($data)
    {
        $stmt = $this->db->prepare("INSERT INTO orders (first_name, last_name, state, street_address, town, zip_code, phone, email, user_id, status, total_price) VALUES (:first_name, :last_name, :state, :street_address, :town, :zip_code, :phone, :email, :user_id, :status, :total_price)");
        return $stmt->execute($data);
    }

    public function getAllOrders()
    {
        $stmt = $this->db->prepare("SELECT * FROM orders");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function getOrderById($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM orders WHERE id = :id");
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function updateStatus($id, $status)
    {
        $stmt = $this->db->prepare("UPDATE orders SET status = :status WHERE id = :id");
        return $stmt->execute([':status' => $status, ':id' => $id]);
    }

    public function deleteOrder($id)
    {
        $stmt = $this->db->prepare("DELETE FROM orders WHERE id = :id");
        return $stmt->execute([':id' => $id]);
    }

    public function getOrdersByUserId($user_id)
    {
        $stmt = $this->db->prepare("SELECT * FROM orders WHERE user_id = :user_id");
        $stmt->execute([':user_id' => $user_id]);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}
