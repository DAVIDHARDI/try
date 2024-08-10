<?php
session_start();
include("connection.php");
if(isset($_POST['submit'])){
    $sudent_id=$_POST['sudent_id'];
    $password=$_POST['password'];
    $sql="select*from users where sudent_id='$sudent_id' and password='$password'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        if($row=mysqli_fetch_assoc($result)){
            if($sudent_id==$row['sudent_id']){
                if($password==$row['password']){
                    $_SESSION['ID']=$row['sudent_id'];
             echo "<script>alert('LOGIN SUCESSFULLY')
            window.location='home.php';
            </script>";
                }else{
                    echo "<script>alert('WRONG USERNAME OR PASSWORD')
                    window.location='login.php';
                    </script>";
                }
            }
        }
    }

}
?>