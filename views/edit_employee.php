<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once '../../controllers/Employeecontroller.php';
    $employeecontroller = new Employeecontroller();
    $message = $employeecontroller->update($_POST['id'], $_POST['username'], $_POST['password']);
    echo $message;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Employee</title>
</head>
<body>
    <h2>Edit Employee</h2>
    <form method="post" action="">
        id: <input type="text" name="id"><br>
        username: <input type="text" name="username"><br>
        password: <input type="text" name="password"><br>
        <!-- Position: <input type="text" name="position"><br>
        Salary: <input type="text" name="salary"><br> -->
        <input type="submit" value="Edit Employee">
    </form>
</body>
</html>
