<?php 

$defaultemail = "admin@gmail.com";
$defaulpassword = "admin";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    if ($email === $defaultemail && $password === $defaulpassword){
        echo "<meta http-equiv='refresh' content='1;url=dashaboard.php'>";
    }else{
        echo "Email dan password salah!";
        echo "<meta http-equiv='refresh' content='1;url=login.php'>";

    }

}else{
    echo "403 - Akses Ditolak";
}
