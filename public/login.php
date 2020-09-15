







<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location:\Portfolio\priver\loginpage.php");
    exit;
}
 
// Include config file
require_once "C:\wamp64\www\Portfolio\priver\dbConfig.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            // session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("C:\wamp64\www\Portfolio\priver\loginpage.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Signika:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/login.css?v=<?php.echo.time();.?> ">
   
   
</head>
<body>

<nav>
        <div class="logo">
            <a href="index.html"  target="_self" ><h1>Saaf</h1> </a>
        </div>
        </div>
        <ul class="navMenu">
            <li><a  href="../index.php">Acceuil</a></li>
            <li><a href="Apropo.php">À propos </a></li>
            <li class="active" id="act"><a href="Apropo.php">portfolio</a>
                
            </li>

            <li ><a href="contact.php">Contact</a></li>
            <li class="active"><a href="login.php">login</a></li>
        </ul>
        <div class="burger">
            <div class="burger__line1"></div>
            <div class="burger__line2"></div>
            <div class="burger__line3"></div>
        </div>
</nav>




    <section class="sectionlogin">
        
        <img class="  sectionlogin-photo" src="/PORTFOLIO/Assets/person-in-front-of-laptop-on-brown-wooden-table-2115217.png">
       
    
    
    </section>
    
   
        
<section class="saaf">   
      <div class="container" >
        <h2 class="">Login</h2>
        <form class="container-forum" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <p class=" container-register__form-info" >Please fill in your credentials to login.</p>

            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label class="form-group__user" >Username:</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label class="form-group__user" >Password:</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <p class="forgot ">Don't have an account? <a class="forgot-ligne" href="register.php">Sign up now</a>.</p>
        </form>
    </div>
</section> 
        

      <section>
        <div class="footer">
            <h1>Saaf</h1>
            <div class="logo">
                <img src="/PORTFOLIO/Assets/twitter.png" alt="">
                <img src="/PORTFOLIO/Assets/facebook-2.png" alt="">
                <img src="/PORTFOLIO/Assets/youtube.png" alt="">
                <img src="/PORTFOLIO/Assets/linkedin.png" alt="">
            </div>
            <h2>@ 2020 copyright all right reserved</h2>
        </div>
    </section>  




    
    
    
    
    <script src="js/script.js"></script>

</body>
</html>