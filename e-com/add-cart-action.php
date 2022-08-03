<?php
    session_start();
    include '../auth/db.php';


    if (isset($_POST['add-cart-action'])){
        $product_id = $_POST['product_id'];
        $user_id = $_POST['user_id'];
        $quantity = $_POST['quantity'];

        $sql = "INSERT INTO `cart`(`product_id`, `user_id`, `quantity`) VALUES ('$product_id','$user_id','$quantity')";
        $result = mysqli_query($conn, $sql);
        if($result){
            header('location: item-view.php');
        }
    }

?>