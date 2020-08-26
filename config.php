<?php



// /* Database credentials. Assuming you are running MySQL
// server with default setting (user 'root' with no password) */
// define('DB_SERVER', 'localhost');
// define('DB_USERNAME', 'root');
// define('DB_PASSWORD', '');
// define('DB_NAME', 'portfolio');
 
// /* Attempt to connect to MySQL database */
// $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// // Check connection
// if($link === false){
//     die("ERROR: Could not connect. " . mysqli_connect_error());
// }


try
{
    $db = new PDO('mysql:host=localhost;dbname=portfolio;charset=utf8','root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(PDOException $e)
{
        die('Erreur : '.$e->getMessage());
} 





?>