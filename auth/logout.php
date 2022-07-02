<?php
session_start();
unset($_SESSION['user_id']);
unset($_SESSION['password']);
session_destroy();
header("Location: ../login.php");
exit();
?>