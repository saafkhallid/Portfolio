<!-- 

// include 'connexion.php';


// session_start();

// if(isset($_POST['submit'])){

//      $name=htmlspecialchars(strtolower(trim($_POST['Username'])));
//      $password=md5(($_POST['Password']));
        
//      $query="SELECT*FROM login WHERE Username='$name' &&  Password='$password' ";
//             //  header("Location:Administration.php");

//     if (mysqli_num_rows(mysqli_query($con,$query>0)))  
//     {
//         $_SESSION['Username']=$name;
//         header("Location:Administration.php");
        
//     }else {
//         echo "name ou password est faut";
//     }
    
     
// }


// 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">

    <title>login</title>
</head>
<body>
    <nav>
        <div class="logo">
            <a href="index.html"  target="_self" ><h1>Saaf</h1> </a>
        </div>
        </div>
        <ul class="navMenu">
            <li><a  href="index.html">Acceuil</a></li>
            <li><a href="Apropo.html">À propos </a></li>
            <li class="active" id="act"><a href="Apropo.html">portfolio</a>
                
            </li>

            <li class="active"><a href="contact.html">Contact</a></li>
            <li class="active"><a href="login.html">login</a></li>
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
    <section class="login">
        <div class="logoinbox">
            <img src="/PORTFOLIO/Assets/Avatar.png" alt="" class="avatar" >
            <h1>Login Here</h1>
            <form   method="POST" action="">
                <p>Username</p>
                <input type="text" name ="Username" placeholder="Enter Username" required>
                <p>Password</p>
                <input type="password" name ="Password" placeholder="Enter password" required>
                <input type="submit" name="submit" value="Login">
                <a href="#"> Lost your password</a> <br>
                <a href="#"> Don't have   an  account</a> 

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
    
</body>

</html> -->








<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: Administration.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
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
                            // header("location:Administration.php");
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
    <!-- <link rel="stylesheet" href="css/login.css"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">  -->
    <link rel="stylesheet" href="css/login.css">
   <style src="css/text">
       /* .wrapper{
           margin:auto;
           width:500px;
           max-width:90%;
             /* .form-group{

             } */
/* 
       }

       .form{
        width: 100%;
            height: 100%;
            padding:20px;

    
                } */ 
       
       
   </style>

   
</head>
<body>

<nav>
        <div class="logo">
            <a href="index.html"  target="_self" ><h1>Saaf</h1> </a>
        </div>
        </div>
        <ul class="navMenu">
            <li><a  href="index.php">Acceuil</a></li>
            <li><a href="Apropo.php">À propos </a></li>
            <li class="active" id="act"><a href="Apropo.php">portfolio</a>
                
            </li>

            <li class="active"><a href="contact.php">Contact</a></li>
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
    
    <!-- <div class="wrapper" >
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <p class="forgot ">Don't have an account? <a href="register.php">Sign up now</a>.</p>
        </form>
    </div>  -->
        
       <section class="saaf">   
      <div class="container" >
        <h2 class="">Login</h2>
        <!-- <p>Please fill in your credentials to login.</p> -->
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <p>Please fill in your credentials to login.</p>

            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <p class="forgot ">Don't have an account? <a href="register.php">Sign up now</a>.</p>
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