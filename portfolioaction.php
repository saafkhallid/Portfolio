<?php				







							session_start();
							$dbn = mysqli_connect('localhost', 'root', '', 'portfolio');
			
							// initialize variables
							
									$portfolio_path="";
									$portfolio_image="";
							$id = 0;
							$update = false;
			
							if (isset($_POST['save'])) {
								
									$portfolio_image = $_FILES['image']['name'];
									// Get text
									
									$portfolio_path = $_POST['path'];
			
			
									$target = "images/".basename($portfolio_image);
									$res=mysqli_query($dbn, "INSERT INTO `images` (`image`,`path`) VALUES ('".$portfolio_image."', '".$portfolio_path."')"); 
									if($res==true){
										echo "donnen upload";
									}else{
										echo "donner non upload";
									}	
									$_SESSION['message'] = "Address saved"; 
										header('location:portfoliopage.php');
										
			
										if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
											$msg = "Image uploaded successfully";
										}else{
											$msg = "Failed to upload image";

										}
							}
							$results = mysqli_query($dbn, "SELECT * FROM images");
											//   print_r($results->fetch_assoc());


			
											if (isset($_GET['dele'])) {
												$id = $_GET['dele'];
												mysqli_query($dbn, "DELETE FROM images WHERE id=$id");
												$_SESSION['message'] = "Address deleted!"; 
												header('location:portfoliopage.php');
											  }















						// // Include the database configuration file
						// include 'connexion.php';

						// $statusMsg = '';

						// // File upload path
						// $targetDir = "images/";

						// // $fileName = basename($_FILES['file']['name']);

						// $fileName = basename($_FILES["file_portfolio"]["name"]);
						
						// $targetFilePath = $targetDir . $fileName;
						// $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

						// if(isset($_POST["save"]) && !empty($_FILES["file_portfolio"]["name"])){

							
						// 	// Allow certain file formats
						// 	$allowTypes = array('jpg','png','jpeg','gif','pdf');
						// 	if(in_array($fileType, $allowTypes)){
						// 		// Upload file to server
						// 		if(move_uploaded_file($_FILES["file_portfolio"]["tmp_name"], $targetFilePath)){
						// 			// Insert image file name into database
						// 			$insert = $db->query("INSERT into images (file_name, uploaded_on) VALUES ('".$fileName."', NOW())");
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
						// }
						// else{
						// 	$statusMsg = 'Please select a file to upload.';
						// }

						// // Display status message
						// echo $statusMsg;







?>
