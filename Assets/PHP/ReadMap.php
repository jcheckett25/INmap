<?php
    //AWS Server!!!!!!!!!!!!!
    $servername = "api-data.cnfllrhicyva.us-east-2.rds.amazonaws.com";
    $username = "root";
    $password = "johnnyapps";
    $dbName = "api-dev";

    $mapName = $_POST["mapName"];

    //Make Connection
    $conn = mysqli_connect($servername,$username,$password,$dbName);

    //Check Connection
    if(!$conn){
        die("Connection Failed. " . mysqli_connect_error());
    } else {
        $sql = "SELECT info FROM map WHERE name = '$mapName'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        echo($row['info']);
    }
?>