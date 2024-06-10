<?php

$servername="localhost";
$dbname="test1";
$username="root";
$password="";

$conn= new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    exit("Connection Failed");
}
else{
    echo "Connection Successful\n";
}


?>