<?php
include("connection.php");
$query="SELECT *FROM course";
$result=$conn->query($query);

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
    <a href="" class="active">CHECK_RESULT</a>
    <a href="fees.php">MAKE_PAYMENT</a>
     <a href="index.php" style="float:right;">LOGOUT</a>
</div><br><br><br>
  <center>
    <h1>
    PROVISIONAL EXAMINATION RESULT
    </h1><hr style="width:600px; color:blue;">
    <a href="check.php/pdf"download style="color:white; background-color:gray; float:right; padding:14px; border-radius: 5px;">DOWNLOAD RESULT</a>
    <br><br><div class="let">
        <h5>DAVID HARDI</h5>
    <h4>INDEX NO:0622035</h4>
    </div>
    
  </center>
  <table>
    <tr>
        <th>ID</th>
        <th>CODE</th>
        <th>COURSE TITLE </th>
        <th>CREDIT</th>
        <th>GRADE</th>
    </tr>
    <tbody>

<?php
              if($result->num_rows>0){
                while($row=$result->fetch_assoc()){
            
            ?>
            <tr>
                <td><?php echo $row['id'];?> </td>
                <td><?php echo $row['code'];?> </td>
                <td><?php echo $row['course'];?> </td>
                <td><?php echo $row['credit'];?> </td>
                <td><?php echo $row['grade'];?> </td>
            </td>
            </tr>
            <?php }
         }
         ?>
         </tbody>
  </table>
  


  <style>
    .let{
        display: grid;
        grid-template-columns: repeat(2,4fr);
        gap: 680px;
    }
        table{
	
	margin-top: 20px;
	width: 100%;
	border-collapse: collapse;
	padding: 10px;

}
th{
    background-color: green;
    color: white;
}
table, th,td{
	border: thin solid #c4c4c7;
	padding: 10px;
    

}
thead{
	font-size: 20px;
	font-weight: 600;
    
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
  </style>
</body>
</html>
