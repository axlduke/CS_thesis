<?php
require_once 'connect.php';
$stmt = $conn->prepare('SELECT Country,count(Name) as Number FROM `tbl_people_country` GROUP BY Country');
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_OBJ);
echo json_encode($results);
?>