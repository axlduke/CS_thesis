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
            $referer = $_SERVER['HTTP_REFERER'];
            header("Location: $referer"); 
        }
    }

?>

<?php
    include '../auth/db.php';
    if (isset($_POST['update_item'])){
        $product_id = $_POST['product_id'];
        $product_name = $_POST['product_name'];
        $price = $_POST['price'];
        $brand = $_POST['brand'];
        $quantity = $_POST['quantity'];
        $description = $_POST['description'];

        $update = "UPDATE `products` SET `brand`='$brand',`product_name`='$product_name',`quantity`='$quantity',`price`='$price',`product_description`='$description' WHERE `product_id` ='$product_id'";
        $update_result = mysqli_query($conn, $update);
        if($update_result){
            header("Location: posted-items.php"); 
        }
    }

?>