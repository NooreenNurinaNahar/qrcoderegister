
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Login</title>
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
  background-color: blue;
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
    <form method="post" action="user-login.php">
    <input type="hidden" name="roles_id" value="2" placeholder="roles_id"  />

    <div class="container">
    <label for="user_email"><b>E-MEL</b></label>
    <input name="user_email" type="text" placeholder="E-MEL" >

    <label for="user_ic"><b>KATA LALUAN (NO.IC)</b></label>
    <input name="user_ic" type="password" placeholder="KATA LALUAN" >
    <br><br>
    <div class="row button-group">
        <div class="col-lg-2 col-md-4 align-self-end ">
            <button type="submit" name="login" value="login" class="btn btn-rounded btn-block btn-outline-success" >LOG MASUK</button>
            &nbsp; &nbsp;
        </div> 
     
   
    </div>
  </div>
  </form>



    <script src="../assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <script src="../assets/node_modules/popper/popper.min.js"></script>
    <script src="../assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="dist/js/perfect-scrollbar.jquery.min.js"></script>
    <script src="dist/js/waves.js"></script>
    <script src="dist/js/sidebarmenu.js"></script>
    <script src="dist/js/custom.min.js"></script>
    <script src="../assets/node_modules/moment/moment.js"></script>
    <script src="../assets/node_modules/wizard/jquery.steps.min.js"></script>
    <script src="../assets/node_modules/wizard/jquery.validate.min.js"></script>
    <script src="../assets/node_modules/sweetalert2/dist/sweetalert2.min.js"></script>
    <script src="dist/js/pages/validation.js"></script>
</body>
</html>
