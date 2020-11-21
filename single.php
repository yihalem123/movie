<?php 

require('config.php');

?>
<!doctype html>
<html lang="en">
<head>
  <title>360 movie &mdash; </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,700|Oswald:400,700" rel="stylesheet">

  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="css/aos.css">

  <!-- MAIN CSS -->
  <link rel="stylesheet" href="css/style.css">

</head>
<body style="background-image:linear-gradient(to bottom right,red,blue);" data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">
 <?php if(isset($_POST['submite'])){
  $con = mysqli_connect('localhost','root','','cinema');
                  $name=$_POST['name'];
                  $email=$_POST['email'];
                  $comment=$_POST['comment'];
                  $pid=intval($_GET['mid']);
                  $st1='0';
                  $query=mysqli_query($con,"insert into comments(movieid,name,email,comment,status) values('$pid','$name','$email','$comment','$st1')");
                  if($query):
                    echo "<script>alert('comment successfully submit. Comment will be display after admin review ');</script>";
                   
                  else :
                   echo "<script>alert('Something went wrong. Please try again.');</script>";  
                  
                  endif;
                  
                
              }?>
    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
     <div class="site-mobile-menu-body"></div>
    </div>
   </div>
      </div>
<?php
$pid=intval($_GET['mid']);

$query=mysqli_query($con," SELECT * from movies where  movieid='$pid'");
while($row=mysqli_fetch_array($query)){
?>


      <section class="site-section">
        <div class="container">
          <div class="row">
            <div class="col-md-8 blog-content">
              <h1  style="color:black;"class="lead"><?php echo htmlentities($row['movie_name']);?></h1>
              <p  style="color:black;"><?php echo htmlentities($row['movie_detail']);?></p>

              <blockquote><p style="color:black;">አሪፍ አክሽን ፊልም ታዋቂ ተዋንያኖች የተወኑበት ትኬት ይቁረጡ</p></blockquote>
              <img src="movies/<?php echo htmlentities($row['post_name']);?>"height='400' width='60%'/>
              
              <div class="pt-5">
                <p>Categories:  <a href="#">action</a> , <a href="#">#trends</a></p>
              </div>
<?php 
#mysqli_free_result($query);
 ?>

<div class="form-group">
                      <button  value="choose seat" ><a value="choose seat" class="btn btn-primary btn-md text-white" href='seat.php?mid=<?php echo htmlentities($row['movieid']);?>'>choose seat</a></button>
                    </div>
                    <?php }
mysqli_free_result($query);
 ?>
              <div class="pt-5">
                <h3 style="color: rgb(179, 35, 131);" class="mb-5">6 Comments</h3>
                <ul class="comment-list">
               <? 
               
               $sts = 0;
$querym=mysqli_query($con," SELECT * from comments where  movieid='$pid' and status='$sts'");
while($rowe=mysqli_fetch_array($querym)){
  ?>
                  <li class="comment">
                    <div class="vcard bio">
                      <img src="images/IMG_20200324_174022.jpg" alt="Image">
                    </div>
                    <div class="comment-body">
                      <h3 style="color: rgb(35, 45, 179);"><? echo  htmlentities($rowe['name']); ?></h3>
                      <div class="meta">January 9, 2018 at 2:21pm</div>
                      <p></p>
                      <p><a href="#" class="reply">Reply</a></p>
                    </div>
                  </li>
<? }
                  
                   ?>
                            </ul>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>

                  
                </ul>
                <!-- END comment-list -->

               

                <div class="comment-form-wrap pt-5">
                  <h3 style="color: rgb(64, 179, 35);" class="mb-5">leave your comment</h3>
                  <form  method="POST" class="">
                  <input type="hidden" name="csrftoken" value="<?php echo htmlentities($_SESSION['token']); ?>" />
                    <div class="form-group">
                      <label for="name">Name *</label>
                      <input type="text" name='name' class="form-control" id="name">
                    </div>
                    <div class="form-group">
                      <label for="email">Email *</label>
                      <input type="email"name='email' class="form-control" id="email">
                    </div>
                    <div class="form-group">
                      <label for="email">comment *</label>
                      <input type="text" name='comment' class="form-control" id="comment">
                    </div>
                    <div class="form-group">
                      <input type="submit" onclick="func()" name='submite'value="post comment" class="btn btn-primary btn-md text-white">
                    </div>
                  
                    

                  </form>
                </div>
              </div>

            </div>
            <div class="col-md-4 sidebar">
              <div class="sidebar-box">
                <form action="#" class="search-form">
                  <div class="form-group">
                    <span class="icon fa fa-search"></span>
                    <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                  </div>
                </form>
              </div>
              <div class="sidebar-box">
                <div class="categories">
                  <h3 style="color: rgb(64, 179, 35);">Categories</h3>
                  <li><a href="#">romantic <span>(12)</span></a></li>
                  <li><a href="#">action <span>(22)</span></a></li>
                  <li><a href="#">adventurous <span>(37)</span></a></li>
                  <li><a href="#">comedy <span>(42)</span></a></li>
                 
                </div>
              </div>
              <div class="sidebar-box">
                <img src="images/IMG_20200216_145636.jpg" alt="Image" class="img-fluid mb-4 w-50 rounded-circle">
                <h3 style="color: rgb(64, 179, 35);">About The production</h3>
                <p>  best movie from us to you thank you for buying tickets we ofer you this best movie by proud
                    አሪፍ አክሽን ፊልም ፕሮዳክሽን  ታዋቂ ተዋንያኖች የተወኑበት ትኬት ይቁረጡ
                </p>
                <p><a href="#" class="btn btn-primary btn-md text-white">Read More</a></p>
              </div>

              <div class="sidebar-box">
              
            </div>
          </div>
        </div>
      </section>
    </div>
    <script >
       
        
    </script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script>
  
      
  </body>
  </html>