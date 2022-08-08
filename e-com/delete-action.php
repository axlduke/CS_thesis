<?php
    session_start();
    include '../auth/db.php';

    $i = $_GET['i'];
    $query = "DELETE FROM cart WHERE cart_id ='$i' ";
    if($conn->query($query) === TRUE){
        header('Location: cart.php');
    }
?>

<?php
    session_start();
    include '../auth/db.php';
    $delete = $_POST['delete'];

    $product_query = "DELETE FROM products WHERE product_id ='$delete'";
    if($conn->query($product_query) === TRUE){
        header('Location: posted-items.php');
    }
?>