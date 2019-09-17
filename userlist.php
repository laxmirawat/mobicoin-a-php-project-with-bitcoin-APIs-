<?php
session_start();
include('db.php');
if(!isset($_SESSION['login_user'])){
HEADER("LOCATION:login.php"); 
} 	 

   $user=  $_SESSION['login_user'];
     
     
 
// 	   //$count = mysqli_num_rows($result);
	
	   
// 		  // if($count == 1) {
// 	    //    $fetch_data=mysqli_fetch_assoc($result);


// 		  $_SESSION['login_user'] = $fetch_data['id'];
// 		  if( $_SESSION['login_user']!=null)
// 	{
// 	//	header("location: transaction1.php");
// 				echo "successful";
	
//  } else {
// 		//header("location: second.php");
// 		  echo "unsuccessful";
// 	   }
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">


<style>
@media  (max-width:1680px){
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;

}

.topnav {
  overflow: hidden;
  background-color:#333;
  position:initial;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 39px;
  width:200px;
  height: 85px;
  
}
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
body {font-family: "Lato", sans-serif;}

.sidebar {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 20;
  left: 0;
  background-color: #333;
  overflow-x: hidden;
  padding-top: 16px;
}

.sidebar a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: white;
  display: block;

}

.sidebar a:hover {
  color:black;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  padding: 0px 10px;
}


