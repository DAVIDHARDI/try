<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
   <br><br> <br><br><br><form action="inc_login.php" method="post">
        <H1 style="color:white;">LOGIN FORM</H1><hr>
        <input type="tel" name="sudent_id" id="" placeholder="STUDENT ID"  required><br><br>
        <input type="password" name="password" placeholder="PASSWORD" required ><br><br>
        <input type="submit" name="submit" id="" value="LOGIN" class="ok">
        <a href="index.php" style="color:white;">Register</a>
    </form>
    </center>
    <style>
        form{
            background-color: blueviolet;
            width: 300px;
            padding: 40px;
            box-shadow: 10px 10px 10px;
            border-top-right-radius: 20px;
        }
        input{
            width: 250px;
            padding: 14px;
        }
        .ok{
            width: 100px;
        }
        .ok:hover{
            background-color: green;
        }
    </style>
</body>
</html>