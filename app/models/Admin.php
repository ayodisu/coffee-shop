<?php

class Admin
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function findAdminByEmail($email)
    {
        $stmt = $this->db->prepare("SELECT * FROM admins WHERE email = :email");
        $stmt->execute([':email' => $email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getCounts()
    {
        $products = $this->db->prepare("SELECT COUNT(*) AS count_products FROM products");
        $products->execute();
        $productsCount = $products->fetch(PDO::FETCH_OBJ);

        $orders = $this->db->prepare("SELECT COUNT(*) AS count_orders FROM orders");
        $orders->execute();
        $ordersCount = $orders->fetch(PDO::FETCH_OBJ);

        $bookings = $this->db->prepare("SELECT COUNT(*) AS count_bookings FROM bookings");
        $bookings->execute();
        $bookingsCount = $bookings->fetch(PDO::FETCH_OBJ);

        $admins = $this->db->prepare("SELECT COUNT(*) AS count_admins FROM admins");
        $admins->execute();
        $adminsCount = $admins->fetch(PDO::FETCH_OBJ);

        return (object)[
            'products' => $productsCount->count_products,
            'orders' => $ordersCount->count_orders,
            'bookings' => $bookingsCount->count_bookings,
            'admins' => $adminsCount->count_admins
        ];
    }

    public function getAllAdmins()
    {
        $stmt = $this->db->prepare("SELECT * FROM admins");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function createAdmin($data)
    {
        $stmt = $this->db->prepare("INSERT INTO admins (adminname, email, password) VALUES (:adminname, :email, :password)");
        return $stmt->execute($data);
    }
}
