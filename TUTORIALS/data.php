<?php
include ("connection.php");
$query="SELECT *FROM users";
$result=$conn->query($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view</title>
    <link rel="stylesheet" href="table.css">
</head>
<body>
    <h2>Students Accounts Data</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>USERNAME</th>
            <th>EMAIL</th>
            <th>STUDENT ID</th>
            <th>PASSWORD</th>
            <th>ACTION</th>
        </tr>
        <tbody>
            <?php
              if($result->num_rows>0){
                while($row=$result->fetch_assoc()){
            
            ?>
            <tr>
                <td><?php echo $row['id'];?> </td>
                <td><?php echo $row['username'];?> </td>
                <td><?php echo $row['email'];?> </td>
                <td><?php echo $row['sudent_id'];?> </td>
                <td><?php echo $row['password'];?> </td>
                <td><a href="update.php?id=<?php echo $row['id'];?>">
                Edit</a>&nbsp;<a href="delete.php?id=<?php echo $row['id'];?> ">Delete</a>
            </td>
            </tr>
            <?php }
         }
         ?>

        </tbody>
    </table>
    <style>
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
tr:hover{
	background: gray;
}
    </style>
</body>
</html>