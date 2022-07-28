<?php
    session_start();
    include '../auth/db.php';

    if (isset($_POST['search'])){
        $NameSearch = $_POST['NameSearch'];
        $query = "SELECT * FROM applicants WHERE CONCAT(`id`, `fname`, `lname`, `age`) LIKE '%".$NameSearch."%'";
        $search_result = mysqli_query($conn, $query);
    } else{
        $query = "SELECT * FROM applicants";
        $search_result = mysqli_query($conn, $query);
    }
?>