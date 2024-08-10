<?php

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
    

    <center>
    <h1>FACULTY OF APLLIED SCIENCE AND TECHNOLOGY</h1><hr>
<div class="link">
    <a href="accountfee.php">FEES_ACCOUNTS</a>
    <a href="view.php">PERSONAL_DETAILS</a>
    <a href="check.php" class="active">CHECK_RESULT</a>
    <a href="fees.php">MAKE_PAYMENT</a>
     <a href="index.php" style="float:right;">LOGOUT</a>
</div><br><br><br>
<div class="lin2">
<a href="accountfee.php">CHECK_ACCOUNTS</a>
    <a href="view.php">PERSONAL_DETAILS</a>
    <a href="check.php">CHECK_RESULT</a>
    <a href="fees.php">MAKE_PAYMENT</a>
   
    
</div>
</center>








<style>
    .lin2{
        display: grid;
        grid-template-columns: repeat(2,4fr);
             gap:40px;
             background-color: blueviolet;
             padding: 50px;
             box-shadow: 10px 10px 10px;
             border-top-right-radius: 20px;
             border-top-left-radius: 20px;
    }
    .lin2 a{
        color:black;
        background-color: white;
        padding: 40px;
        width: 200px;
        border-top-right-radius: 20PX;
        border-top-left-radius: 20px;

        
    
    }
    a{
        color: white;
        text-decoration: none;
    }
.link{
    background-color: blueviolet;
    padding: 20px;
    box-shadow: 10px 10px 10px;
    word-spacing: 20px;
}
a:hover{
    background-color: grey;
    padding: 13px;
}
.active{
    background-color: green;
    padding: 20px;
    color: white;
}
</style>
</body>
</html>