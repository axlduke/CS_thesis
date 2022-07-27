<?php
session_start();
include '../auth/db.php';
    if(isset($_POST['submit-search'])){
        $search = mysqli_real_escape_string($conn, $_POST['search']);
        $sql = "SELECT * FROM applicants WHERE fname = '$fname'";
        $result = mysqli_query($conn, $sql);
        $queryResult = mysqli_num_rows($result);
        if($queryResult > 0){
            while($row = mysqli_fetch_assoc($result)){
                $row['logo'];
                $row['fname'];
                $row['date_applied'];
            }
        } else{
            echo "There are no results matching your search!";
        }
    }
?>