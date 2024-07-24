<?php
include_once '../config/Database.php';
include_once '../models/Admin.php';

class AdminController {
    private $db;
    private $admin;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->admin = new Admin($this->db);
    }

    public function login($username, $password) {
        $this->admin->username = $username;
        $this->admin->password = $password;

        if ($this->admin->login()) {
            return "Admin logged in successfully.";
        } else {
            return "Invalid username or password.";
        }
    }

    // Optionally, add a method to register a new admin
    public function register($username, $password) {
        $this->admin->username = $username;
        $this->admin->password = $password;

        if ($this->admin->register()) {
            return "Admin registered successfully.";
        } else {
            return "Unable to register admin.";
        }
    }
}
?>
