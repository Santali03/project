<?php

$host="localhost";
$user="root";
$pass="09061315523Trad";
$db="new_schema";
$conn=new mysqli($host,$user,$pass,$db);
if($conn->connect_error){
    echo "Failed to connect DB".$conn->connect_error;
}
?>