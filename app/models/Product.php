<?php

class Product
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getProductsByType($type)
    {

        $stmt = $this->db->prepare("SELECT * FROM products WHERE type = :type");
        $stmt->execute([':type' => $type]);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function getProductById($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM products WHERE id = :id");
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function getRelatedProducts($type, $id)
    {
        $stmt = $this->db->prepare("SELECT * FROM products WHERE type = :type AND id != :id");
        $stmt->execute([':type' => $type, ':id' => $id]);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function getAllProducts()
    {
        $stmt = $this->db->prepare("SELECT * FROM products");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function createProduct($data)
    {
        $stmt = $this->db->prepare("INSERT INTO products (name, price, description, type, image) VALUES (:name, :price, :description, :type, :image)");
        return $stmt->execute($data);
    }

    public function deleteProduct($id)
    {
        // First get image to delete
        $stmt = $this->db->prepare("SELECT image FROM products WHERE id = :id");
        $stmt->execute([':id' => $id]);
        $image = $stmt->fetch(PDO::FETCH_OBJ);

        if ($image) {
            $path = "images/" . $image->image;
            // Note: In MVC, images are in public/images, need to handle path correctly from controller or here.
            // Assuming this is handled, or we just delete the record.
            // For now, let's return the image name so controller can unlink.
        }

        $stmt = $this->db->prepare("DELETE FROM products WHERE id = :id");
        if ($stmt->execute([':id' => $id])) {
            return $image ? $image->image : true;
        }
        return false;
    }
}
