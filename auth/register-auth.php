<?php

include "db.php";

if(isset($_POST['form1'])){

	$fname = $_POST['fname'];
	$contact = $_POST['contact'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$password = $_POST['password'];
    $type = $_POST['type'];

	$query =mysqli_query($conn, "SELECT * FROM account WHERE email = '$email'");
	if(mysqli_num_rows($query) > 0){
		echo '<script>window.alert("Email is already taken")</script>';
		echo "<script>window.history.go(-1);</script>";
	}
	else{

        $query = "INSERT INTO account VALUES ('','$fname','$contact','$address','$email','$password','$type','','','','')";

        if($conn->query($query) === TRUE){

            echo '<script>window.alert("Data Inserted Successfully")</script>';
            header("Location: ../main.php");

        }else{
            echo '<script>window.alert("ERROR!")</script>';
            echo "<script>window.history.go(-1);</script>";
        }
    }
}

if(isset($_POST['form2'])){

	$fname = $_POST['fname'];
	$contact = $_POST['contact'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$password = $_POST['password'];
    $type = $_POST['type'];
    $business = $_POST['business'];
    $permit = $_POST['permit'];

	$query =mysqli_query($conn, "SELECT * FROM account WHERE email = '$email'");
	if(mysqli_num_rows($query) > 0){
		echo '<script>window.alert("Email is already taken")</script>';
		echo "<script>window.history.go(-1);</script>";
	}
	else{

        $query = "INSERT INTO account VALUES ('','$fname','$contact','$address','$email','$password','$type','','$business','$permit','')";

        if($conn->query($query) === TRUE){

            echo '<script>window.alert("Data Inserted Successfully")</script>';
            header('Location. ../shop.php');

        }else{
            echo '<script>window.alert("ERROR!")</script>';
        }
    }
}
if(isset($_POST['form3'])){

	$fname = $_POST['fname'];
	$contact = $_POST['contact'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$password = $_POST['password'];
    $type = $_POST['type'];
    $company = $_POST['company'];

	$query =mysqli_query($conn, "SELECT * FROM account WHERE email = '$email'");
	if(mysqli_num_rows($query) > 0){
		echo '<script>window.alert("Email is already taken")</script>';
		echo "<script>window.history.go(-1);</script>";
	}
	else{

        $query = "INSERT INTO account VALUES ('','$fname','$contact','$address','$email','$password','$type','','','','$company')";

        if($conn->query($query) === TRUE){

            echo '<script>window.alert("Data Inserted Successfully")</script>';
            header('Location. ../jobs.php');

        }else{
            echo '<script>window.alert("ERROR!")</script>';
        }
    }
}
