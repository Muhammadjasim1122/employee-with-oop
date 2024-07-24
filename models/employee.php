<?php
class Employee {
    private $conn;
    private $table_name = "employee";

    public $id;
    public $username;
    public $password;
    // public $email;
    // public $position;
    // public $salary;

    public function __construct($db) {
        $this->conn = $db;
    }

    // Create employee
    public function create() {
        $query = "INSERT INTO " . $this->table_name . " SET name=:username, password=:password  ";
        $stmt = $this->conn->prepare($query);

        // Sanitize
        // $this->name=htmlspecialchars(strip_tags($this->name));
        // $this->username=htmlspecialchars(strip_tags($this->username));
        // $this->password=htmlspecialchars(strip_tags($this->password));
        // $this->position=htmlspecialchars(strip_tags($this->position));
        // $this->salary=htmlspecialchars(strip_tags($this->salary));

        // Bind values
        // $stmt->bindParam(":name", $this->name);
        // $stmt->bindParam(":email", $this->email);
        // $stmt->bindParam(":position", $this->position);
        // $stmt->bindParam(":salary", $this->salary);

        if($stmt->execute()) {
            return true;
        }

        return false;
    }

    // Read employees
    public function read() {
        $query = "SELECT * FROM " . $this->user;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    // Update employee
    public function update() {
        $query = "UPDATE " . $this->user . " SET name = :name, username = :username, password = :password,  WHERE id = :id";
        $stmt = $this->conn->prepare($query);

        // Sanitize
        $this->name=htmlspecialchars(strip_tags($this->name));
        $this->username=htmlspecialchars(strip_tags($this->username));
        $this->password=htmlspecialchars(strip_tags($this->password));
        $this->id=htmlspecialchars(strip_tags($this->id));

        // Bind values
        // $stmt->bindParam(":name", $this->name);
        // $stmt->bindParam(":email", $this->email);
        // $stmt->bindParam(":position", $this->position);
        // $stmt->bindParam(":salary", $this->salary);
        // $stmt->bindParam(":id", $this->id);

        if($stmt->execute()) {
            return true;
        }

        return false;
    }

    // Delete employee
    public function delete() {
        $query = "DELETE FROM " . $this->user . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);

        // Sanitize
        $this->id=htmlspecialchars(strip_tags($this->id));

        // Bind id
        $stmt->bindParam(":id", $this->id);

        if($stmt->execute()) {
            return true;
        }

        return false;
    }
}
?>
