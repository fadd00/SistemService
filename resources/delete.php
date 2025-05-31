<?php
include 'config/database.php';

$id = $_GET['id'];
$query = "DELETE FROM users WHERE id = $id";

if (mysqli_query($conn, $query)) {
    header("Location: resources/views/admin.blade.php");
} else {
    echo "Error: " . mysqli_error($conn);
}
?>