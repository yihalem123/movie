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
  <?php# break;
  }
  while($row=mysqli_fetch_array($query)){
  ?>
      <div class="page-single movie_list">
	<div class="container">
		<div class="row ipad-width2">
			<div class="col-md-8 col-sm-12 col-xs-12">
				<div class="topbar-filter">
					<p>Found <span>1,608 movies</span> in total</p>
					<label>Sort by:</label>
					<select>
						<option value="popularity">Popularity Descending</option>
						<option value="popularity">Popularity Ascending</option>
						<option value="rating">Rating Descending</option>
						<option value="rating">Rating Ascending</option>
						<option value="date">Release date Descending</option>
						<option value="date">Release date Ascending</option>
					</select>
					<a href="movielist.html" class="list"><i class="ion-ios-list-outline active"></i></a>
					<a  href="moviegrid.html" class="grid"><i class="ion-grid"></i></a>
				</div>
				<div class="movie-item-style-2">
					<img src="movies/<?php echo htmlentities($row['post_name']); ?>" alt="">
					<div class="mv-item-infor">
						<h6><a href="single.php?mid=<?php echo $row['movieid'];?>"><?php echo $row['movie_name'];?> <span>(2012)</span></a></h6>
						<p class="rate"><i class="ion-android-star"></i><span>8.1</span> /10</p>
						<p class="describe">Earth's mightiest heroes must come together and learn to fight as a team if they are to stop the mischievous Loki and his alien army from enslaving humanity...</p>
						<p class="run-time"> Run Time: 2h21’    .     <span>MMPA: PG-13 </span>    .     <span>Release: 1 May 2015</span></p>
						<p>Director: <a href="#">Joss Whedon</a></p>
						<p>Stars: <a href="#"><?php echo $row['movie_producer'];?></a> <a href="#">Chris Evans,</a> <a href="#">  Chris Hemsworth</a></p>
					</div>
				</div>
			
				<div class="topbar-filter">
					<label>Movies per page:</label>
					<select>
						<option value="range">5 Movies</option>
						<option value="saab">10 Movies</option>
					</select>
					<div class="pagination2">
						<span>Page 1 of 2:</span>
						<a class="active" href="#">1</a>
						<a href="#">2</a>
						<a href="#"><i class="ion-arrow-right-b"></i></a>
					</div>
				</div>
			</div>
         <?php   }
//mysqli_free_result($query);
#echo ' <script>alert("data fetched successfully")</script>';
 // mysqli_close($con);
?>
	    	
	    	</div>
	    
	
					
				
		
  
<script src="js/jquery.js"></script>
<script src="js/plugins.js"></script>
<script src="js/plugins2.js"></script>
<script src="js/custom.js"></script>
 </body>
 </html>