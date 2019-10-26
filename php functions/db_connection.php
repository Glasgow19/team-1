<?php

//credentials for mySQL database
$host="";
$port=3306;
$socket="";
$user="john";
$password="";
$dbname="hackathon";

//connect to the database
function connect($host = "", $port = 3360, $socket = "", $user = "john", $password = "", $dbname = "hackathon")
{
    $conn = mysqli_connect($host, $user, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    return $conn;
}

//close the connection to the database
function closeConnection(mysqli $conn){
    $conn->close();
    echo '<br> connection gracefully closed';
}