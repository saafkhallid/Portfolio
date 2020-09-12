
              


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Signika:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/contact.css?v=<?php.echo.time();.?> ">

    <title>contact</title>
</head>
<body>
    <nav>
        <div class="logo">
            <a href="index.php"  target="_self" ><h1>Saaf</h1> </a>
        </div>
        </div>
        <ul class="navMenu">
            <li><a  href="index.php">Acceuil</a></li>
            <li><a href="Apropo.php">À propos </a></li>
            <li class="" id="act"><a href="portfolio.php">portfolio</a>
                
            </li>

            <li class="active"><a href="contact.php">Contact</a></li>
            <li class=""><a href="login.php">login</a></li>
        </ul>
        <div class="burger">
            <div class="burger__line1"></div>
            <div class="burger__line2"></div>
            <div class="burger__line3"></div>
        </div>
    </nav>




    <section class="sectionlogin">
        
        <img class="  sectionlogin-photo" src="Assets/person-in-front-of-laptop-on-brown-wooden-table-2115217.png">
       
    
    
    </section>


    <section class="contact">

        <div class="block0"> <h1 class="contat--titre">contact</h1></div>
                        <?php 

                                $Msg = "";
                                if(isset($_GET['error']))
                                {
                                    $Msg = " Please Fill in the Blanks ";
                                    echo '<div class="alert alert-danger">'.$Msg.'</div>';
                                }

                                if(isset($_GET['success']))
                                {
                                    $Msg = " Your Message Has Been Sent ";
                                    echo '<div class="alert alert-success">'.$Msg.'</div>';
                                }
                        
                        ?>
        <div class="contact-us">
            <div class="container-contact">
            <form method="POST" action="PROCESS.PHP"  >
          
              <label class="container-label"for="fname">username:</label>
              <input type="text" id="fname" name="firstname" placeholder="Your name..">
          
              <label  class="container-label" for="lname">Subject:</label>
              <input type="text" id="lname" name="subject" placeholder="Your last name..">
          
              <label class="container-label" for="email">Email: </label>
                <input type="email" id="lname" name="Email" placeholder="Enter your email:">
          
              <label class="container-label"for="subject">Message</label>
              <textarea id="subject" name="Message" placeholder="Write something.." style="height:200px"></textarea>
          
              <input type="submit" class="contact-button" name="add" value="Envoyer" >
          
            </form>
            </div>

            <div class="container-information">
            <div class="item-contact">
                <div class="item-contact__mod"><img src="https://img.icons8.com/fluent-systems-filled/48/000000/user-location.png"/></div> 
                <div class="item-contact__mod"><p><span>saaf web developper </span><br><span> Maroc,Youssoufia</span></p></div>
            </div>


            <div class="item-contact">              
                <div class="item-contact__mod"><img src="https://img.icons8.com/fluent-systems-filled/48/000000/phone.png"/></div>
                <div class="item-contact__mod"><p>(+212)6-90-45-62-12</p></div>
            </div>
            
            
            <div class="item-contact">
                <div class="item-contact__mod"><img src="https://img.icons8.com/ios-filled/50/000000/new-message.png"/></div>
                <div class="item-contact__mod"><p>khaliid.saaf@gmail.com</p></div>
            </div>


            </div>


          </div> 

    </section>
    <section>
        <div class="footer">
            <h1>Saaf</h1>
            <div class="logo">
               <a href="https://twitter.com/login?lang=fr" target="_blank"> <img src="/PORTFOLIO/Assets/twitter.png" alt=""> </a>
               <a href="https://fr-fr.facebook.com/ " target="_blank">  <img src="/PORTFOLIO/Assets/facebook-2.png" alt=""> </a>
                <a href=" https://www.youtube.com/" target="_blank"> <img src="/PORTFOLIO/Assets/youtube.png" alt=""> </a>
                <a href="https://www.linkedin.com/feed/" target="_blank"> <img src="/PORTFOLIO/Assets/linkedin.png" alt=""> </a>
            </div>
            <h2>@ 2020 copyright all right reserved</h2>
        </div>
    </section>

  

    <script src="js/script.js"></script>


</body>
</html>