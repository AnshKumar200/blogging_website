<?php


//  This is the main File which will be used in deployment code to connect to the database
//  Table  creation code is only for sole purpose of showing the code and its structure and for illustrative purpose

$serverName = "localhost";
$userName = "root";
$password = "";
$dataBase = "blog_website";
$tableName = "allusers";

$conn = mysqli_connect($serverName,$userName,$password);

// creating Database  
// $sql = "CREATE DATABASE `$dataBase`";
// $result = mysqli_query($conn,$sql);



$conn  = mysqli_connect($serverName,$userName,$password,$dataBase);

// Creating Table
$sql = "CREATE TABLE $dataBase . $tableName (
        `s_no` int primary key AUTO_INCREMENT,
        `name` text not null,
        `email` varchar(255) not null,
        `username` varchar(255) not null,
        `password` text not null,
        UNIQUE KEY `email` (`email`(191)),
        UNIQUE KEY `username` (`username`(191))
        );";

// $result = mysqli_query($conn, $sql);


?>