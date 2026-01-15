<?php

class Cart
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getCartItems($user_id)
    {
        $stmt = $this->db->prepare("SELECT * FROM cart WHERE user_id = :user_id");
        $stmt->execute([':user_id' => $user_id]);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function addItem($data)
    {
        $stmt = $this->db->prepare("INSERT INTO cart (name, image, price, pro_id, description, quantity, user_id) VALUES (:name, :image, :price, :pro_id, :description, :quantity, :user_id)");
        return $stmt->execute($data);
    }

    public function deleteItem($id)
    {
        $stmt = $this->db->prepare("DELETE FROM cart WHERE id = :id");
        return $stmt->execute([':id' => $id]);
    }

    public function deleteAll($user_id)
    {
        $stmt = $this->db->prepare("DELETE FROM cart WHERE user_id = :user_id");
        return $stmt->execute([':user_id' => $user_id]);
    }

    public function checkItemInCart($pro_id, $user_id)
    {
        $stmt = $this->db->prepare("SELECT * FROM cart WHERE pro_id = :id AND user_id = :user_id");
        $stmt->execute([':id' => $pro_id, ':user_id' => $user_id]);
        return $stmt->rowCount();
    }

    public function getCartTotal($user_id)
    {
        $stmt = $this->db->prepare("SELECT SUM(quantity * price) AS total FROM cart WHERE user_id = :user_id");
        $stmt->execute([':user_id' => $user_id]);
        $result = $stmt->fetch(PDO::FETCH_OBJ);
        return $result->total ?? 0;
    }
}
