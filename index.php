<?php
include 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Test Website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/home_main.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/carousel.css" />
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" /> -->
    <script src="main.js"></script>
    <script src="jquery-3.4.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.0.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>


<div class="parallax" style="
  background-image: url('image/carousel-2.jpg');">

  <div class="header" id="header">
    <h1 style="margin:15px 0px 15px 0px;"><a href="<?php echo BASE_URL; ?>index.php"><img src="image/vitalis-preloader.png" style="max-height:70px; max-width:300px;"></a></h1>
  </div>

  <div class="logincard">
    <div class="loginform">
    <form action="" method="post" id="form">
      <h2>Login your account.</h2>
      <p>Username/Email</p>
      <input type="text" name="uname" placeholder="Enter your email"><br>
      <p>Password</p>
      <input type="password" name="pass" placeholder="Enter your password"><br><br>

      <input type="submit" name="login" value="Login">
      <label>OR</label>
      <input type="submit" name="register" value="Register">
      
    </form>

    <?php
    if (isset($_POST['login'])) {
      header("location:".BASE_URL."view/items.php");
    }

    if (isset($_POST['register'])) {
      header("location:".BASE_URL."view/community.php");
    }
    ?>
    </div>
  </div>

</div>

<div class="parallax" style="background-image: url('image/carousel-3.jpg');">


<!-- PARALLAX END============================================= -->

<?php 

$tbl_name = "tbl_web_content";

$res = $viewUser->get_data($tbl_name);

while ($row = $res->fetch_assoc()) {
    
    $nav1 = $row['nav_menu1'];
    $nav2 = $row['nav_menu2'];
    $nav3 = $row['nav_menu3'];
    $nav4 = $row['nav_menu4'];
    $why_desc = $row['why_desc'];
    $nav_logo = $row['nav_logo'];
    $home_logo = $row['home_logo'];

?>
<div style="margin-bottom:100px;" class="topnav">
    <div class="toggle">
      <a style="margin:-10px 0px -10px 0px;" href="<?php echo BASE_URL; ?>view/index.php"><img src="image/vitalis-preloader.png" style="height:50px; width:130px;"></a>
      <div class="menu">
        <i class="fa fa-bars" aria-hidden="true"></i>
      </div>
    </div>
    <div class="navmenu">
    <a style="margin:-10px 0px -10px 0px;" href="<?php echo BASE_URL; ?>index.php"><img src="image/vitalis-preloader.png" style="height:50px; width:130px;"></a>
  <button onclick="document.getElementById('id01').style.display='block'" href="#" style="float:right;font-size:16px;display:none;"><i class="fa fa-lock"></i> Login</button>


  <a style="float:right;" href="<?php echo BASE_URL; ?>view/aboutus.php"><i class="fa fa-heart"></i> <?php echo $nav4; ?></a>
  <a style="float:right;" href="<?php echo BASE_URL; ?>view/contactUs.php"><i class="fa fa-user"></i> <?php echo $nav3; ?></a>

  <form class="search" method="GET">
        <input type="text" placeholder="Search..." name="query">
        <button type="submit" name="searchbtn" style="display:none;"><i class="fa fa-search"></i></button>
  </form>

  <?php 
    if (isset($_GET['query']) || isset($_GET['searchbtn'])) {

      header("location:".BASE_URL."view/items.php?query=".$_GET['query']."&searchbtn=");
    }
  ?>
  
  <a style="float:right;" href="<?php echo BASE_URL; ?>view/community.php"><i class="fa fa-users"></i> <?php echo $nav2; ?></a>
  <a style="float:right;" href="<?php echo BASE_URL; ?>view/items.php"><i class="fa fa-users"></i> <?php echo $nav1; ?></a>
</div>
</div>
<!-- end of topnav -->

<?php } ?>


<!-- modal -->
<div id="id01" class="modal">
  
  <form class="modal-content animate" action="" method="post">
    <div class="imgcontainer">
      <!-- <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span> -->
      <h2>Login your account</h2>
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" id="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" id="password" required>
        
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
      <br><br>
      <button class="login" onclick="return login()"> Login </button>
    </div>

    <div class="container">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw"><a href="#">Forgot password?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

</script>
<!-- modal end -->
  <div class="card2">
        <h2>Best Sellers in the Store</h2>
    </div>

<div class="row">

    

  <div class="rightcolumn">
    
    <?php

      $query = "SELECT * FROM tbl_stack ORDER BY rand() LIMIT 2";

      $res = $viewUser->get_query($query);

      $num_row = $res->num_rows;

      if ($num_row > 0) {
      
      while($row = $res->fetch_assoc()) {
        
        $title = $row['title'];
        $id = $row['id'];
        $title_desc = $row['title_desc'];
        $image = $row['image'];
    ?>

    <div class="card">
        <h2><?php echo $title; ?></h2>
        <a href="<?php echo BASE_URL.'view/product_details.php?id='.$id; ?>"><img style="width:100%;height:250px;" src="<?php echo $image; ?>"></a>
        <p>by : <?php echo $title_desc; ?></p>
    </div>

      <?php } } ?>

  </div>

