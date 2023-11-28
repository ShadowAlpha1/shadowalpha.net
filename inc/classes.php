<?php
class User {
    private $database;

    public function __construct($database) {
        $this->database = $database;
    }

    public function create($id, $name, $avatar) {
        $created_at = time();

        $stmt = $this->database->prepare("INSERT INTO users (`id`, `name`, `avatar`, `created_at`) VALUES (?, ?, ?, ?)");
        $stmt->bind_param('issi', $id, $name, $avatar, $created_at);
        $stmt->execute();

        $id = $stmt->insert_id;

        return $id;
    }

    public function get($id) {
        $stmt = $this->database->prepare("SELECT * FROM users WHERE id=? LIMIT 1");
        $stmt->bind_param('i', $id);
        $stmt->execute();

        $result = $stmt->get_result();

        if ($result->num_rows > 0) return $result->fetch_assoc();

        return null;
    }

    public function edit($id, $name, $avatar, $products) {
        $stmt = $this->database->prepare("UPDATE users SET `name`=?, `avatar`=?, `products`=? WHERE id=?");
        $stmt->bind_param('sssi', $name, $avatar, $products, $id);
        $stmt->execute();
    }
}

class Order {
    private $database;

    public function __construct($database) {
        $this->database = $database;
    }

    public function create($userId, $product) {
        $created_at = time();

        $stmt = $this->database->prepare("INSERT INTO `orders` (`userId`, `product`, `created_at`) VALUES (?, ?, ?)");
        $stmt->bind_param('isi', $userId, $product, $created_at);
        $stmt->execute();

        $id = $stmt->insert_id;

        return $id;
    }

    public function findLast() {
        $stmt = $this->database->prepare("SELECT * FROM `orders` WHERE `status`=0 ORDER BY `id` DESC LIMIT 1");
        $stmt->execute();

        $result = $stmt->get_result();

        if ($result->num_rows > 0) return $result->fetch_assoc();
    
        return null;
    }    

    public function setStatus($orderId, $status) {
        $stmt = $this->database->prepare("UPDATE `orders` SET `status`=? WHERE id=?");
        $stmt->bind_param('ii', $status, $orderId);
        $stmt->execute();
    }
}
?>