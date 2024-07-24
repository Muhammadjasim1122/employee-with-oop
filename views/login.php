<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once '../../controllers/AdminController.php';
    $admincontroller = new Admincontroller();
    $message = $admincontroller->login($_POST['username'], $_POST['password']);
    echo $message;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
</head>
<body>
    <h2>Admin Login</h2>
    <form method="post" action="/test/views/dashboard.php">
        Username: <input type="text" name="username"><br>
        Password: <input type="password" name="password"><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
