


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/contact.css ">

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
        
        <img class="  sectionlogin-photo" src="/PORTFOLIO/Assets/person-in-front-of-laptop-on-brown-wooden-table-2115217.png">
       
    
    
    </section>


    <section class="contact">

        <div class="block0"> <h1 class="contat--titre">contact</h1></div>
        <div class="container">

       



            <form method="POST" action="action.php">
          
              <label for="fname">First Name</label>
              <input type="text" id="fname" name="firstname" placeholder="Your name..">
          
              <label for="lname">Last Name</label>
              <input type="text" id="lname" name="lastname" placeholder="Your last name..">
          
              <label for="email">Email: </label>
                <input type="email" id="lname" name="Email" placeholder="Enter your email:">
          
              <label for="subject">Subject</label>
              <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
          
              <input type="submit"  name="add" value="Submit" >
          
            </form>
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