
<?php
require('config.php');
?>
<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>360movie</title>
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
  
  
    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/aos.css">
    
    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
    <link rel='stylesheet' href='css/stylee.css'>
    <link rel="stylesheet" href="css/plugins.css">
	<link rel="stylesheet" href="css/stylem.css">
  </head>


<body style="background-color:rgb(13, 17, 17);">
  
   
    <nav class="navbar navbar-expand-lg  bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand " href="index.html">360movie</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05"
          aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample05">
          <ul class="navbar-nav pl-md-5 ml-auto">
            <li class="nav-item">
              <a class="nav-link active" href="index.html">home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="services.html" id="dropdown04" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">movies</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">contact</a>
            </li>
          </ul>
          <div class="navbar-nav ml-auto">
            <form method="post" class="search-form">
              <span class="icon ion ion-search"></span>
              <input type="text" class="form-control" placeholder="Search for movies">
            </form>
          </div>

        </div>
      </div>
    </nav>
  </header>
  <div id="bannerImage1">
    <div class="container">
        <center>
        <div id="bannerContent1">
            <h1>our movie </h1>
            <a href="movies.php" class="btn btn-danger">buy seats</a>
        </div>
        </center>
    </div>
</div>

    
		<?php
  #$handle=opendir(dirname(realpath(__FILE__))."/movies/");
  # $query=mysqli_query($con,"SELECT * from films where is_active=1");
   #while ($row=mysqli_fetch_array($query)) {
    #$query=mysqli_query($con,"SELECT movie_name,producer_name,post_name FROM movies");
    $query=mysqli_query($con,"select * from movies where is_active='1'");
  while($row=mysqli_fetch_array($query)){
  
      ?>

	    	<div  class="slick-multiItemSlider">
       
	    		<div class="movie-item">
	    			<div class="mv-img">
	    				<a href="single.php?mid=<?php echo $row['movieid'];?>"><img src="movies/<?php echo htmlentities($row['post_name']); ?>" alt="" width="285" height="437"></a>
	    			</div>
	    			<div class="title-in">
	    				<div class="cate">
	    					<span class="blue"><a href="single.php?mid=<?php echo $row['movieid'];?>"><?php echo $row['movie_producer'];?></a></span>
	    				</div>
	    				<h6><a href="single.php?mid=<?php echo $row['movieid'];?>"><?php echo $row['movie_name'];?></a></h6>
	    				<p><i class="ion-android-star"></i><span><?php echo $row['movie_date'];?></span> </p>
	    			</div>
          </div>
  <?php break;
  }
  while($row=mysqli_fetch_array($query)){
  ?>
          <div class="movie-item">
	    			<div class="mv-img">
	    				<a href="single.php?mid=<?php echo $row['movieid'];?>"><img src="movies/<?php echo htmlentities($row['post_name']); ?>" alt="" width="285" height="437"></a>
	    			</div>
	    			<div class="title-in">
	    				<div class="cate">
	    					<span class="blue"><a href="single.php?mid=<?php echo $row['movieid'];?>"><?php echo $row['movie_name'];?></a></span>
	    				</div>
	    				<h6><a href="single.php?mid=<?php echo $row['movieid'];?>"><?php echo $row['movie_producer'];?></a></h6>
	    				<p><i class="ion-android-star"></i><span><?php echo $row['movie_date'];?></span></p>
	    			</div>
	    		</div>
         <?php }
//mysqli_free_result($query);
#echo ' <script>alert("data fetched successfully")</script>';
 // mysqli_close($con);
?>
	    	
	    	</div>
	    
	
					
      <div class="ft-copyright-landing">
	<p><a target="_blank" href="https://www.360GROUND.COM">360 MOVIE</a></p>
</div>
	
		
  
<script src="js/jquery.js"></script>
<script src="js/plugins.js"></script>
<script src="js/plugins2.js"></script>
<script src="js/custom.js"></script>
 </body>
 </html>