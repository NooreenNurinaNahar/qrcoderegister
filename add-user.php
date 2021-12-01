<?php

include "dbconnect.php";


$user_name=$_POST["user_name"];
$user_email=$_POST["user_email"];
$user_ic=$_POST["user_ic"];
$user_nophone=$_POST["user_nophone"];
$user_time=$_POST["user_time"];
$user_date=$_POST["user_date"];
$roles_id=$_POST["roles_id"];

$sql="INSERT INTO tbl_user(user_name,user_email,user_ic,user_nophone,user_time,user_date,roles_id) VALUES ('$user_name','$user_email','$user_ic','$user_nophone','$user_time','$user_date','$roles_id')";

$result=mysqli_query($conn, $sql);

if($result){

            ?>

            <script>
                alert("Terima kasih kerana mendaftar!");
                window.location.replace('register.php');
            </script>
            <?php
        }else{
            ?>
            <script>
                alert("Insert Fail");
                window.location.replace('register.php');
            </script>
            <?php
        }?>