<?php


// Create database connection
// include 'config.php'

$db = mysqli_connect("localhost", "root", "", "portfolio");

// include 'config.php'




// Initialize message variable

$msg = "";




// If upload button is clicked ...


if (isset($_POST[' add'])) {





            $service_image = $_FILES['service_image']['name'];

            $targ = "service/".basename($service_image);


            $service_titre = $_POST['service_titre'];

            $service_text = $_POST[' service_text'];



           

    // $facebook_path  = mysqli_real_escape_string($db, $_POST['facebook_path']);

    // $linkdin_path = mysqli_real_escape_string($db, $_POST['linkdin_path']);

    // $twitter_path = mysqli_real_escape_string($db, $_POST['twitter_path']);


    




   

     $saaf="INSERT INTO service(service_image,service_titre,service_text)VALUES('$service_image',$service_titre,'$service_text') ";


    mysqli_query($db, $saaf);

    if (move_uploaded_file($_FILES['service_image']['tmp_name'], $targ)) {
        $msg = "Image uploaded successfully";
    }else{
        $msg = "Failed to upload image";
    }
}






$resul = mysqli_query($db, "SELECT * FROM service");







?>
    