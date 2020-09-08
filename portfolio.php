
<?php
include 'portfolioaction.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/portfolio.css">

    <title>portfolio</title>
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
        <div><h1 class="title" id="text">  <br>
            </h1></div>
    </section>

    <section class="    portfolio-team    ">
        <h1  class= "portfolio-team--titre"> portfolio</h1>
        <div class="portfolio">




        
                   

        <?php while ($row = mysqli_fetch_array($results)) { ?>  
             <div class="block"> 
                 <a href="<?php echo $row['path'];?>" target="_blank" ><img src="images/<?= $row['image'];?>" > </a>
                 
                </div>
                <?php } ?>

            <!-- <div class="block"> <img src="Assets\gallery_img-03.jpg"   ></div>
            <div class="block"> <img src="Assets\gallery_img-04.jpg "  ></div>
            <div class="block"> <img src="Assets\gallery_img-05.jpg" ></div>
            <div class="block"><img src="Assets\gallery_img-06.jpg" 
                ></div>
            <div class="block"> <img src="Assets\gallery_img-03.jpg"  ></div>
            <div class="block"> <img src="Assets\gallery_img-05.jpg "  ></div>
            <div class="block"> <img src="Assets\gallery_img-03.jpg" ></div>
            <div class="block"> <img src="Assets\gallery_img-02.jpg"     ></div>
            <div class="block"> <img src="Assets\gallery_img-02.jpg"     ></div>
            <div class="block"> <img src="Assets\gallery_img-02.jpg"     ></div> -->


 






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