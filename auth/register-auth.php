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
				$_SESSION['mode'] = $row['mode'];
                $row['user_id'] =$_SESSION['user_id'];
                if ($row['type'] == 0) {
                        header("Refresh:0 url=../admin.php");
                    }
                    elseif ($row['type'] == 1) {
                        header("Refresh:0 url=../main.php");
                    }
                    elseif ($row['type'] == 2) {
                        header("Refresh:0 url=../admin-seller.php");
                    }                    
                    elseif ($row['type'] == 3){
                        header("Refresh:0; url=../admin-jobs.php");
                    }            
            } else {

                echo $_SESSION['failed'] = '
                <div class="close close_multi bg-red-100 border-t-4 border-red-500 rounded-b text-red-900 px-4 py-3 shadow-md" role="alert">
                    <div class="flex">
					<div class="py-1"><svg class="fill-current h-6 w-6 text-red-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                        <div>
                            <p class="font-bold"> Password</p>
                            <p class="text-sm">Make sure you know what is your password</p>
                        </div>
                    </div>
                </div>';
                header("location: ../login.php");
            }
        } else {
            echo $_SESSION['failed'] = '
                <div class="close close_multi bg-red-100 border-t-4 border-red-500 rounded-b text-red-900 px-4 py-3 shadow-md" role="alert">
                    <div class="flex">
                        <div class="py-1"><svg class="fill-current h-6 w-6 text-red-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                        <div>
                            <p class="font-bold">Email or Password</p>
                            <p class="text-sm">Make sure you know what is your email or password</p>
                        </div>
                    </div>
                </div>';
				header("location: ../login.php");
        }
	}
?>
