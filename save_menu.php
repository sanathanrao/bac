<?php
$servername = "localhost";
$username = "root";
$password = "";  // Empty password since root has no password
$dbname = "menu_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$price = $_POST['price'];
$description = $_POST['description'];

$sql = "INSERT INTO menu_items (name, price, description) VALUES ('$name', '$price', '$description')";

if ($conn->query($sql) === TRUE) {
    // Redirect to list_menu.php after successful insertion
    header("Location: list_menu.php");
    exit();  // Ensure that no further script is executed
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
