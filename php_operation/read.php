<?php
include 'db.php';

$sql = "SELECT id, username, password FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>ID</th><th>Username</th><th>Password</th><th>Actions</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["username"]. "</td><td>" . $row["password"]. "</td>";
        echo "<td><a href='update.php?id=" . $row["id"] . "'>Update</a> | <a href='delete.php?id=" . $row["id"] . "'>Delete</a></td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
<a href="index.php">Back to Home</a>
