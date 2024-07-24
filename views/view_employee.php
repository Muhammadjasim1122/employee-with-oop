<?php
include_once '../../controllers/EmployeeController.php';
$employeecontroller = new employeecontroller();
$employee = $employeecontroller->read();
?>
<!DOCTYPE html>
<html>
<head>
    <title>View Employees</title>
</head>
<body>
    <h2>Employees List</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>username</th>
            <th>password</th>
            <!-- <th>Position</th>
            <th>Salary</th> -->
        </tr>
        <?php foreach ($employee as $employee): ?>
        <tr>
            <td><?php echo $employee['id']; ?></td>
            <td><?php echo $employee['username']; ?></td>
            <td><?php echo $employee['password']; ?></td>
            <!-- <td><?php echo $employee['position']; ?></td>
            <td><?php echo $employee['salary']; ?></td> -->
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