.button {
  border-radius: 10px;
  background-color: #4CAF50;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 20px;
  padding: 10px;
  width: 160px;
  transition: all 0.5s;
  cursor: pointer;
  margin-left: 1230px;
  margin-top:20px;
  position:absolute;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
.btn-group
{
    margin-left: 600px;
    margin-top: 200px;
    padding: 10px;
    color: green;
}
.btn-group .btn
{
    margin: 20px;
    border-radius: 10px;
    font-size: 25px;
    text-align: center;
    color: white;
    background-color: #4CAF50;
    padding: 10px;
    width:200px;

}
.img{
    width:250px;
    height:80px;
    margin-left:500px;
}
.qwe{
    width:60px;
    height:60px;
    margin-left: 130px;
    margin-top: 20px;
}

* {
  box-sizing: border-box;
}

/* Create four equal columns that floats next to each other */
.column {
  float: left;
  width: 40%;
  padding: 10px;
  margin-left: 260px;
  margin-top: 0px;
  height: 350px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.text{
    margin-left: 240px;
    margin-top: 40px;
}
.tex2{
    margin-left: 180px;
    margin-top: 5px;
}
.text1{
    margin-left: 240px;
    margin-top: 5px;
}
.text2{
    margin-left: 200px;
    margin-top: 5px;
}
.h2{
  margin-left: 250px;
  margin-top: 0px;
    font-size: 25px;
}
.h3{
  margin-top: 10px;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 90%;
  height: 20px;
  margin-top: 10px;
  margin-left: 20px; 
}

td, th {
  border: 1px solid lightcyan;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: grey;
}
.container {
  position: relative;
  width: 100%;
  max-width: 70px;
  margin-left: 260px;
}

.image {
  display: block;
  width: 100%;
  height: auto;
}
}
@media only screen and (max-width:1440px){
  body{
    font-size: 11px;
  }
  .button {
  border-radius: 10px;
  background-color: #4CAF50;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 20px;
  padding: 10px;
  width: 160px;
  transition: all 0.5s;
  cursor: pointer;
  margin-left: 850px;
  margin-top:20px;
  position:absolute;
}
.img{
    width:250px;
    height:80px;
    margin-left:400px;
}
.qwe{
    width:60px;
    height:60px;
    margin-left: 350px;
    margin-top: 30px;
}

/* Create four equal columns that floats next to each other */
.column {
  float: left;
  width: 80%;
  padding: 10px;
  margin-left: 260px;
  margin-top: 0px;
  height: 700px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.text{
    margin-left: 240px;
    margin-top: 40px;
}
.tex2{
    margin-left: 180px;
    margin-top: 5px;
}
.text1{
    margin-left: 240px;
    margin-top: 5px;
}
.text2{
    margin-left: 200px;
    margin-top: 5px;
}
.h2{
  margin-left: 250px;
  margin-top: 10px;
    font-size: 25px;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 90%;
  height: 20px;
  margin-top: 10px;
  margin-left: 20px; 
}

td, th {
  border: 1px solid lightcyan;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: grey;
}
.container {
  position: relative;
  width: 100%;
  max-width: 70px;
  margin-left: 260px;
}

.image {
  display: block;
  width: 100%;
  height: auto;
}
.h3{
  margin-top: 0px;
}
.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}
.sticky + .sidebar + .content {
  margin-top: 80px;
}
}
@media only screen and (max-width:1280px){
 
.column {
    float: left;
    width: 75%;
    padding: 10px;
    margin-left: 260px;
    margin-top: 0px;
    height: 600px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}
.sticky  + .content {
  margin-top: 80px;
}

}
@media (max-width:1024px){
  .button {
    border-radius: 10px;
    background-color: #4CAF50;
    border: none;
    color: #FFFFFF;
    text-align: center;
    font-size: 20px;
    padding: 10px;
    width: 120px;
    transition: all 0.5s;
    cursor: pointer;
    margin-left: 690px;
    margin-top: 20px;
    position: absolute;
}
.img {
    width: 180px;
    height: 80px;
    margin-left: 290px;
}
.sidebar {
    height: 100%;
    width: 170px;
    position: fixed;
    z-index: 1;
    top: 20;
    left: 0;
    background-color: #333;
    overflow-x: hidden;
    padding-top: 16px;
}
.column {
    float: left;
    width: 65%;
    padding: 10px;
    margin-left: 260px;
    margin-top: 0px;
    height: 700px;
}
.topnav a {
    float: left;
    color: #f2f2f2;
    text-align: center;
    padding: 25px 16px;
    text-decoration: none;
    font-size: 30px;
    width: 170px;
    height: 85px;
}
.qwe {
    width: 60px;
    height: 60px;
    margin-left: 70px;
    margin-top: 10px;
}
.text{
    margin-left: 130px;
    margin-top: 40px;
}
.text2{
    margin-left: 100px;
    margin-top: 5px;
    font-size:10px;
}
.tex2{
    margin-left: 60px;
    
}
.text1{
    margin-left: 140px;
    margin-top: 4px;
  
}
.container{
  margin-left:150px;
}
.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}
.sticky + .sidebar + .content {
  margin-top: 80px;
}
}
@media (max-width:768px){
  .button {
    border-radius: 10px;
    background-color: #4CAF50;
    border: none;
    color: #FFFFFF;
    text-align: center;
    font-size: 20px;
    padding: 10px;
    width: 100px;
    transition: all 0.5s;
    cursor: pointer;
    margin-left: 459px;
    margin-top: 20px;
    position: absolute;
}
.img {
    width: 150px;
    height: 80px;
    margin-left: 190px;
}
.column {
    float: left;
    width: 60%;
    padding: 10px;
    margin-left: 250px;
    margin-top: 0px;
    height: 600px;
}

.qwe {
    width: 60px;
    height: 60px;
    margin-left: 50px;
    margin-top: 10px;
}

.text{
    margin-left: 90px;
    margin-top: 20px;
}
.text2{
    margin-left: 30px;
    margin-top: 5px;
    font-size:8px;
}
.tex2{
    margin-left: 10px;
    font-size: 8px;
    
}
.text1{
    margin-left: 100px;
    margin-top: 4px;
  
}
.container{
  margin-left:100px;
}
.h3{
  margin-left: 1px;
  margin-top: 0px;
    font-size: 5px;
}
.text4{
  margin-left: 70px;

}
.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}
.sticky + .sidebar + .content {
  margin-top: 80px;
}
}
</style>
</head>
<body>


        <div class="topnav" id="navbar">
                <a class="active" href="#home">Mobiloitte</a>
                <form method="get" action="index.php">
                    
                
                <button type="submit" class="button"><span>logout </span></button>
            </form>
                <img src ="mobiloitte.png" class="img">
              </div>
        <div class="sidebar">
              
        <a href="admin.php"><i class="fa fa-user" aria-hidden="true"></i>
                </i>My Profile</a>
                <a href="userlist.php"><i class="fa fa-users" aria-hidden="true"></i>
                </i>User list</a>
                <a href="Recentblocks.php"><i class="fa fa-th-large" aria-hidden="true"></i>
                
                </i>Recent Blocks</a>
                <a href="Alltransaction.php"><i class="fa fa-exchange" aria-hidden="true"></i>
                </i> All Transactions</a>
              </div>
              <div class="content">
              <div class="h2">
              <h2>Dashboard</h2>
            </div>
              <div class="row">
                <div class="column" style="background-color:#aaa;">
                <h2>User List</h2>
                <div class="table">
                  <table>
                    <tr> <td>
                    <th>S.no</th>
                      <th>Email</th>
                      <th>Address</th>
                      
                    </td>
                    </tr>
<?php

 $sql = "SELECT * FROM `mydata`";
//echo $sql;
$query = mysqli_query($con,$sql);

$userinfo = array();
$a = 1;

while ($row_user = mysqli_fetch_assoc($query))
{
    //$userinfo[] = $row_user;

?>

<tr> <td>
<th><?php echo $a; ?></th>

                      <th><?php echo $row_user['email']; ?></th>
                      <th><?php echo $row_user['address']; ?></th>
                     
                    </td>
                    </tr>

<?php $a++; } ?>

                
                  
                  </table>
                </div>
                </div>
                
                  <script>
                    window.onscroll = function() {myFunction()};
                    
                    var navbar = document.getElementById("navbar");
                    var sticky = navbar.offsetTop;
                    
                    function myFunction() {
                      if (window.pageYOffset >= sticky) {
                        navbar.classList.add("sticky")
                      } else {
                        navbar.classList.remove("sticky");
                      }
                    }
                    </script>
                           
</body>
</html>
