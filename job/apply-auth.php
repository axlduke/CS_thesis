<?php
session_start();
include '../auth/db.php';
    // $user_id = $_SESSION['user_id'];

    
    // $employer_id = $_SESSION['user_id'];
    // $job_company = $_SESSION['company'];

    if(isset($_POST['apply'])){
        $user_id = $_POST['user_id'];
        $employer_id = $_POST['employer_id'];
        $fname = $_POST['fname'];
        $job_id = $_POST['job_id'];
        $date_applied = date('Y-m-d H:i:s');
        $sql = "INSERT INTO applicants VALUES ('','$user_id','$employer_id','$fname','$job_id','$date_applied')";
        $result = mysqli_query($conn, $sql);
        if($result){
            header("Location: ../main.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
                }else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }

?>