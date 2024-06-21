<?php
include 'db_config.php';

$lawyer_id = $_POST['lawyer_id'];
$user_id = $_POST['user_id'];
$date = $_POST['date'];

$sql = "INSERT INTO appointments (lawyer_id, user_id, date) VALUES ('$lawyer_id', '$user_id', '$date')";

if ($conn->query($sql) === TRUE) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'error' => $conn->error]);
}

$conn->close();
?>
