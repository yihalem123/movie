<?php
  session_start();
  require('config.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ticketing | 360movie</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" type="image/png" href="images/logo.png">
    <meta charset="UTF-8" />

    
    <link rel="stylesheet" href="seating/style.css" />
    <script src="seating/script.js" defer></script>
  </head>
  <body>

    <?php
      
    ?>
  
    <main>
      <div class="bar">
        <h2>Ticketing</h2>
        <span class="aside"><i>...get your lucky seat, instantly.</i></span>
      </div>
      <section>
        <?php
        $pid = $_GET['mid'];

          $query = "SELECT * FROM movies WHERE movieid ='$pid' ";
          $record = mysqli_query($con, $query) or die("Query Error!".mysqli_error($con));
          $row = mysqli_fetch_array($record);
          mysqli_free_result($record);
        ?>
        <p><b>Cinema</b>: 360cinema</p>
        <p><b>movie</b>:  <?php echo htmlentities($row['movie_name']); ?></p>
        <?php
         
        ?>
        <p><b>description</b>: <?php echo htmlentities($row['movie_detail']); ?></p>
        <p><b>date</b>: <?php echo htmlentities($row['movie_date']);?></p>
       
      </section>

     
    </main>

    <?php
      
      
    ?>
     <div class="film-container">
      <label>ፊልም ይምረጡ/Pick a film:</label>
      <select id="film">
        <option value="10"><?php echo htmlentities($row['movie_name']); ?></option>
        
      </select>
    </div>

    <ul class="showcase">
      <li>
        <div class="seat"></div>
        <small>unreserved/ያልተያዙ መቀመጫወች</small>
      </li>
      <li>
        <div class="seat selected"></div>
        <small>የመረጡት/selected</small>
      </li>
      <li>
        <div class="seat occupied"></div>
        <small>የተያዘ/reserved</small>
      </li>
    </ul>

    <div id="seats">
      <div class="screen"></div>

      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>

      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat occupied"></div>
        <div class="seat occupied"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>

      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat occupied"></div>
        <div class="seat occupied"></div>
      </div>

      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>

      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat occupied"></div>
        <div class="seat occupied"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>

      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat occupied"></div>
        <div class="seat occupied"></div>
        <div class="seat occupied"></div>
        <div class="seat"></div>
      </div>
    </div>

    <p class="text">
      You have selected/እረስወ የመረጡት መቀመጫወች <span id="count">0</span> seats for a price of birr/ሲሆን ገንዘቡም<span
        id="total"
        >0</span>ብር ነው
      
    </p>
    <button><a href='app.php'>pay</a></button>
    <?php 
// Include the qrlib file 

include 'phpqrcode/qrlib.php'; 
$s=htmlentities('<script> selectedSeatsCount </script>');
$text =$s; 

  
// $path variable store the location where to  
// store image and $file creates directory name 
// of the QR code file by using 'uniqid' 
// uniqid creates unique id based on microtime 

$path = 'images/'; 

$file = $path.uniqid().".png"; 

  
// $ecc stores error correction capability('L') 

$ecc = 'L'; 

$pixel_Size = 10; 

$frame_Size = 20; 

  
// Generates QR Code and Stores it in directory given 

QRcode::png($text, $file, $ecc, $pixel_Size); 

  
// Displaying the stored QR code from directory 

echo "<center><img src='".$file."'></center>"; 
echo '<script>alert(selectedSeatsCount)</script>'
?> 
  </body>
</html>