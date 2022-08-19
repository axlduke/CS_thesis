<?php
session_start();
include '../auth/db.php';

    if(isset($_POST['apply'])){
        $user_id = $_POST['user_id'];
        $employer_id = $_POST['employer_id'];
        // $fname = $_POST['fname'];
        $job_id = $_POST['job_id'];
        $date_applied = date('Y-m-d H:i:s');
        $query =mysqli_query($conn, "SELECT * FROM applicants WHERE user_id = '$user_id' AND job_id = '$job_id'");
        if(mysqli_num_rows($query) > 0){
            echo '<script>window.alert("You Already Applied in this job.")</script>';
            echo "<script>window.history.go(-1);</script>";
        }
        else{                
                $sql = "INSERT INTO applicants VALUES ('','$user_id','$employer_id','$job_id','$date_applied')";
                $result = mysqli_query($conn, $sql);
                if($result){
                    header("Location: ../main.php");
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
                        }
        }                        

?>