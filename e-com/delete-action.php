<?php
    session_start();
    include '../auth/db.php';

    $i = $_GET['i'];
    $query = "DELETE FROM cart WHERE cart_id ='$i' ";
    if($conn->query($query) === TRUE){
        header('Location: cart.php');
    }
?>