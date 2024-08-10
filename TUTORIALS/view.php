<?php
session_start();
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
if(isset($_SESSION['ID'])){
  $user_id=$_SESSION['ID'];
  $sql="SELECT*FROM users WHERE sudent_id='$user_id'";
  $result=mysqli_query($conn,$sql);
  $row=mysqli_fetch_assoc($result);
  

  
  
  
}

?>
 
    <center=>
        <h1>FACULTY OF APPLIED SCIENCE AND TECHNOLGY</h1><hr>
        <h5>REGISTRATION FORM</h5>
  
   <label for="">USERNAME:<?=$row['username']?></label><br><br>
   <label for="">EMAIL:<?=$row['email']?></label> <br><br>
   <label for="">STUDENT ID:<?=$row['sudent_id']?> </label><br><br>
   <label for="">PASSWORD:<?=$row['password']?></label><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
 </center>
   <a href="view.php/pdf" download style="text-decoration:none; background-color:green; color:white; padding:15px; border-radius:10px;">DOWNLOAD</a>


 
</body>
</html>