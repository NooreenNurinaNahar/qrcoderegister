<!DOCTYPE html>
<html>
<?php

include "dbconnect.php";
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>User Form</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link href="../assets/node_modules/morrisjs/morris.css" rel="stylesheet">
    <link href="../assets/node_modules/toast-master/css/jquery.toast.css" rel="stylesheet">
    <link href="../assets/node_modules/morrisjs/morris.css" rel="stylesheet">
    <link href="dist/css/style.min.css" rel="stylesheet">
    <link href="dist/css/pages/dashboard1.css" rel="stylesheet">
    <script src="./vendor/jquery/jquery-3.2.1.min.js" type="text/javascript"></script>
    
<style type="text/css">

    /* Bordered form */
form {
  border: 3px solid #f1f1f1;
}

/* Full-width inputs */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

/* Add a hover effect for buttons */
button:hover {
  opacity: 0.8;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the avatar image inside this container */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

/* Avatar image */
img.avatar {
  width: 40%;
  border-radius: 50%;
}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* The "Forgot password" text */
span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }
  .cancelbtn {
    width: 100%;
  }
}
</style>
 <title>MADA</title>
</head>
<body>
    <br><br>
    <form action="add-user.php" method="post" role="form">
    <input type="hidden" value="1" name="roles_id" placeholder="roles_id"  />
    <input type="hidden" id="datePicker" name="user_date" value="CurrentDate"/> 
    <input type="hidden" id="user_time" name="user_time" value="CurrentTime"/>

  

  <div class="container">
    <label for="user_name"><b>NAMA</b></label>
    <input name="user_name" type="text" placeholder="NAMA" style=" text-transform:uppercase;" required>

    <label for="user_email"><b>E-MAIL</b></label>
    <input name="user_email" type="text" placeholder="E-MAIL"  required>

    <label for="user_ic"><b>KAD PENGENALAN</b></label>
    <input name="user_ic" type="text" placeholder="KAD PENEGENALAN"  required>

    <label for="user_nophone"><b>NO TELEFON</b></label>
    <input name="user_nophone" type="text" placeholder="NO TELEFON"  required>

    <br><br>
    <div class="row button-group">
        <div class="col-lg-2 col-md-4 align-self-end ml-auto">
            <button type="submit" class="btn btn-rounded btn-block btn-outline-info" >DAFTAR</button>
            &nbsp; &nbsp;
        </div> 
    </div>
  </div>
  </form>

  <script type="text/javascript">
    var d = new Date();

    // Set the value of the "date" field
    document.getElementById("user_time").value = d.toDateString();

    // Set the value of the "time" field
    var hours = d.getHours();
    var mins = d.getMinutes();
    var seconds = d.getSeconds();
    document.getElementById("user_time").value = hours + ":" + mins + ":" + seconds;
</script>
<script type="text/javascript">

$(document).ready( function() {
    var now = new Date();
    var month = (now.getMonth() + 1);               
    var day = now.getDate();
    if (month < 10) 
        month = "0" + month;
    if (day < 10) 
        day = "0" + day;
    var today = now.getFullYear() + '-' + month + '-' + day;
    $('#datePicker').val(today);
});
</script>
</body>
</html>
