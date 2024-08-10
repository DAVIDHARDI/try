<?php
include("connection.php");
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $student_id=$_POST['student_id'];
    $level=$_POST['level'];
    $amount=$_POST['amount'];
    $contact=$_POST['contact'];

    

        $query ="INSERT INTO fees (name,student_id,level,amount,contact)
        VALUES('$name','$student_id', '$level','$amount','$contact')";
        $result=mysqli_query($conn,$query);
        if($result)
        
        {
            echo "<script>alert('FEES PAID SUCCESSFULLY')
            window.location='accountfee.php';
            </script>";
        }else{
            echo "FEES NOT PAID TRY AGAIN";
        }
       
    }


?>