<?php
session_start();
unset($_SESSION['user_id']);
unset($_SESSION['name']);
session_destroy();

echo "<meta http-equiv='refresh' content='1;url=login.php'>";

?>