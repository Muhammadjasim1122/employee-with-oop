<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once '../../controllers/EmployeeController.php';
    $employeecontroller = new employeecontroller();
    $message = $employeecontroller->delete($_POST['id']);
    echo $message;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Delete Employee</title>
</head>
<body>
    <h2>Delete Employee</h2>
    <form method="post" action="">
        ID: <input type="text" name="id"><br>
        <input type="submit" value="Delete Employee">
    </form>
</body>
</html>
