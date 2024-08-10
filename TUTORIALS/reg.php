<?php
include("connection.php");
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $sudent_id=$_POST['sudent_id'];
    $password=$_POST['password'];
    

        $query ="INSERT INTO users (username,email,sudent_id,password)
        VALUES('$username','$email','$sudent_id', '$password')";
        $result=mysqli_query($conn,$query);
        if($result)
        {
            echo "<script>alert('DATA SUMTED')
            window.location='login.php';
            </script>";
        }
       
    }


?>