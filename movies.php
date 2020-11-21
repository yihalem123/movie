
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
              <a class="nav-link" href="movies1.php">movies2</a>
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
            <a href="movies1.php" class="btn btn-danger">buy seats</a>
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
    while($row=mysqli_fetch_array($query))
    {
      ?>
                  

  


<div class="image-container">
  <div class="product-item">
    <figure>
   
     <img src="movies/<?php echo htmlentities($row['post_name']); ?>" alt="Image"width='70%' class="img-fluid">
    </figure>
    <div class="px-4">
      <h3><a href="#"><?php echo $row['movie_name'];?></a></h3>
      <div class="mb-3">
        <span class="meta-icons mr-3"><a href="#" class="mr-2"><span class="icon-star text-warning"></span></a> 5.0</span>
        <span class="meta-icons wishlist"><a href="#" class="mr-2"><span class="icon-heart"></span></a> 29</span>
      </div>
      <p class="mb-4"><?php echo $row['movie_detail'];?></p>
      <p class="text-muted mb-3 text-uppercase small"><span class="mr-2"><?php echo htmlentities($row['movie_date']); ?></span> By <a href="single.html" class="by"><?php echo htmlentities($row['movie_producer']); ?></a></p>
      <div>
        <a href="single.php?mid=<?php echo $row['movieid'];?>" class="btn btn-black mr-1 rounded-0">view detail</a>
        <a href="#" class="btn btn-black btn-outline-black ml-1 rounded-0">order</a>
      </div>
    </div>
  </div>
</div>
<?php }
mysqli_free_result($query);
#echo ' <script>alert("data fetched successfully")</script>';
   mysqli_close($con);
?>


 </body>
 </html>