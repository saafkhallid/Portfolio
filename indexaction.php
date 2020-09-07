<?php


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
    