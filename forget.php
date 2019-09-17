
 <?php 
session_start();
$errors = [];
include('db.php');
if(isset($_SESSION['login_user'])){
HEADER("LOCATION:login.php"); 
} 
if(isset($_POST["Signin"])) {
  $email = mysqli_real_escape_string($con, $_POST["login_string"]);
  
  // ensure that the user exists on our system
  $query = "SELECT email FROM mydata WHERE email='$email'";
  $results = mysqli_query($con, $query);

  if (empty($email)) {
    array_push($errors, "Your email is required");
  }else if(mysqli_num_rows($results) <= 0) {
    array_push($errors, "Sorry, no user exists on our system with that email");
  }
  // generate a unique random token of length 100
  $token = bin2hex(random_bytes(50));

  if (count($errors) == 0) {
    // store token in the password-reset database table against the user's email
    $sql = "INSERT INTO resetpass(email, token) VALUES ('$email', '$token')";
    $results = mysqli_query($con, $sql);


 
include 'class/class.smtp.php';
include 'class/class.phpmailer.php';
$link="<a href='http://ec2-52-221-54-107.ap-southeast-1.compute.amazonaws.com/PROJECTS/MobiCoin/new/resetpass.php'> Click to reset password </a>";
// $link="<a href='www.samplewebsite.com/reset.php?key=".$email."&reset=".$pass."'>Click To Reset password</a>";

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug = 0;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = "smtp.gmail.com";
$mail->Port = 465;
$mail->IsHTML(true); 

$mail->Username = "mobicoincryptocurrency@gmail.com";
$mail->Password = "Mobiloitte@123";
$mail->SetFrom("mobicoincryptocurrency@gmail.com");
// $mail->Mail = $_POST["login_username"];
// // $mail->Domain = $_POST["login_domain"];
// // $mail->Pass = $_POST["login_pass"];

$mail->AddAddress($_POST["login_string"]);
$mail->Body = ' Hi there, click on this to reset your password on our site '.$link.'';


if(!$mail->Send())
    echo "Message was not sent".$mail->ErrorInfo;
    else{
    echo "Message has been sent";
    }
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
                    <h1 class="h4 text-gray-900 mb-4">Forget Password?</h1>
                  </div>

                  <form class="user" method= "post">

                    <div class="form-group" >

                      <input type="email" name= "login_string" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                    </div>
                    <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm" name="Signin">Submit</button>
                    
                  </form>

                  
    
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