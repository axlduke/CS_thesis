<?php
session_start();
include "db.php";

	if(isset($_POST['users'])){

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

			$query_account = "INSERT INTO account VALUE('','$email','$password','$type')";
			if($conn->query($query_account) === TRUE){
				$account_id = $conn->insert_id;
				$query_user = "INSERT INTO user  VALUES('','$account_id','$fname','$contact','$email','$address','$password','$type','','','','','')";
				if($conn->query($query_user) === TRUE){
					$sql = "SELECT * FROM user WHERE email = '$email' and `password`='$password'";
					$result = $conn->query($sql);
					if($result->num_rows > 0){
						$_SESSION['user_id'];
						$row = mysqli_fetch_array($result);
						$_SESSION['user_id'] = $row['user_id'];
						$_SESSION['fname'] = $row['fname'];
						$_SESSION['type'] = $row['type'];
						$_SESSION['email'] = $row['email'];
						$_SESSION['address'] = $row['address'];
						$_SESSION['password'] = $row['password'];

						header("Location: ../main.php");
					}
				} else{
					echo '<script>window.alert("ERROR ON USERS!")</script>';
				}
			} else{
				echo '<script>window.alert("ERROR ON ACCOUNTS!")</script>';
			}
		}
	}

	if(isset($_POST['seller'])){

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

			$query_account = "INSERT INTO account VALUE('','$email','$password','$type')";
			if($conn->query($query_account) === TRUE){
				$account_id = $conn->insert_id;
				$query_user = "INSERT INTO user VALUES('','$account_id','$fname','$contact','$email','$address','$password','$type','$business','$permit','','','')";
				if($conn->query($query_user) === TRUE){
					$sql = "SELECT * FROM user WHERE email = '$email' and password='$password'";
					$result = $conn->query($sql);
					if($result->num_rows > 0){
						$_SESSION['user_id'];
						$row = $result->fetch_array();
						$_SESSION['user_id'] = $row['user_id'];
						$_SESSION['fname'] = $row['fname'];
						$_SESSION['email'] = $row['email'];
						$_SESSION['type'] = $row['type'];
						$_SESSION['address'] = $row['address'];
						$_SESSION['password'] = $row['password'];
						header('Location: ../shop.php');
					}
				} else{
					echo '<script>window.alert("ERROR ON USERS!")</script>';
				}
			} else{
				echo '<script>window.alert("ERROR ON ACCOUNTS!")</script>';
			}
		}
	}

// FORM3 sign up
	if(isset($_POST['manager'])){

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

			$query_account = "INSERT INTO account VALUE('','$email','$password','$type')";
			if($conn->query($query_account) === TRUE){
				$account_id = $conn->insert_id;
				$query_user = "INSERT INTO user VALUES('','$account_id','$fname','$contact','$email','$address','$password','$type','','','$company','','')";
				if($conn->query($query_user) === TRUE){
					$sql = "SELECT * FROM user WHERE email = '$email' and password='$password'";
					$result = $conn->query($sql);
					if($result->num_rows > 0){
						$_SESSION['user_id'];
						$row = $result->fetch_array();
						$_SESSION['user_id'] = $row['user_id'];
						$_SESSION['fname'] = $row['fname'];
						$_SESSION['email'] = $row['email'];
						$_SESSION['address'] = $row['address'];
						$_SESSION['type'] = $row['type'];
						$_SESSION['password'] = $row['password'];
						header('Location: ../jobs.php');
					}
				} else{
					echo '<script>window.alert("ERROR ON USERS!")</script>';
					echo "<script>window.history.go(-1);</script>";
				}
			} else{
				echo '<script>window.alert("ERROR ON ACCOUNTS!")</script>';
				echo "<script>window.history.go(-1);</script>";
			}
		}
	}


// LOGIN


    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $check_email = "SELECT email FROM user WHERE email = '$email'";
        $result_email = mysqli_query($conn, $check_email);
        
        if ($result_email->num_rows > 0) {
            $get_email = mysqli_fetch_array($result_email);

            $check_user = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
            $result_user = mysqli_query($conn, $check_user);
            
            if ($result_user->num_rows > 0) {
				$_SESSION['user_id'] = true;
                $row = $result_user->fetch_array();
				$_SESSION['user_id'] = $row['user_id'];
				$_SESSION['fname'] = $row['fname'];
				$_SESSION['contact'] = $row['contact'];
				$_SESSION['type'] = $row['type'];
				$_SESSION['address'] = $row['address'];
                $row['user_id'] =$_SESSION['user_id'];
                if ($row['type'] == 0) {
                        header("Refresh:0 url=../admin-seller.php");
                    }
                    elseif ($row['type'] == 1) {
                        header("Refresh:0 url=../main.php");
                    }
                    elseif ($row['type'] == 2) {
                        header("Refresh:0 url=../jobs.php");
                    }                    
                    else{
                        header("Refresh:0; url=../shop.php");
                    }            
            } else {
                echo 'Incorrect email or password.';
                header("Refresh:1; url=../login.php");
            }
        } else {
            echo 'Email address does not exist.';
             header("Refresh:1; url=../login.php");
        }
	}
?>
