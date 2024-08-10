<?php
$servername="localhost";
$username="root";
$password="";
$dbname="tutorials";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn->connect_errno){
    echo "connection failed".$conn->connect_error;
}else{
}

?>