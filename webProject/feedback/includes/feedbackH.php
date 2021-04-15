<?php
ob_start();
include_once '../../common/dbh.php';

$email = "";
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];

 if (isset($_POST['submit'])) {
     $email = $_POST['email'];

 /*	$sql = "SELECT * FROM feedback WHERE email='$email'";*/
     $res = mysqli_query($conn, "SELECT * FROM feedback WHERE email='$email'");

   if(mysqli_num_rows($res) > 0){
       $email_error = "... email already taken";
       header("Location: ../error.php");
     }else{
        $sql = "insert into feedback(fname,lname, email, textf)
               values ('$fname','$lname','$email', '$feedback');";
          mysqli_query($conn, $sql);
          header("Location: ../thankyou.php");
          exit();
     }
 }
ob_end_flush();
?>
