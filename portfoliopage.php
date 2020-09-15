<?php
include 'portfolioaction.php';

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
			<h1> Welcome page portfolio</h1>
			
      <div class="">
<form method="POST" action="portfolioaction.php" enctype="multipart/form-data">
  
		<p>Select Image File to Upload:</p>
	<div>	
	<input type="hidden" name="id">
	</div>
	<div>
	<input type="file" name="image">
	</div>
	<div>
	<input type="text" name="path">
	</div>
	<div>
	<button type="submit" name="save">Télecharger</button>
	</div>
	</form>

			<table class="team_table">
                                    <tr>
                                        <th>id</th>
                                        <th>image</th>
                                        <th>path</th>
                                        
                                        

                                   
                                    </tr>
                                <tr>
                                <?php 
                                 $results = mysqli_query($dbn, "SELECT * FROM images");
                                while ($row = mysqli_fetch_array($results)) { ?>

                                <tr>    <td><?php echo $row['id']; ?></td> 
                                        <td><?php echo $row['image']; ?></td> 
                                        <td><?php echo $row['path']; ?></td> 
                                        
                                        <td class="action-team">
                                            <a href="portfoliopage.php?edit=<?php echo $row['id']; ?>" class="btn btn-edit">edit</a>
                                            <a href="portfolioaction.php?dele=<?php echo $row['id']; ?>" class="btn btn-delete">delete</a>

                                        </td>
                                </tr>
                                	<?php } ?>
                                    
                                  
                                    </table>






				
				</div>
				
			</div>
		</div>
	</div>



</body>
</html>