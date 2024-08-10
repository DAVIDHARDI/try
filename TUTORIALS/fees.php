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
    <Center>
    <br><br><br><br><br><b><b><br>
    <form action="inc_fee.php" method="post">
        <h3 style="color:white">PAYMENT FORM</h3><hr>
    <input type="text" name="name" id="" placeholder="DAVID HARDI" ><br><br>
    <input type="tel" name="student_id" id="" placeholder="06220345" ><br><br>
    <input type="text" name="level" id="" placeholder=" LEVEL 200" ><br><br>
    <input type="text" name="amount" id="" placeholder="200GHC" ><br><br>
    <input type="tel" name="contact" id="" placeholder="024045540" ><br><br>
    <input type="submit" name="submit" id="" value="Pay" class="pay" >
    </form>
</Center>



<style>
    .pay{
        width: 100px;
        color: blue;
        border-bottom-left-radius: 20px;
        border-top-right-radius: 20px;
    }
    form{
        background-color: blueviolet;
        width: 300px;
        padding: 30px;
        border-top-right-radius: 40px;
    }
    input{
        padding: 15px;
        width: 200px;
        
    }
</style>
</body>
</html>