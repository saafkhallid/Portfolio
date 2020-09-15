<?php


include "indexaction.php"
		
		?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration</title>
	
 

     

     
    <link rel="stylesheet" href="css/Teampage.css">
</head>
<body>
    
<header>
		<div class="logo">team<span>page</span></div>
	</header>
	<div class="nav-btn">Menu</div>
	<div class="container">
		
		<div class="sidebar">
			<nav>
				<a href="#" class="">Administration<span>page</span></a>
				<ul>
					<li class="active" ><a href="#">Dashboard</a></li>
					<li><a href="portfoliopage.php">Portfolio</a></li>
					<li><a href=" contactpage.php ">contact</a></li>
					<li><a href=" indexpage.php">accuil</a></li>
					<li class="" ><a href="loginpage.php ">login</a></li>
				</ul>
			</nav>
		</div>

		<div class="main-content">
			<h1> Welcome page   accuil</h1>
		
                             <?php if (isset($_SESSION['message'])): ?>
                                <div class="msg">
                                    <?php 
                                        echo $_SESSION['message']; 
                                        unset($_SESSION['message']);
                                    ?>
                                </div>
                            <?php endif ?>
			
      <div class="">
				
	  <form method="POST" action="indexpage.php" enctype="multipart/form-data">
	  <div>
    	<input type="hidden" name="id" value="<?php echo $id; ?>"  >
        </div>
			<div>
			<input type="file" name="service_image" value="<?php echo $service_image; ?> ">
			</div>
			<div>
			<input type="text" name="service_titre" placeholder="Your last title." value="<?php echo $service_titre; ?> ">
			</div>
			<div>
			<textarea  name="service_text"  cols="20" rows="10" placeholder="Your last text." value="<?php echo $service_text; ?>"></textarea>
			</div>
			<div>
				<button type="submit" name="save">upload</button>
			</div>

 	</form>
				</div>


				
				<table class="team_table">
                                    <tr>
                                        <th>id</th>
                                        <th>image</th>
                                        <th>titre</th>
                                        <th>text</th>
                                        
                                        

                                   
                                    </tr>
                                <tr>
                                <?php 
                                 $results = mysqli_query($db, "SELECT * FROM services");
                                while ($row = mysqli_fetch_array($results)) { ?>

                                <tr>    <td><?php echo $row['id']; ?></td> 
                                        <td><?php echo $row['service_image']; ?></td> 
                                        <td><?php echo $row['service_titre']; ?></td> 
                                        <td><?php echo $row['service_text']; ?></td> 
                                        
                                        <td class="action-team">
                                            <a href="indexpage.php?edit=<?php echo $row['id']; ?>" class="btn btn-edit">edit</a>
                                            <a href="indexpage.php?dele=<?php echo $row['id']; ?>" class="btn btn-delete">delete</a>

                                        </td>
                                </tr>
                                	<?php } ?>
                                    
                                  
                                    </table>
				
			</div>
		</div>
	</div>



</body>
</html>