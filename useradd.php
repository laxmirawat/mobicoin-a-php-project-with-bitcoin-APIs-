<?php 
include('db.php');
if(isset($_SESSION['login_user_admin'])){
  HEADER("LOCATION:login.php"); 
  }
if(isset($_POST["Signin"]))
{ 
  //email nofitication
  include 'class/class.smtp.php';
  include 'class/class.phpmailer.php';
  $mail = new PHPMailer();
  $mail->IsSMTP();
  $mail->SMTPDebug = 0;
  $mail->SMTPAuth = true;
  $mail->SMTPSecure = 'ssl';
  $mail->Host = "smtp.gmail.com";
  $mail->Port = 465;
  $mail->IsHTML(true); 
  // $mail->Username = "nitininvertis@gmail.com";
  // $mail->Password = "gangwar0405";
  // $mail->SetFrom("nitininvertis@gmail.com");
  $mail->Username = "mobicoincryptocurrency@gmail.com";
$mail->Password = "Mobiloitte@123";
$mail->SetFrom("mobicoincryptocurrency@gmail.com");
  $mail->User = $_POST["login_username"];
  $mail->Domain = $_POST["login_domain"];
  $mail->Pass = $_POST["login_pass"];
  // $mail->Body = $_POST["frmMessage"];
  $mail->Body ='Your id is registered on MobiCoin. <br>
  Your Credential are  :- <br>
   Username : '.$_POST["login_string"].  ' <br>  Password : '.$mail->Pass.'
   <img src ="/PROJECTS/MobiCoin/new/img/1.jpg" width="30%" height="40%" >' ;
  
  if(!$mail->Send())
      echo "Message was not sent".$mail->ErrorInfo;
  else
      echo "Message has been sent";


  //////////////////////////////////////////////////////

  //data save on database
	
	$email = mysqli_real_escape_string($con,$_POST["login_string"]);
  $password = mysqli_real_escape_string($con,$_POST["login_pass"]); 
  $domain= mysqli_real_escape_string($con,$_POST["login_domain"]);
  $empid= mysqli_real_escape_string($con,$_POST["login_empid"]);
  $username= mysqli_real_escape_string($con,$_POST["login_username"]);
    $result = $bitcoind->request('getaccountaddress',$email);
$array_conversion=json_decode(json_encode($result),true);  
	   $check_email = mysqli_query($con,"SELECT id FROM mydata WHERE `email` = '$email'");
       if(mysqli_num_rows($check_email)<1){
	$sql="INSERT INTO `mydata`(`email`, `password`,`address`, `domain`, `empid`, `username`) VALUES ('$email','$password','".$array_conversion['result']."', '$domain', '$empid','$username')";
	//$sql="INSERT INTO `mydata`(`email`, `password`) VALUES ('$email','$password')";
	echo "$sql";
	$query=mysqli_query($con,$sql);

	if($query) {
	echo 'data inserted successfully';
	header("location: users.php");
	}else{
	echo "not inserted";
	header("location: useradd.php");
	}
    }else{
    echo "Email Exist";
	header("location: useradd.php");    
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

  <title>SB Admin 2 - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>


<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admindashboard.php">
        <div class="sidebar-brand-icon rotate-n-0">
          <!-- <i class="fas fa-laugh-wink"></i> -->
          <img src ="/PROJECTS/MobiCoin/new/img/1.jpg" class="img" width="100%" height="100%">
        </div>
        <!-- <div class="sidebar-brand-text mx-3">Admin <sup></sup></div> -->
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

     <!-- Nav Item - Dashboard -->
     <li class="nav-item active">
        <a class="nav-link" href="admindashboard.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

     

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
                <a class="nav-link" href="departments.php">
            <i class="fas fa-people-carry"></i>
          <span>Departments</span>
        </a>
        
      
      </li> 
       <!-- Divider -->
       <hr class="sidebar-divider my-0">
       <li class="nav-item">
                <a class="nav-link" href="users.php">
            <i class="fas fa-user-friends"></i>
            <span>Users</span>
          </a>
        </li>

       <!-- Divider -->
       <hr class="sidebar-divider">
      
      <li class="nav-item">
                <a class="nav-link" href="transactions.php">
            <i class="fas fa-wallet"></i>
           <span>Transaction List</span>
         </a>
       </li>



      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
            <script async src="https://cse.google.com/cse.js?cx=000888210889775888983:pqb3ch1ewhg"></script>

<div class="gcse-searchbox-only" data-resultsUrl="https://googlecustomsearch.appspot.com/elementv2/two-page_results_elements_v2.html?query=test"></div>
             
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter"></span>
              </a>
             

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="admindashboard.php">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="settings.php">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <!-- <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a> -->
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->


    <div class="container-fluid">

      <div class="card shadow mb-4">
      <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Add New User</h1>
                  </div>

                  <form class="user" method= "post">

                  <div class="form-group" align="center">
				<input type="text"  onkeypress="return /[a-z]/i.test(event.key)" class="form-control" name="login_username" placeholder="Username" minlength="3" maxlength="10" required> <br>    
        <select class="form-control" name="login_domain">
        <?php

$sql = "SELECT * FROM `departments`";
//echo $sql;
$query = mysqli_query($con,$sql);

$userinfo = array();


while ($row_user = mysqli_fetch_assoc($query))
{

?>
<option value="<?php echo $row_user['DomainName'];?>"> <?php echo $row_user['DomainName']; ?></option>
<?php }?>

  </select>
  <br> 
            	<!-- <input type="text"  onkeypress="return /[a-z]/i.test(event.key)" class="form-control" name="login_domain" placeholder="Domain Name" required="required"> <br> -->

            	<input type="number" class="form-control" name="login_empid" placeholder="EmployeeId" minlength="2" required> <br>
                <input type="email" name= "login_string" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter Email Address"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required> <br>
                <input type="password" name= "login_pass" class="form-control" id="password" placeholder="Password" minlength="8" required> <br>
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
<br> <br>
               
                <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm" name="Signin">Add</button>

                   
                  </form>

                
                
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

    


        </div>
      </div>


    </div>






  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
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

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
