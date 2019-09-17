 
 <?php 
session_start();
$errors = [];
include('db.php');
if(isset($_SESSION['login_user'])){
HEADER("LOCATION:login.php"); 
} 
// if(isset($_POST["Signin"])) {
// ENTER A NEW PASSWORD
if (isset($_POST['Signin'])) {
  $password = mysqli_real_escape_string($con, $_POST['login_pass']);
  $new_pass_c = mysqli_real_escape_string($con, $_POST['new_password']);

  // Grab to token that came from the email link
  $token = bin2hex(random_bytes(50));

  $token = $_SESSION['token'];
  if (empty($password) || empty($new_pass_c)) array_push($errors, "Password is required");
  if ($password !== $new_pass_c) array_push($errors, "Password do not match");
  if (count($errors) == 0) {
    // select email address of user from the password_reset table 
    $sql = "SELECT email FROM resetpass WHERE token='$token' LIMIT 1";
    $results = mysqli_query($con, $sql);
    $email = mysqli_fetch_assoc($results)['email'];

    if ($email) {
      $password = md5($password);
      $sql = "UPDATE mydata SET password='$password' WHERE email='$email'";
      $results = mysqli_query($con, $sql);
      header('location: index.php');
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Password Reset PHP</title>
	<link rel="stylesheet" href="main.css">
</head>
<body>
	<form class="login-form" action="resetpass.php" method="post">
		<h2 class="form-title">New password</h2>
		<!-- form validation messages -->
		<?php include('messages.php'); ?>
		<div class="form-group">
			<label>New password</label>
			<input type="password" name="login_pass">
		</div>
		<div class="form-group">
			<label>Confirm new password</label>
			<input type="password" name="new_password">
		</div>
		<div class="form-group">
			<button type="submit" name="Signin" class="login-btn">Submit</button>
		</div>
	</form>
</body>
</html>