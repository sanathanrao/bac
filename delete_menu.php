<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "menu_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_POST['id'];

$sql = "DELETE FROM menu_items

WHERE id = $id";

if ($conn->query($sql) === TRUE) { echo "Menu item deleted successfully"; } else { echo "Error deleting record: " . $conn->error; }

$conn->close(); header("Location: list_menu.php"); // Redirect back to the menu list exit; ?>