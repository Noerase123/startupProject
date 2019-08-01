<?php
// session_start();

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

}

$name = isset($_SESSION['user']);

$query = "SELECT * FROM tbl_cart WHERE `name`='$name' ORDER BY id DESC";

$res = $viewUser->get_query($query);

$num = $res->num_rows;

?>

<div class="topnav">
  <a style="margin:-10px 0px -10px 0px;" href="#header"><img src="../<?php echo $nav_logo;?>" style="height:100%; width:100px;"></a>
  
  <button class="btnmenu" id="btn-nav" style="float:right;">Menu</button>
  <button class="btncat" id="btn-cat">Cat</button>
    <?php
      if (isset($_SESSION['user'])) {
    ?>
  <a class="login-user" href="<?php echo BASE_URL.'require/logout.php';?>" id="user2" style="color:#fff;float:right;">@<?php echo $_SESSION['user'] ; ?></a>
      <?php } else {?>

    <button class="nav-login" onclick="document.getElementById('id01').style.display='block'" href="#" style="float:right;"><i class="fa fa-lock"></i> Login</button>
      <?php } ?>

    <form class="search" style="" method="GET">
        <input type="text" placeholder="Search..." name="query">
        <button type="submit" name="searchbtn" style="display:none;"><i class="fa fa-search"></i></button>
    </form>

    <div class="nav" id="nav">
      
  <a href="<?php echo BASE_URL; ?>view/items.php"><i class="fa fa-cart-plus"></i> <?php echo ucfirst($nav1); ?></a>
  <a href="<?php echo BASE_URL; ?>view/community.php"><i class="fa fa-users"></i> <?php echo ucfirst($nav2); ?></a>
  
  <?php if (isset($_SESSION['user'])) {?>
  <a href="<?php echo BASE_URL; ?>view/cart.php"><i class="fa fa-cart-plus"></i> Cart(<?php echo $num;?>) </a>
  <a href="<?php echo BASE_URL; ?>view/checkout.php"><i class="fa fa-heart"></i> Checkout </a>
  <a href="<?php echo BASE_URL.'require/logout.php';?>" id="user2" style="color:#fff;">@<?php echo $_SESSION['user'] ; ?></a>
  <?php } else { ?>
  <a href="<?php echo BASE_URL; ?>view/contactUs.php"><i class="fa fa-user"></i> <?php echo ucfirst($nav3); ?></a>
  <a href="<?php echo BASE_URL; ?>view/aboutus.php"><i class="fa fa-heart"></i> <?php echo $nav4; ?></a>
  <button class="res-nav-login" onclick="document.getElementById('id01').style.display='block'" id="login" href="#"A><i class="fa fa-lock"></i> Login</button>
  <?php } ?>

  </div>

</div>
<!-- end of topnav -->



<!-- modal -->
<div id="id01" class="modal">
  
  <form class="modal-content animate" id="form_login" action="" method="post">
    <div class="imgcontainer">
      <!-- <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span> -->
      <h2 class="response">Login your account</h2>
      <!-- <span class="response"></span> -->
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input class="input" type="text" placeholder="Enter Username" name="uname" id="username" required>

      <label for="psw"><b>Password</b></label>
      <input class="input" type="password" placeholder="Enter Password" name="psw" id="password" required>
        
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
      <br><br>
      <input type="submit" value="Login" id="login" name="login"><br><br>
      <input type="submit" value="Sign Up" name="register">
      <!-- <button class="login" type="submit" onclick="return login()"> Login </button> -->
    </div>

    <div class="container">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw"><a href="#">Forgot password?</a></span>
    </div>
  </form>
</div>
