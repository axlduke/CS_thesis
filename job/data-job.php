<?php
    $conn = new PDO("mysql:host=localhost;dbname=test", 'root', '');
    $stmt = $conn->prepare('SELECT Name,count(Country) as Number FROM tbl_people_country GROUP BY Name');
    $stmt->execute();
    $results = $stmt->fetchAll($conn::FETCH_OBJ);
    echo json_encode($results);
    ?>