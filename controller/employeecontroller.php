<?php
include_once '../config/Database.php';
include_once '../models/Employee.php';

class EmployeeController {
    private $db;
    private $employee;

    public function __construct() {
        $database = new Database();
       
        $this->db = $database->getConnection();
        $this->employee = new Employee($this->db);
    }

    public function create($username, $password, ) {
        $this->employee->username = $username;
        $this->employee->password = $password;
        // $this->employee->position = $position;
        // $this->employee->salary = $salary;

        if ($this->employee->create()) {
            return "Employee created successfully.";
        } else {
            return "Unable to create employee.";
        }
    }

    public function read() {
        $stmt = $this->employee->read();
        $employees = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $employees;
    }

    public function update($id, $username, $password) {
        $this->employee->id = $id;
        $this->employee->username = $username;
        $this->employee->password = $password;
        // $this->employee->position = $position;
        // $this->employee->salary = $salary;

        if ($this->employee->update()) {
            return "Employee updated successfully.";
        } else {
            return "Unable to update employee.";
        }
    }

    public function delete($id) {
        $this->employee->id = $id;

        if ($this->employee->delete()) {
            return "Employee deleted successfully.";
        } else {
            return "Unable to delete employee.";
        }
    }
}
?>
