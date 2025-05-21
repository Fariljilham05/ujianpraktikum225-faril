<?php
require "koneksi.php";

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $query = "DELETE FROM items WHERE id = $id";

    if (mysqli_query($conn, $query)) {
       
        echo "<meta http-equiv='refresh' content='1;url=dashaboard.php'>";
    } else {
        echo "<p> Gagal menghapus data: " . mysqli_error($conn) . "</p>";
        echo "<meta http-equiv='refresh' content='5;url=dashaboard.php'>";
    }
}
?>
