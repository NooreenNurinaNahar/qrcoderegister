<?php
   include("dbconnect.php");
   session_start();
   $roles_id= $_POST['roles_id'];
   $user_email = $_POST['user_email'];
   $user_ic = $_POST['user_ic'];

   if ($roles_id == 2) {
         if ($user_email == "admin") {
            $_SESSION["user"] = $user_email;
               
            if($user_ic == "Asdfg@12345"){
               header("Location: dashboard2.php");
               exit();
            }
            else {
            echo '<script language="Javascript">alert("You have entered wrong password or username"); window.location.href = "index.php";</script>';
         }
         }
      }

   if ($roles_id == 2) {
         $sql = "SELECT * FROM tbl_user WHERE username = '$username' AND password = '$password' LIMIT 1";
         $result = mysqli_query($conn, $sql);
         $_SESSION["user"] = $username;

         if(mysqli_num_rows($result) == 1){
               
            header("Location: website.php");
            exit();
         }
         else {
            echo '<script language="Javascript">alert("You have entered wrong password or username"); window.location.href = "index.php";</script>';
         }
      }
   

?>