<?php

// require 'config.php';



// Create database connection
// include 'config.php'

// $db = mysqli_connect("localhost", "root", "", "portfolio");

// // include 'config.php'




// // Initialize message variable

// $msg = "";




// // If upload button is clicked ...


// if (isset($_POST[' add'])) {





//             $service_image = $_FILES['service_image']['name'];

//             $targ = "images/".basename($service_image);


//             $service_titre = $_POST['service_titre'];

//             $service_text = $_POST[' service_text'];



           

//     // $facebook_path  = mysqli_real_escape_string($db, $_POST['facebook_path']);

//     // $linkdin_path = mysqli_real_escape_string($db, $_POST['linkdin_path']);

//     // $twitter_path = mysqli_real_escape_string($db, $_POST['twitter_path']);


    




   

//      $saaf="INSERT INTO service(service_image,service_titre,service_text)VALUES('$service_image',$service_titre,'$service_text') ";


//     mysqli_query($db, $saaf);

//     if (move_uploaded_file($_FILES['service_image']['tmp_name'], $targ)) {
//         $msg = "Image uploaded successfully";
//     }else{
//         $msg = "Failed to upload image";
//     }
// }






// $resul = mysqli_query($db, "SELECT * FROM service");


// $Message = "";




// php code to Insert data into mysql database from input text




// if(isset($_POST['add']))
// {
//     $hostname = "localhost";
//     $username = "root";
//     $password = "";
//     $databaseName = "portfolio";
        
//     // get values form input image

//     $service_image = $_FILES['service_image']['name'];
//     $targ = "images/".basename($service_image);





    
//     // get values form input text and number


    
    
//                 $service_titre = $_POST['service_titre'];
    
//                 $service_text = $_POST[' service_text'];




    
//     // connect to mysql database using mysqli

//     $connect = mysqli_connect($hostname, $username, $password, $databaseName);
    
//     // mysql query to insert data

//     $query = "INSERT INTO service(service_image,service_titre,service_text) VALUES ('$service_image','$service_titre','$service_text')";
    
//     $result = mysqli_query($connect,$query);

//         // $res=mysqli_query($connect,$query);


//         if($result)

//         {
//             echo 'Data Inserted';
//         }
        
//         else{
//             echo 'Data Not Inserted';
//         }





			session_start();
				$db = mysqli_connect('localhost', 'root', '', 'portfolio');

				// initialize variables
				$service_text="";
				$service_titre="";
				$service_text="";
				$id = 0;
				$update = false;

				if (isset($_POST['save'])) {
					// $name = $_POST['name'];
					// $address = $_POST['address'];
						$service_image = $_FILES['service_image']['name'];
						// Get text
						
						$service_titre = $_POST['service_titre'];


						$service_text = $_POST['service_text'];
						$target = "images/".basename($service_image);
						mysqli_query($db, "INSERT INTO services (service_image, service_titre,service_text) VALUES ('$service_image', '$service_titre','$service_text')"); 
							$_SESSION['message'] = "Address saved"; 
							header('location:indexpage.php');
							

							if (move_uploaded_file($_FILES['service_image']['tmp_name'], $target)) {
								$msg = "Image uploaded successfully";
							}else{
								$msg = "Failed to upload image";
							}
				}



				 $results = mysqli_query($db, "SELECT * FROM services");

				//   print_r($results);
				//   print_r($results->fetch_assoc());





				
  if (isset($_GET['dele'])) {
    $id = $_GET['dele'];
    mysqli_query($db, "DELETE FROM services WHERE id=$id");
    $_SESSION['message'] = "Address deleted!"; 
    header('location:indexpage.php');
  }















    



    


?>
    