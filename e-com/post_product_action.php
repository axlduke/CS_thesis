<?php 
session_start();
include '../auth/db.php';
$seller_id = $_SESSION['user_id'];
// echo $seller_id;
        if(isset($_POST['post_product_button']))
			{
			$type = explode('.', $_FILES['image']['name']);
		    $type = $type[count($type) - 1];
		    $pictures = '../img/'.uniqid(rand()).'.'.$type;
			$product_name=$_POST['product_name'];
			$quantity=$_POST['quantity'];
			$price=$_POST['price'];
			$product_description=$_POST['product_description'];
			$product_category=$_POST['product_category'];
			$shipping_fee= $_POST['shipping_fee'];
			// $product_id= $_POST['product_id'];
            if (in_array($type, array('jpeg', 'jpg', 'png', 'JPEG', 'JPG', 'PNG'))) {
                if (is_uploaded_file($_FILES['image']['tmp_name'])) {
                    if (move_uploaded_file($_FILES['image']['tmp_name'], $pictures)) {
                        $sql = "INSERT INTO products (seller_id, product_name, quantity,price,product_description, product_category, shipping_fee,image) values ('$seller_id', '$product_name','$quantity','$price','$product_description','$product_category','$shipping_fee','$pictures')" or die ("query incorrect");
                        $result = mysqli_query($conn, $sql);
    
                        if ($result) {
                            header("location: posted-items.php");
                        } else {
                            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                        }
                    } else {
                        echo "Error while updating profile photo.";
                    }
                } else {
                    echo "Error while updating profile photo.";
                }
            }
        }

?>