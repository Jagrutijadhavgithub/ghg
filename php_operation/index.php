<?php
include 'db.php';

$sql = "SELECT id, username FROM users";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Users List</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2>Users List</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Action</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"]. "</td><td>" . $row["username"]. "</td>";
                echo "<td><a href='update.php?id=" . $row["id"] . "'>Edit</a> | <a href='delete.php?id=" . $row["id"] . "'>Delete</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No users found</td></tr>";
        }
        ?>
    </table>
    <br>
    <a href="create.php">Create New User</a>
</body>
</html>
<?php
$conn->close();
?>
