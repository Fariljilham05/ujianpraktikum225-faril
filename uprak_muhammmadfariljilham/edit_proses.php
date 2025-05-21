<?php
require "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = intval($_POST['id']);
    $name = $_POST['name'];
    $description = $_POST['description'];
    $stock = intval($_POST['stock']);
    $status = $_POST['status'];

    $query = "UPDATE items SET name='$name', description='$description', stock=$stock, status='$status' WHERE id=$id";

    if (mysqli_query($conn, $query)) {
       
        echo "<meta http-equiv='refresh' content='1;url=dashaboard.php'>";
    } else {
        echo "<p>Gagal memperbarui data: " . mysqli_error($conn) . "</p>";
        echo "<meta http-equiv='refresh' content='5;url=dashaboard.php'>";
    }
}
?>
