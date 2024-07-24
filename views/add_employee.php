<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once '../../controllers/Employeecontroller.php';
    $employeecontroller = new employeecontroller();
    $message = $employeecontroller->create($_POST['username'], $_POST['password']);
    echo $message;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Employee</title>
</head>
<body>
    <h2>Add Employee</h2>
    <form method="post" action="">
        userame: <input type="text" name="username"><br>
        password: <input type="text" name="password"><br>
        <!-- Position: <input type="text" name="position"><br>
        Salary: <input type="text" name="salary"><br> -->
        <input type="submit" value="Add Employee">
    </form>
</body>
</html>
