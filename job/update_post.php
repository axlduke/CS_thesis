<?php
session_start();
    include "../auth/db.php";
    // $post_id = $_SESSION['post_id'];
    $employer_id = $_SESSION['user_id'];
    $job_company = $_SESSION['company'];

    if(isset($_POST['updateform'])){
        $job_title = $_POST['job_title'];
        $job_experience = $_POST['job_experience'];
        $job_qualification = $_POST['job_qualification'];
        $job_technology = $_POST['job_technology'];
        $job_about = $_POST['job_about'];

        $sql = "UPDATE jobs_post SET job_company ='$job_company', job_title ='$job_title', job_experience ='$job_experience', 
        job_qualification = '$job_qualification', job_technology = '$job_technology', 
        job_about = '$job_about' WHERE employer_id = '$employer_id'";
        $result = mysqli_query($conn, $sql);
        if($result){
            header("Location: post.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
                }else {
                    echo "Error while uploading post jobs.";
                }

?>
