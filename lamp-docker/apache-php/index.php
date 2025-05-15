

<?php
$mysqli = new mysqli("mysql", "root", "rootpassword", "demo");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$result = $mysqli->query("SELECT * FROM users");

if ($result === false) {
    die("Query failed: " . $mysqli->error);
}

while($row = $result->fetch_assoc()) {
    echo "ID: " . htmlspecialchars($row["id"]) .
         " | Name: " . htmlspecialchars($row["name"]) .
         " | Email: " . htmlspecialchars($row["email"]) . "<br>";
}

$mysqli->close();
?>

