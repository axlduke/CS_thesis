<?php 
session_start();
include '../auth/db.php';
// $seller_id = $_SESSION['user_id'];
// echo $seller_id;
if(isset($_POST['post_product'])){
        $seller_id = $_POST['seller_id'];
        $location="product_images/";
        $file1=$_FILES['img1']['name'];
        $file_tmp1=$_FILES['img1']['tmp_name'];
        $file2=$_FILES['img2']['name'];
        $file_tmp2=$_FILES['img2']['tmp_name'];
        $file3=$_FILES['img3']['name'];
        $file_tmp3=$_FILES['img3']['tmp_name'];
        $file4=$_FILES['img4']['name'];
        $file_tmp4=$_FILES['img4']['tmp_name'];
        $file5=$_FILES['img5']['name'];
        $file_tmp5=$_FILES['img5']['tmp_name'];

        $product_name=$_POST['product_name'];
		$quantity=$_POST['quantity'];
		$price=$_POST['price'];
		$product_description=$_POST['product_description'];
		$product_category=$_POST['product_category'];
		$shipping_fee= $_POST['shipping_fee'];
        $brand = $_POST['brand'];
        $product_sql = "INSERT INTO products (seller_id, brand, product_name, quantity, price, product_description, product_category, shipping_fee, file1, file2, file3, file4, file5) VALUES ('$seller_id', '$brand', '$product_name', '$quantity', '$price', '$product_description', '$product_category', '$shipping_fee', '$file1', '$file2', '$file3', '$file4', '$file5');";
        if($conn->query($product_sql) === TRUE){
            move_uploaded_file($file_tmp1, $location.$file1);
            move_uploaded_file($file_tmp2, $location.$file2);
            move_uploaded_file($file_tmp3, $location.$file3);
            move_uploaded_file($file_tmp4, $location.$file4);
            move_uploaded_file($file_tmp5, $location.$file5);
            header('location: posted-items.php');
        } else{
            echo "Error: " . $product_sql . "<br>" . $conn->error;
        }
        
    }
?>