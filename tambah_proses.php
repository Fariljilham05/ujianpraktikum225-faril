<?php
include 'koneksi.php';

$name = $_POST['name'];
$description = $_POST['description'];
$stock = $_POST['stock'];
$status = $_POST['status'];

if (!empty($name) && !empty($description) && is_numeric($stock) && !empty($status)) {
    $query = "INSERT INTO items (name, description, stock, status) VALUES ('$name', '$description', $stock, '$status')";
    $result = mysqli_query($conn, $query);

    if ($result){
        echo "<meta http-equiv='refresh' content='1;url=dashaboard.php'>";
    }else{
        echo mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
