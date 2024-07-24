<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once '../../controllers/employeecontroller.php';
    // You need to implement an Employee login method in EmployeeController similar to Admin login
    // $employeeController = new EmployeeController();
    // $message = $employeeController->login($_POST['username'], $_POST['password']);
    // echo $message;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Employee Login</title>
</head>
<body>
    <h2>Employee Login</h2>
    <form method="post" action="employee_login.php">
        Username: <input type="text" name="username"><br>
        Password: <input type="password" name="password"><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
