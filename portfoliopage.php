<?php
include 'portfolioaction.php';

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration</title>
	
 

     

     
    <link rel="stylesheet" href="css/Teampage.css">
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
			<h1> Welcome page portfolio</h1>
			
      <div class="">
<form method="POST" action="portfoliopage.php" enctype="multipart/form-data">
  
    	<p>Select Image File to Upload:</p>
    <input type="file" name="file">
    <input type="submit" name="save" value="Upload">

  </form>






				
				</div>
				
			</div>
		</div>
	</div>



</body>
</html>