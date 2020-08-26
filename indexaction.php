<?php

require 'config.php';



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




$update = false;

    $id=" ";
    $service_titre=" ";
    $service_text=" ";
    $service_image=" ";
    
    
    if(isset($_POST['add'])){                    
    
        //test values on input
        $service_titre =valid_data ($_POST['service_titre']);
        $service_text= valid_data($_POST['service_text']);
        $service_image= $_FILES['service_image']['name'];
        $upload="images/".$service_image;
    
         //insert values in  db
        $sth = $db->prepare("
        INSERT INTO service(service_image, service_titre,service_text)
        VALUES(:service_image,:service_titre,:service_text)");
        $sth->bindParam(':service_image',$upload);
        $sth->bindParam(':service_titre',$service_titre);
        $sth->bindParam(':service_text',$service_text);
        $sth->execute();
        move_uploaded_file($_FILES['service_image']['tmp_name'],$upload);
    }


    


?>
    