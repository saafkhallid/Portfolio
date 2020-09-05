<?php  
 include "indexaction.php";
//   $results = mysqli_query($db, "SELECT * FROM info"); 

// //  print_r($results->fetch_assoc());

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/accueil.css">


    <title>acceail</title>
</head>
<body>
    <nav>
        <div class="logo">
            <a href="index.php"  target="_self" ><h1>Saaf</h1> </a>
        </div>
        </div>
        <ul class="navMenu">
            <li><a class="active" href="index.php">Acceuil</a></li>
            <li><a href="Apropo.php">À propos </a></li>
            <li class="active" id="act"><a href="portfolio.php">portfolio</a>
                
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
    <section class="sectionTeam">
        
        <img class="  sectionTeam-photo" src="Assets/coffee-2737047_1920.png">
        <div><h1 class="title" id="text"> 
            </h1></div>


    </section>

    <section class=" service ">
        <h1>Our service</h1>
        <div class="container">
       
     
        <div class="block0">
                <img src="   Assets/phone (1).png" alt="">
                <h2  class="container-h">Support</h2>

                <p  class="container-p " >Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus provident, a minima eaque delectus iure beatae laudantium velit odio exercitationem nam quidem odit animi eos minus dolorem molestias ipsum maiores!</p>
        </div> 
            
            <div class="block1">
                <img src="   Assets/phone (1).png" alt="">
                <h2  class="container-h">Support</h2>

                <p  class="container-p " >Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus provident, a minima eaque delectus iure beatae laudantium velit odio exercitationem nam quidem odit animi eos minus dolorem molestias ipsum maiores!</p>
            </div> 
          
            <div class="block2">
                <img src="   Assets/rocket.png" alt="">

                <h2 class="container-h">  Responsive Design</h2>
                <p  class="container-p " >Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus provident, a minima eaque delectus iure beatae laudantium velit odio exercitationem nam quidem odit animi eos minus dolorem molestias ipsum maiores!</p>
            </div>
            <div class="block3">
                <img src="   Assets/google-docs.png" alt="">
                <h2 class="container-h">  Creative Design</h2>
                <p  class="container-p " >Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus provident, a minima eaque delectus iure beatae laudantium velit odio exercitationem nam quidem odit animi eos minus dolorem molestias ipsum maiores!</p>
            </div
            ><div class="block4">
                <img src="  Assets/repair (1).png" alt="">
                <h2 class="container-h">  Graphic Design</h2>
                <p  class="container-p " >Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus provident, a minima eaque delectus iure beatae laudantium velit odio exercitationem nam quidem odit animi eos minus dolorem molestias ipsum maiores!</p>
            </div>
            <div class="block5">
                <img src="  Assets/idea (1).png" alt="">
                <h2 class="container-h">Web Idea</h2>

                <p  class="container-p " >Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus provident, a minima eaque delectus iure beatae laudantium velit odio exercitationem nam quidem odit animi eos minus dolorem molestias ipsum maiores!</p>
            </div>
            <div class="block6">
                <img src="  Assets/email.png" alt="">
                <h2 class="container-h">Support</h2>

                <p class="container-p " >Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus provident, a minima eaque delectus iure beatae laudantium velit odio exercitationem nam quidem odit animi eos minus dolorem molestias ipsum maiores!</p>
            </div>
            <div class="block7">
                <img src="  Assets/checklist.png" alt="">
                <h2 class="container-h">Web Idea</h2>

                <p class="container-p " >Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus provident, a minima eaque delectus iure beatae laudantium velit odio exercitationem nam quidem odit animi eos minus dolorem molestias ipsum maiores!</p>
            </div>
            <div class="block8">
                <img src="  Assets/google-docs.png " alt="">
                <h2 class="container-h">  Graphic Design</h2>

                <p class="container-p " >Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus provident, a minima eaque delectus iure beatae laudantium velit odio exercitationem nam quidem odit animi eos minus dolorem molestias ipsum maiores!</p>
            </div> 
           
            

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
