<?php
class Admin {
    private $conn;
    private $table_name = "admin";

    public $id;
    public $username;
    public $password;

    public function __construct($db) {
        $this->conn = $db;
    }

    // Login admin
    public function login() {
        $query = "SELECT * FROM " . $this->admin . " WHERE username = :username LIMIT 0,1";
        $stmt = $this->conn->prepare($query);

        // Sanitize
        // $this->username=htmlspecialchars(strip_tags($this->username));
        // $this->password=htmlspecialchars(strip_tags($this->password));

        // // Bind values
        // $stmt->bindParam(":username", $this->username);
        // $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if(password_verify($this->password, $row['password'])) {
            return true;
        }

        return false;
    }

    // Register admin (optional)
    // public function register() {
    //     $query = "INSERT INTO " . $this->admin . " SET username=:username, password=:password";
    //     $stmt = $this->conn->prepare($query);

        // // Sanitize
        // $this->username=htmlspecialchars(strip_tags($this->username));
        // $this->password=password_hash(htmlspecialchars(strip_tags($this->password)), PASSWORD_BCRYPT);

        // // Bind values
        // $stmt->bindParam(":username", $this->username);
        // $stmt->bindParam(":password", $this->password);

        if($stmt->execute()) {
            return true;
        }

        return false;
    }

?>
