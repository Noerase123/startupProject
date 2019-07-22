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

<div class="topnav">
  <a style="margin:-10px 0px -10px 0px;" href="<?php echo BASE_URL; ?>index.php"><img src="../image/vitalis-preloader.png" style="height:100%; width:100px;"></a>
    <button class="btnmenu" id="btn-nav" style="float:right;">Menu</button>
  <div class="nav" id="nav">
  <button class="login" onclick="document.getElementById('id01').style.display='block'" href="#" style="font-size:16px;"><i class="fa fa-lock"></i> Login</button>
  

  <a href="<?php echo BASE_URL; ?>view/contactUs.php"><i class="fa fa-user"></i> <?php echo ucfirst($nav3); ?></a>
  <a href="<?php echo BASE_URL; ?>view/aboutus.php"><i class="fa fa-heart"></i> <?php echo $nav4; ?></a>

  <form class="search" method="GET">
        <input type="text" placeholder="Search..." name="query">
        <button type="submit" name="searchbtn" style="display:none;"><i class="fa fa-search"></i></button>
  </form>
  
  <a href="<?php echo BASE_URL; ?>view/community.php"><i class="fa fa-users"></i> <?php echo ucfirst($nav2); ?></a>
  <a href="<?php echo BASE_URL; ?>view/items.php"><i class="fa fa-cart-plus"></i> <?php echo ucfirst($nav1); ?></a>
  
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
      <input class="input" type="text" placeholder="Enter Username" name="uname" id="uname" required>

      <label for="psw"><b>Password</b></label>
      <input class="input" type="password" placeholder="Enter Password" name="psw" id="password" required>
        
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
