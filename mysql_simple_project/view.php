<?php
$conn = new mysqli("localhost", "root", "", "contact_db");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM contacts";
$result = $conn->query($sql);

echo "<h2>Submitted Messages</h2>";
echo "<table border='1' cellpadding='10'><tr><th>ID</th><th>Name</th><th>Email</th><th>Message</th></tr>";

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['email']}</td>
            <td>{$row['message']}</td>
          </tr>";
  }
} else {
  echo "<tr><td colspan='4'>No messages yet</td></tr>";
}

echo "</table>";
$conn->close();
?>
