<?php


include 'indexaction.php'


//   // Create database connection
//   $db = mysqli_connect("localhost", "root", "", "portfolio");

//   // Initialize message variable
//   $msg = "";

//   // If upload button is clicked ...
//   if (isset($_POST['add'])) {
//   	// Get image name
//   	$service_image = $_FILES['service_image']['name'];
//   	// Get text
//       $service_titre = mysqli_real_escape_string($db, $_POST['service_titre']);
// 	  $service_text = mysqli_real_escape_string($db, $_POST['service_text']);
	 


//   	// image file directory
//   	$target = "images/".basename($service_image);

//   	$sql = "INSERT INTO service (service_image,service_titre,service_text) VALUES ('$service_image', '$service_titre','$service_text')";
//   	// execute query
//   	mysqli_query($db, $sql);

//   	if (move_uploaded_file($_FILES['service_image']['tmp_name'], $target)) {
//   		$msg = "Image uploaded successfully";
//   	}else{
//   		$msg = "Failed to upload image";
//   	}
//   }



//   $result = mysqli_query($db, "SELECT * FROM service");




// Initialize message variable


// $msg = "";




// // php code to Insert data into mysql database from input text
// if(isset($_POST['add']))
// {
//     $hostname = "localhost";
//     $username = "root";
//     $password = "";
//     $databaseName = "portfolio";
        
//     // get values form input image

//     $service_image = $_FILES['service_image']['name'];
//     $target = "images/".basename($service_image);



    
//     // get values form input text and number


//     $service_titre = $_POST['service_titre'];
//     $service_text = $_POST['service_text'];
    


    
//     // connect to mysql database using mysqli

//     $connect = mysqli_connect($hostname, $username, $password, $databaseName);
    
//     // mysql query to insert data

//     $query = "INSERT INTO `team`(`service_image`, `service_titre`, `service_text`) VALUES ('$service_image,'$service_titre',$service_text')";
    
//     // $result = mysqli_query($connect,$query);

//         $res=mysqli_query($connect,$query);


//         if($res)
//         {
//             echo 'Data Inserted';
//         }
        
//         else{
//             echo 'Data Not Inserted';
//         }



//     $target = "images/".basename($service_image);



//     if (move_uploaded_file($_FILES['service_image']['tmp_name'], $target)) {
//         $msg = "Image uploaded successfully";
//     }else{
//         $msg = "Failed to upload image";
//     }
    
// }

// $resul = mysqli_query($connect, "SELECT * FROM  service");





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
			<h1> Welcome page   accuil</h1>
			
      <div class="">
				
	  <form method="POST" action="indexpage.php" enctype="multipart/form-data">
			<div>
			<input type="file" name="service_image">
			</div>
			<div>
			<input type="text" name="service_titre" placeholder="Your last title." >
			</div>
			<div>
			<input type="text" name=" service_text "placeholder="Your last description.">
			</div>
			<div>
				<button type="submit" name=" add "   >upload</button>
			</div>

 		 </form>
				</div>
				
			</div>
		</div>
	</div>




</body>
</html>