<?php
    //AWS SERVER!!!
    $servername = "api-data.cnfllrhicyva.us-east-2.rds.amazonaws.com";
    $username = "root";
    $password = "johnnyapps";
    $dbName = "api-dev";

    $mapName = $_POST["mapName"];
    $mapInfo = $_POST["mapInfo"];

    //Make Connection
    $conn = mysqli_connect($servername,$username,$password,$dbName);

    //Check Connection
    if(!$conn){
        die("Connection Failed. " . mysqli_connect_error());
    } else {
        //check if map exists
        $sql = "SELECT * FROM `map` WHERE name = '$mapName'";
        $result = mysqli_query($conn,$sql);
        $row_cnt = $result->num_rows;
        if ($row_cnt > 0) {
        //entry already exists just update it    
        $sql = "UPDATE map SET info = '$mapInfo' WHERE name = '$mapName'";
        $result = mysqli_query($conn,$sql);
        echo("Success!");
        } else {
         //create new entry
        $sql = "INSERT INTO map (name,info) VALUES ('$mapName', '$mapInfo')";
        $result = mysqli_query($conn,$sql);
        echo("Success!");
        }
    }
?>