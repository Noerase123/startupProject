<?php
include 'config.php';

if (isset($_SESSION['user'])) {
  header("location:".BASE_URL."view/items.php");
}

    $table = "tbl_parallax";
    
    $res = $viewUser->get_data($table);

    foreach ($res as $row) {
        $image1 = $row['image'];
        $image2 = $row['image2'];
        $image3 = $row['image3'];
        $id = $row['id'];
    }

    $tbl = "tbl_web_content";

    $ress = $viewUser->get_data($tbl);
    foreach($ress as $row) {
      $hlogo = $row['home_logo'];
    }
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
    <script src="js/jquery-3.3.1.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="parallax" id="home" style="
  background-image: url('<?php echo $image1;?>');">

  <div class="header" id="header">
    <h1 style="margin:15px 0px 15px 0px;"><img src="<?php echo $hlogo; ?>" style="max-height:70px; max-width:300px;"></h1>
  </div>

  <div class="logincard">
    <div class="loginform">
    <form action="" method="post" id="form">
      <h2>Login your account.</h2>
      <p>Username/Email</p>
      <input type="text" id="username" placeholder="Enter your email"><br>
      <p>Password</p>
      <input type="password" id="password" placeholder="Enter your password"><br><br>
      <center>
      <input type="submit" id="login" value="Login">
      <label>OR</label>
      <input type="submit" name="register" value="Register">
      <p style="color:green;font-size:20px;" class="response"></p>
      </center>
      
    </form>

    </div>
  </div><br><br><br><br><br>

  <div class="logincard" style="float:left;margin-left:20px;width:50%;">
    <div class="loginform">
    <form action="" method="post" id="form">
      <h2>Search Book you're looking for</h2>

      <input type="text" name="uname" placeholder="Search..."><br>
      
    </form>

    </div>
  </div>


</div>

<div class="parallax" style="background-image: url('<?php echo $image2?>');">


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

?>
<div class="topnav">
  <a style="margin:-10px 0px -10px 0px;" href="#home"><img src="<?php echo $nav_logo;?>" style="height:100%; width:100px;"></a>
    <button class="btnmenu" id="btn-nav" style="float:right;">Menu</button>
    <div class="nav" id="nav">
      
  <a href="#items"><i class="fa fa-cart-plus"></i> <?php echo ucfirst($nav1); ?></a>
  
  <a href="<?php echo BASE_URL; ?>view/contactUs.php"><i class="fa fa-user"></i> <?php echo ucfirst($nav3); ?></a>
  <a href="#why"><i class="fa fa-user"></i> Why us</a>
  <!-- <a href="<?php echo BASE_URL; ?>view/aboutus.php"><i class="fa fa-heart"></i> <?php echo $nav4; ?></a> -->


  <!-- <a href="<?php echo BASE_URL.'require/logout.php';?>" id="user2" style="color:#fff;">@<?php echo $_SESSION['user'] ; ?></a> -->

  </div>

</div>
<!-- end of topnav -->

<?php } ?>

<div class="row2">
<!-- modal end -->
  <div class="card3" id="items">
        <h2 style="background-image: url('<?php echo $image2?>');  width:100%;height:50px">Best Sellers in the Store</h2>
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
        <a href="#home"><img style="width:100%;height:250px;" src="<?php echo $image; ?>"></a>
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
        <a href="#home"><img style="width:100%;height:250px;" src="<?php echo $image; ?>"></a>
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
        <a href="#home"><img style="width:100%;height:250px;" src="<?php echo $image; ?>"></a>
        <p>by : <?php echo $title_desc; ?></p>
    </div>

      <?php } } ?>

  </div>

  </div>
  </div>
  <!-- row -->


  <!-- ====================================================================================================== -->
<div id="why" class="parallax" style="background-image: url('<?php echo $image3; ?>');">

<div class="notch">
<style>
  .notch {
    background-color: #f1f1f1;
    margin-top: 100px;
    padding:10px;
  }
</style>
</div>


<div class="row row2">


<div class="center2column">
  <div class="card">
      <h1>Why Us?</h1>
      <p><?php echo $why_desc; ?>.</p>
  </div>

  <div class="card" style="margin-bottom:25px;">
      <h1>Join Us</h1>
      <div class="joinus">
        <a href="#header" style="font-size:16px;"><i class="fa fa-lock"></i> Login</a>
        <a href="#" style="font-size:16px;"><i class="fa fa-info-circle"></i> Register</a>
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
var btn = document.getElementById('btn-nav');
var nav = document.getElementById('nav');

btn.onclick = function() {
    if (nav.style.display === "none"){
        nav.style.display = "block";
    } else {
        nav.style.display = "none";
    }
}

</script>

<script>
  $(document).ready(function() {
    $("#form").submit(function() {
      var username = $("#username").val();
      var password = $("#password").val();
      var login = $("#login").val();

      $(".response").load("require/ajax/login.php", {
        username: username,
        password: password,
        login: login
      });
    });
  });
</script>



</body>
</html>