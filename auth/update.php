<?php 
    include "db.php";
    session_start();
    $user_id = $_SESSION['user_id'];

    if (isset($_POST['about_btn'])){
        $fname = $_POST['fname'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $password = $_POST['password'];
        $about = $_POST['about'];
        $profile = $_POST['profile'];

        $type = explode('.',$_FILES['photo']['name']);
        $type = $type[count($type) -1];
        $url = '../img/'.uniqid(rand()).'.'.$type;
        if(in_array($type, array('jpeg','jpg','png','JPEG','JPG','JPEG'))){
            if(is_uploaded_file($_FILES['photo']['tmp_name'])){
                if(move_uploaded_file($_FILES['photo']['tmp_name'], $profile)){
                    $sql_about = "UPDATE user SET fname='$fname', contact='$contact', email='$email', `address`='$address', 
                    password='$password', about='$about', profile='$profile' WHERE user_id ='$user_id'";
                    $result = mysqli_query($conn, $sql_about);
                    if($result){
                        header('Location: ../profile.php');
                    } else{
                        echo "failed";
                    }
                }
            }
        }
        
    }
?>


<!-- <?php 
    include "db.php";
    session_start();

    if (isset($_POST[''])){

    }
?>
<?php 
    include "db.php";
    session_start();

    if (isset($_POST[''])){

    }
?> -->