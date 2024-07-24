<?php
include_once '../../controllers/EmployeeController.php';
$employeecontroller = new employeecontroller();
$employee = $employeecontroller->read();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Manage Employees</title>
</head>
<body>
    <h2>Manage Employees</h2>
    <a href="../employee/add_employee.php">Add Employee</a><br><br>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>usernaeame</th>
            <th>password</th>
            <!-- <th>Position</th>
            <th>Salary</th> -->
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php foreach ($employee as $employee): ?>
        <tr>
            <td><?php echo $employee['id']; ?></td>
            <td><?php echo $employee['username']; ?></td>
            <td><?php echo $employee['password']; ?></td>
            <!-- <td><?php echo $employee['position']; ?></td>
            <td><?php echo $employee['salary']; ?></td> -->
            <td><a href="test/views/edit_employee.php?id=<?php echo $employee['id']; ?>">Edit</a></td>
            <td><form method="post" action="/test/views/delete_employee.php">
                <input type="hidden" name="id" value="<?php echo $employee['id']; ?>">
                <input type="submit" value="Delete">
                </form></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
