<?php
include 'db_config.php';

$name = $_POST['name'];
$email = $_POST['email'];
$problem = $_POST['problem'];

$sql = "INSERT INTO users (name, email, problem) VALUES ('$name', '$email', '$problem')";

if ($conn->query($sql) === TRUE) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'error' => $conn->error]);
}

$conn->close();
?>
