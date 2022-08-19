<?php
    session_start();
    include '../auth/db.php';
    $delete = $_POST['delete'];

    $product_query = "DELETE FROM products WHERE product_id ='$delete'";
    if($conn->query($product_query) === TRUE){
        header('Location: posted-items.php');
    }
?>
<?php
    session_start();
    include '../auth/db.php';
    $id = $_POST['id'];

    $product_query = "DELETE FROM orders WHERE order_id ='$id'";
    if($conn->query($product_query) === TRUE){
        header('Location: check-out.php');
    }
?>