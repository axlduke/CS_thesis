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
    
        $sql = "UPDATE user SET fname = '$fname', contact = '$contact', email = '$email', address = '$address', password = '$password', about = '$about' WHERE user_id ='$user_id'";
        $result = mysqli_query($conn, $sql);
        if($result){
            echo $_SESSION['about_success'] = '<script>window.alert("Updated successfully")</script>';
            header('location: ../e-com/seller-profile.php');
        }
    }
?>


<!-- <?php 
    include "db.php";
    session_start();

        $type = explode('.', $_FILES['pic']['name']);
        $type = $type[count($type) - 1];
        $pictures = '../img/'.uniqid(rand()).'.'.$type;

        if (isset($_POST['upload'])) {
            if (in_array($type, array('jpeg', 'jpg', 'png', 'JPEG', 'JPG', 'PNG'))) {
                if (is_uploaded_file($_FILES['pic']['tmp_name'])) {
                    if (move_uploaded_file($_FILES['pic']['tmp_name'], $pictures)) {
    
                        $sql = "UPDATE user SET pictures = '$pictures' WHERE user_id ='$user_id'";
                        $result = mysqli_query($conn, $sql);
    
                        if ($result) {
                            // echo $_SESSION['success'] = '
                            // <div class="close close_multi bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
                            //     <div class="flex">
                            //         <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                            //         <div>
                            //             <p class="font-bold">Update has changed</p>
                            //             <p class="text-sm">Make sure you know how these changes affect you.</p>
                            //         </div>
                            //     </div>
                            // </div>';
                            header('location: ../e-com/seller-profile.php');
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
<?php 
    include "db.php";
    session_start();

    if (isset($_POST[''])){

    }
?> -->