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

?>

<div class="topnav">
  <a style="margin:-10px 0px -10px 0px;" href="<?php echo BASE_URL; ?>index.php"><img src="../image/vitalis-preloader.png" style="height:100%; width:100px;"></a>
    <button class="btnmenu" id="btn-nav" style="float:right;">Menu</button>
    <button onclick="document.getElementById('id01').style.display='block'" id="login" href="#" style="float:right;"><i class="fa fa-lock"></i> Login</button>
    <a href="<?php echo BASE_URL.'require/logout.php';?>" id="user" style="color:#fff;float:right;display:none;"><?php echo $_SESSION['user'] ; ?></a>
    <div class="nav" id="nav">
  
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

<?php }

    if (isset($_POST['login'])) {
      $uname = $_POST['uname']; 
      $pass = $_POST['psw'];

      $query = "SELECT firstname FROM tbl_user WHERE username='$uname'";
      $res = $viewUser->get_query($query);
      foreach($res as $row){
        $user = $row['firstname'];
        $_SESSION['user'] = $user;
      }

      $res = $loginUser->login($uname,$pass);

      if ($res) {
        ?>
        <script>
          var login = document.getElementById("login");
          var user = document.getElementById("user");
          login.style.display = "none";
          console.log("login button none");
          user.style.display = "block";
          console.log("user button none");
        </script>
        <?php

      }
    }

?>

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
      <input type="submit" value="Login" name="login">
      <!-- <button class="login" type="submit" onclick="return login()"> Login </button> -->
    </div>

    <div class="container">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw"><a href="#">Forgot password?</a></span>
    </div>
  </form>
</div>
