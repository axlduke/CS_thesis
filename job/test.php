<?php
session_start();
    include '../auth/db.php';
    $user_id = $_SESSION['user_id'];
    $sql_query = "SELECT * FROM user WHERE user_id ='$user_id'";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    <?php   
    $sql = "SELECT jobs_post.employer_id as jobs_post, applicants.apply_id as applicants FROM `user`, job_post, applicants 
    INNER JOIN jobs_post ON jobs_post.post_id = jobs_post.employer_id INNER JOIN applicants ON applicants.apply_id = applicants.employer_id = applicants.user_id = applicants.job_id 
    ORDER BY jobs_post ='$user_id'";
    $res = mysqli_query($conn,$sql);
    ?>

<table class="table-auto">
  <thead>
    <tr>
      <th class="px-10">employer_id</th>
      <th class="px-10">apply_id</th>
      <th class="px-10">job_id</th>
    </tr>
  </thead>
  <tbody>
    <?php
        if($res > 0){
            while($row = mysqli_fetch_array($res)){
    ?>
    <tr>
      <td><?php echo $row['user_id']?></td>
      <td><?php echo $row['apply_id']?></td>
      <td><?php echo $row['job_id']?></td>
    </tr>

  </tbody>
  <?php
            }
        }
  ?>
</table>
                
</body>
</html>
