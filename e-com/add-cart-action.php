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
    session_start();
    include '../auth/db.php';

    $i = $_GET['i'];
    $query = "DELETE FROM cart WHERE cart_id ='$i' ";
    if($conn->query($query) === TRUE){
        header('Location: cart.php?msg=Successfully Deleted!');
    }
?>