<?php
include('connect.php');

$id = $_GET['id'];
$sql = "DELETE FROM registration WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    header("Location: view.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
?>
