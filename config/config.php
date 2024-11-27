<?php
    $servername = "localhost";
    $username = "root";
    $password = "458437";

    $conn = mysqli_connect( $servername, $username, $password);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql="CREATE DATABASE IF NOT EXISTS blood";

    if(!mysqli_query($conn, $sql)){
        echo "Error creating database: " . mysqli_error($conn);
    }

    $sql="use blood";
    mysqli_query($conn,$sql);

    $sql="CREATE TABLE IF NOT EXISTS users(
            name VARCHAR(50) NOT NULL,
            blood_group VARCHAR(3) NOT NULL,
            gender VARCHAR(10),
            phone_number VARCHAR(11) NOT NULL,
            date_of_birth  DATE ,
            address VARCHAR(100),
            police_station VARCHAR(30) NOT NULL,
            district VARCHAR(30) NOT NULL
        )";

    if(!mysqli_query($conn, $sql)){
        echo "Error creating table: " . mysqli_error($conn);
    }
?> 