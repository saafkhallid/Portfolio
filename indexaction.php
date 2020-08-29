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



//     $target = "images/".basename($service_image);



//     if (move_uploaded_file($_FILES['service_image']['tmp_name'], $target)) {
//         $Message = "Image uploaded successfully";
        
//     }else{
//         $Message = "Failed to upload image";
//     }
    
// }

// $result = mysqli_query($connect, "SELECT * FROM service");


// include 'dbConfig.php';


// $update = false;

//     $id=" ";
//     $service_titre=" ";
//     $service_text=" ";
//     $service_image=" ";
    
    
//     if(isset($_POST['add'])){                    
    
//         //test values on input
//         $service_titre =valid_data ($_POST['service_titre']);
//         $service_text= valid_data($_POST['service_text']);
//         $service_image= $_FILES['service_image']['name'];
//         $upload="images/".$service_image;
    
//          //insert values in  db
//         $sth = $db->prepare("
//         INSERT INTO service(service_image, service_titre,service_text)
//         VALUES(:service_image,:service_titre,:service_text)");
//         $sth->bindParam(':service_image',$upload);
//         $sth->bindParam(':service_titre',$service_titre);
//         $sth->bindParam(':service_text',$service_text);
//         $sth->execute();
//         move_uploaded_file($_FILES['service_image']['tmp_name'],$upload);
//     }






    

						// // Include the database configuration file
						// include 'dbConfig.php';
						// $statusMsg = '';

						// // File upload path
						// $targetDir = "images/";
						// $fileName = basename($_FILES["service_image"]["name"]);
						// $targetFilePath = $targetDir . $fileName;
						// $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

						// if(isset($_POST["add"]) && !empty($_FILES["service_image"]["name"])){


                        //     $service_titre =valid_data ($_POST['service_titre']);
                        //     $service_text= valid_data($_POST['service_text']);


						// 	// Allow certain file formats
						// 	$allowTypes = array('jpg','png','jpeg','gif','pdf');
						// 	if(in_array($fileType, $allowTypes)){
						// 		// Upload file to server
						// 		if(move_uploaded_file($_FILES["service_image"]["tmp_name"], $targetFilePath)){
						// 			// Insert image file name into database
						// 			$insert = $db->query("INSERT into service (service_image,service_titre,service_text) VALUES ('.$service_image.','$service_titre','$service_text')");
						// 			if($insert){
						// 				$statusMsg = "The file ".$fileName. " has been uploaded successfully.";
						// 			}else{
						// 				$statusMsg = "File upload failed, please try again.";
						// 			} 
						// 		}else{
						// 			$statusMsg = "Sorry, there was an error uploading your file.";
						// 		}
						// 	}else{
						// 		$statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
						// 	}
						// }else{
						// 	$statusMsg = 'Please select a file to upload.';
						// }

						// // Display status message
						// echo $statusMsg;




						
         // Create database connection
  $db = mysqli_connect("localhost", "root", "", "portfolio");

if ($db==true) {
	echo "connection base de donner";
}
else {
	echo "not connection base de donner";
}

  // include "config.php";

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['add'])) {
  	// Get image name
  	$service_image = $_FILES['service_image']['name'];
      // Get text
      
      $service_titre = $_POST['service_titre'];


      $service_text = $_POST['service_text'];




  	// image file directory
  	$target = "images/".basename($service_image);

  	$sql = "INSERT INTO service (service_image,service_titre,service_text) VALUES ('".$service_image."','".$service_titre."','".$service_text."')";
  	// execute query
	  $res=mysqli_query($db, $sql);
	  if ($res==true) {
		  echo "data inserted";
	  }
	  else {
		  echo "data no inserted";
	  }


  	if (move_uploaded_file($_FILES['service_image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }



  $result = mysqli_query($db, "SELECT * FROM service");





    


?>
    