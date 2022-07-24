<?php
include "../auth/db.php";
session_start();
$employer_id=$_SESSION['user_id'];

if(isset($_POST['post_button'])){
$job_title=$_POST['job_title'];
$job_experience=$_POST['job_experience'];
$job_qualification=$_POST['job_qualification'];
$logo=$_POST['logo'];
$salary=$_POST['salary'];
$date = date('Y-m-d H:i:s');
$post ="INSERT INTO jobs_post (employer_id, jobtitle, job_experience, job_qualification, logo, salary, date_posted) VALUES ('$employer_id','$job_title','$job_experience','$job_qualification','$logo','$salary','$date')";
        
 if (!mysqli_query($conn,$post))
{
 echo("Error description: " . mysqli_error($conn));
}
else{
    header('location: post.php');
     }
}
?>
