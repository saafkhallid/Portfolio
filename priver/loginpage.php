
<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
	// header("location: login.php");
		// header("location: Adminstration.php");
				header("location: loginpage.php");
    exit;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">

 

     

     
    <link rel="stylesheet" href="../css/Teampage.css">
</head>
<body>
    
<header>
		<div class="logo">team<span>page</span></div>
	</header>
	<div class="nav-btn">Menu</div>
	<div class="container">
		
		<div class="sidebar">
			<nav>
				<a href="#" class="">Administration<span>page</span></a>
				<ul>
					<li class="active" ><a href="#">Dashboard</a></li>
					<li><a href="portfoliopage.php">Portfolio</a></li>
					<li><a href=" contactpage.php ">contact</a></li>
					<li><a href=" indexpage.php">accuil</a></li>
					<li class="" ><a href="loginpage.php ">login</a></li>
				</ul>
			</nav>
		</div>

		<div class="main-content">
			<h1> Welcome page login</h1>
			
      <div class="">
				<div class="">
				<div class="page-header">
				<h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
			</div>
			<p>
				<a href="C:\wamp64\www\Portfolio\public\reset-password.php" class="btn btn-warning">Reset Your Password</a>
				<a href="C:\wamp64\www\Portfolio\priver\logout.php" class="btn btn-danger">Sign Out of Your Account</a>
			</p>
				
				</div>
				
			</div>
		</div>
	</div>




</body>
</html>