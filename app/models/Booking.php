<?php

class Booking
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllBookings()
    {
        $stmt = $this->db->query("SELECT * FROM bookings");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function getBookingById($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM bookings WHERE id = :id");
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function updateStatus($id, $status)
    {
        $stmt = $this->db->prepare("UPDATE bookings SET status = :status WHERE id = :id");
        return $stmt->execute([':status' => $status, ':id' => $id]);
    }

    public function deleteBooking($id)
    {
        $stmt = $this->db->prepare("DELETE FROM bookings WHERE id = :id");
        return $stmt->execute([':id' => $id]);
    }

    public function createBooking($data)
    {
        // Assuming booking creation logic exists or is needed
        $stmt = $this->db->prepare("INSERT INTO bookings (first_name, last_name, date, time, phone, message, user_id, status) VALUES (:first_name, :last_name, :date, :time, :phone, :message, :user_id, :status)");
        return $stmt->execute($data);
    }

    public function getBookingsByUserId($user_id)
    {
        $stmt = $this->db->prepare("SELECT * FROM bookings WHERE user_id = :user_id");
        $stmt->execute([':user_id' => $user_id]);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}
