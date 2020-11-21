
<html>
<head>
   <title>upload movie</title>
   <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
   <style type="text/css">
      * {
         box-sizing: border-box;
      }
      html, body {
         margin: 0;
         padding: 0;
         background-image: url('images/work_1.jpg');
      }
      .form-container {
         margin: 20px;
         padding: 35px;
         
         color: white;
         box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.3), 0 7px 21px 0 rgba(0, 0, 0, 0.20);
      }
      .input-cnt {
         display: flex; /* display the icon and the input in a line */
         margin-bottom: 15px;
         justify-content: center;
      }
      .input-cnt:last-child {
         margin-bottom: 0px;
      }
      .input-cnt > i {
         min-width: 40px; /* set a minimum width for the icon */
         padding: 10px; /* make sure the icon is centered vertically */
         text-align: center; /* horizontally center the icon */
         background: lightgrey;
         border-top-left-radius: 40px;
         border-bottom-left-radius: 40px;
         color: #0076ff;
      }
      /* change styles when focused */
      .input-cnt:hover > i {
         background: #0076ff;
         color: rgb(247, 155, 155);
      }
      /* style the inputs */
      .input-cnt > input[type="text"], .input-cnt > input[type="password"] {
         outline: none;
         border: none;
         padding: 10px;
         border: 1px solid rgb(102, 177, 187);
         border-top-right-radius: 50px;
         border-bottom-right-radius: 50px;
         width: 60%;
         align-content: center;
      }
      /* style the submit button */
      .input-cnt > input[type="submit"] {
         border: none;
         border-radius: 20px;
         outline: none;
         width: 25%;
         margin: 0 auto;
         font-size: 105%;
         padding: 8px;
         color: #0076ff;
         background: rgb(238, 205, 19);
         transition-duration: .5s;
      }
      /* add a hover effect for the submit button */
      .input-cnt > input[type="submit"]:hover {
         color: white;
         background: #0076ff;
      }
      .azsx{
  font-family: sans-serif;
  background: transparent;
  color:rgb(8, 8, 8);
  background: turquoise;
  border: sandybrown;
  display: block;
}       
   </style>
</head>
<body>
  
   <h2 style="text-align: center"> upload movie</h2>
   <div class="form-container">
      <form action="" method='post'enctype='multipart/form-data'> 
      	
         <div class="input-cnt">
            <i class="material-icons">movie_name</i>
            <input type="text" placeholder="movie_name" name="movie_name" />
         </div>
         
         <div class="input-cnt">
            <i class="material-icons">producer_name</i>
            <input type="text" placeholder="producer_name" name="producer_name" />
         </div>
         
         <div class="input-cnt">
            <i class="material-icons">movie_date</i>
            <input type="date" placeholder="date of the movie" name="movie_date" />
         </div>
         
         <div class="input-cnt">
            <i class="material-icons">movie_detail</i>
            <input type="text" placeholder="detail of movie" name="movie_detail"/>
         </div>
         <div class="input-cnt">
            <i class="material-icons">about production</i>
            <input type="text" placeholder="detail about production" name="about_production"/>
         </div>
         <div class="input-cnt">
            <i class="material-icons">choose poster</i>
         <input class="azsx" type="file"name='file-to-upload'id='file-to-upload'>
      </div>
         <div class="input-cnt">
            <input type="submit" name='
            submit' value="upload movie" />
         </div>
         
      </form>
      
   </div>
   
   
      </form>
      
   </div>
</body>
</html>
<?php 
#session_start();
#include_once('config.php');


// For adding post  
if(isset($_POST['submit']))
{
$movie_name=$_POST['movie_name'];
$producer_name=$_POST['producer_name'];
$movie_date=$_POST['movie_date'];
$movie_detail = $_POST['movie_detail'];
$about_production = $_POST['about_production'];
$imgfile=$_FILES["file-to-upload"]["name"];
// get the image extension
$extension = substr($imgfile,strlen($imgfile)-4,strlen($imgfile));
// allowed extensions
$allowed_extensions = array(".jpg","jpeg",".png",".gif");
// Validation for allowed extensions .in_array() function searches an array for a specific value.
if(!in_array($extension,$allowed_extensions))
{
echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
}
else
{
//rename the image file
$imgnewfile=md5($imgfile).$extension;
// Code for move image into directory
move_uploaded_file($_FILES["file-to-upload"]["tmp_name"],"movies/".$imgnewfile);

$status=1;
$con = mysqli_connect('localhost','root','','cinema');

$query=mysqli_query($con,"INSERT into movies(movie_name,movie_producer,movie_date,post_name,is_active,movie_detail,about_production) values('$movie_name','$producer_name','$movie_date','$imgnewfile','$status','$movie_detail','$about_production')");
if($query)
{
echo"<script>alert('Post successfully added')</script> ";
}
else{
    echo"<script>alert('Post not added')</script> ";  
} 

}
}
?>