<div class="leftcolumn">
    
<?php
      // $query = "SELECT * FROM tbl_stack ORDER BY rand() LIMIT 1";
      $res = $viewUser->get_query($query);
      
      $num_row = $res->num_rows;

      if ($num_row > 0) {

      while($row = $res->fetch_assoc()) {
        
        $title = $row['title'];
        $title_desc = $row['title_desc'];
        $image = $row['image'];
        $id = $row['id'];
    ?>

    <div class="card">
        <h2><?php echo $title; ?></h2>
        <a href="<?php echo BASE_URL.'view/product_details.php?id='.$id; ?>"><img style="width:100%;height:250px;" src="<?php echo $image; ?>"></a>
        <p>by : <?php echo $title_desc; ?></p>
    </div>

      <?php } } ?>
    
  </div>

  


  <div class="centercolumn">

    <?php
      // $query = "SELECT * FROM tbl_stack ORDER BY rand() LIMIT 1";
      $res = $viewUser->get_query($query);
      
      $num_row = $res->num_rows;

      if ($num_row > 0) {

      while($row = $res->fetch_assoc()) {
        
        $title = $row['title'];
        $title_desc = $row['title_desc'];
        $image = $row['image'];
        $id = $row['id'];
    ?>

    <div class="card">
        <h2><?php echo $title; ?></h2>
        <a href="<?php echo BASE_URL.'view/product_details.php?id='.$id; ?>"><img style="width:100%;height:250px;" src="<?php echo $image; ?>"></a>
        <p>by : <?php echo $title_desc; ?></p>
    </div>

      <?php } } ?>

  </div>

  </div>
  <!-- row -->


  <!-- ====================================================================================================== -->
<div class="parallax" style="background-image: url('../image/carousel-1.jpg');">

<div class="notch">
<style>
  .notch {
    background-color: #f1f1f1;
    margin-top: 100px;
    margin-bottom: 100px;
    padding:10px;
  }
</style>
</div>


<div class="row">


<div class="center2column">
  <div class="card">
      <h1>Why Us?</h1>
      <p><?php echo $why_desc; ?>.</p>
  </div>

  <div class="card">
      <h1>Join Us</h1>
      <div class="joinus">
        <button onclick="document.getElementById('id01').style.display='block'" href="#" style="font-size:16px;"><i class="fa fa-lock"></i> Login</button>
        <button onclick="document.getElementById('id01').style.display='block'" href="#" style="font-size:16px;"><i class="fa fa-info-circle"></i> Register</button>
      </div>
  </div>
</div>


</div>
<!-- row -->

</div>
<!-- parallax -->


</div>
<!-- parallax end here -->

<?php 

$table = "tbl_web_content";

$res = $viewUser->get_data($table);

while($row = $res->fetch_assoc()) {

    $nav1 = $row['nav_menu1'];
    $nav2 = $row['nav_menu2'];
    $nav3 = $row['nav_menu3'];
    $nav4 = $row['nav_menu4'];

    $footer = $row['footer_text'];
}

?>
<div class="footer">
    <div style="float:left;width:25%;">
    <a href="">
    <img src="image/vitalis-preloader.png" style="height:50px; width:130px;">
    </a>
    <p>Image where it live.</p>
    </div>

    <div style="float:left;width:50%;">
    <h3>Follow Us</h3>
      <div class="icons">
          <a href="#facebook"><i class="fa fa-facebook"></i></a>
          <a href="#instagram"><i class="fa fa-instagram"></i></a>
          <a href="#twitter"><i class="fa fa-twitter"></i></a>
          <a href="#tumblr"><i class="fa fa-tumblr"></i></a>
          <a href="#youtube"><i class="fa fa-youtube"></i></a>
      </div><br>
        <p><?php echo $footer; ?>.</p>
    </div>

    <div>
    <p><a style="color:#000;text-decoration:none;" href="<?php echo BASE_URL; ?>view/items.php"><?php echo $nav1; ?></a></p>
    <p><a style="color:#000;text-decoration:none;" href="<?php echo BASE_URL; ?>view/community.php"><?php echo $nav2; ?></a></p>
    <p><a style="color:#000;text-decoration:none;" href="<?php echo BASE_URL; ?>view/contactUs.php"><?php echo $nav3; ?></a></p>
    <p><a style="color:#000;text-decoration:none;" href="<?php echo BASE_URL; ?>view/aboutus.php"><?php echo $nav4; ?></a></p>
    </div>
</div>


<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 2 seconds
}
</script>



</body>
</html>