<?php
    session_start();
    include '../auth/db.php';

    $id = $_GET['id'];
    $query = "DELETE FROM cart WHERE cart_id ='$id' ";
    if($conn->query($query) === TRUE){
        header('location: cart.php');
    }
?>
