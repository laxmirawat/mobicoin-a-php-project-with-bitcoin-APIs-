
<?php
session_start();

if(isset($_SESSION['login_user_admin'])){
HEADER("LOCATION:admindashboard.php"); 
} 
	
include('db.php');
if(isset($_POST["Signin"]))
{  $myusername = mysqli_real_escape_string($con,$_POST["login_string"]);
	   $mypassword = mysqli_real_escape_string($con,$_POST['login_pass']); 
	   
	   
	   $sql = "SELECT id FROM admin WHERE `email` = '$myusername' && `password` = '$mypassword'";
	   echo $sql;
	   $result = mysqli_query($con,$sql);
	   $count = mysqli_num_rows($result);
	   // If result matched $myusername and $mypassword, table row must be 1 row
		  
	   if($count == 1) {
      $fetch_data=mysqli_fetch_assoc($result);
//	  session_register("myusername");


   $_SESSION['login_user_admin'] = $fetch_data['id'];
   if( $_SESSION['login_user_admin']!=null)
{
 $_SESSION['login_user_admin'] = $_POST["login_string"] ;
 header("location: admindashboard.php");
     echo "successful";
}
  }else {
 header("location: index.php");
   echo "unsuccessful";
  }
}
?>




<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
            <div class="col-lg-6 d-none d-lg-block bg-login-image" style="background-image: url('/PROJECTS/MobiCoin/new/img/logo3.png'); width: 100px; height: 500px;"></div>
              <!-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Admin Login</h1>
                  </div>

                  <form class="user" method= "post">

                    <div class="form-group" >

                      <input type="email" name= "login_string" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                    </div>
                    <div class="form-group">

                      <input type="password" name= "login_pass" class="form-control" id="password" placeholder="Password">
                      <input type="checkbox" onclick="myFunction()">Show Password

<script>
function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>  
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm" name="Signin">Login</button>
                    
                  </form>

                  <hr>
                  <div class="text-center">
                    <a class="small" href="forget.php">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="login.php">User Login</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
