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

        $type = explode('.', $_FILES['pictures']['name']);
        $type = $type[count($type) - 1];
        $pictures = '../img/'.uniqid(rand()).'.'.$type;

            if (in_array($type, array('jpeg', 'jpg', 'png', 'JPEG', 'JPG', 'PNG'))) {
                if (is_uploaded_file($_FILES['pictures']['tmp_name'])) {
                    if (move_uploaded_file($_FILES['pictures']['tmp_name'], $pictures)) {
                        $user_id = $_POST['user_id'];
                        $sql = "UPDATE user SET fname = '$fname', contact = '$contact', email = '$email', `password`='$password' ,`about`='$about' , pictures = '$pictures',  WHERE user_id ='$user_id'";
                        $result = mysqli_query($conn, $sql);
    
                        if ($result) {
                            echo $_SESSION['success'] = '
                                <div class="alert alert-success alert-dismissable">
                                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                    <i class="fa fa-info-circle fa-3x m-r-sm"></i> <span><strong>Success! </strong>Your profile was successfully updated.</span>
                                </div>';
    
                            header("Location: ../profile.php");
                        } else {
                            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                        }
                    } else {
                        echo "Error while updating profile profile.";
                    }
                } else {
                    echo "Error while updating profile profile.";
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