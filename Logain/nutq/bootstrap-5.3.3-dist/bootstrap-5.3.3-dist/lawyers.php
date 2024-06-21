<?php
include 'db_config.php';

$sql = "SELECT id, name, specialty FROM lawyers";
$result = $conn->query($sql);

$lawyers = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $lawyers[] = $row;
    }
}
echo json_encode($lawyers);

$conn->close();
?>
