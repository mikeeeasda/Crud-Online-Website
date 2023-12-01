<?php
include "db_conn.php";
$id = $_POST['id'];

$sql = "DELETE FROM `clothing` WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    header("Location: index.php");
} else {
    echo "Failed to delete record: " . $conn->error;
}

$conn->close();
?>
