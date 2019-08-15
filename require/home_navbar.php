<?php
// session_start();

$tbl_name = "tbl_web_content";

if (isset($_GET['query'])) {
  $q = $_GET['query'];
  header("location:".BASE_URL."view/items.php?query=$q&searchbtn=");
}

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

if (isset($_SESSION['user']['name'])) {
  $name = $_SESSION['user']['name'];

  $qry = "SELECT * FROM tbl_user WHERE username= '$name'";
  $user = $viewUser->get_query($qry);
  $num_user = $user->num_rows;
  if ($num_user > 0) {
  foreach($user as $you) {
    $firstname = $you['firstname'];
    $lastname = $you['lastname'];
    $contact = $you['contact_no'];
    $address = $you['address'];
  }
  }

$query = "SELECT * FROM tbl_cart WHERE `customer_name`='$name' ORDER BY id DESC";

$res = $viewUser->get_query($query);
foreach($res as $row) {
  $get_name = $row['customer_name'];
}

$num = $res->num_rows;

}

?>

<div class="topnav">
  <a style="margin:-10px 0px -10px 0px;" href="#header"><img src="../<?php echo $nav_logo;?>" style="height:100%; width:100px;"></a>
  
  <button class="btnmenu" id="btn-nav" style="float:right;">Menu</button>
  <button class="btncat" id="btn-cat">Cat</button>
  <!-- onclick="return document.getElementById('cat_nav').style.display = 'block'" -->

    <?php
      if (isset($_SESSION['user']['name'])) {
    ?>
    <a class="cart-o" style="float:right;" href="<?php echo BASE_URL.'view/cart.php?session='.$name; ?>"><i class="fa fa-cart-plus"></i> Cart(<?php echo $num;?>) </a>
    <a class="login-user" href="<?php echo BASE_URL.'view/profile.php?tab=summary';?>" id="user2" style="color:#fff;float:right;">@<?php echo $num_user > 0 ? ucfirst($firstname) : '' ; ?></a>
      <?php } else {?>
        <a class="signup" href="<?php echo BASE_URL.'view/signup.php?set_up_login'?>" style="float:right;"><i class="fa fa-lock"></i> Signup</a>
        <!-- <button class="signup" onclick="document.getElementById('id02').style.display='block'" href="#" style="float:right;"><i class="fa fa-lock"></i> Signup</button> -->
    <button class="nav-login" onclick="document.getElementById('id01').style.display='block'" href="#" style="float:right;"><i class="fa fa-lock"></i> Login</button>
      <?php } ?>

    <form class="search" style="" method="GET">
        <input style="background-color:#f1f1f1;" type="text" placeholder="Search..." name="query">
        <button type="submit" name="searchbtn" style="display:none;"><i class="fa fa-search"></i></button>
    </form>

    <div class="nav" id="nav">
      
  <a href="<?php echo BASE_URL; ?>view/items.php"><i class="fa fa-cart-plus"></i> <?php echo ucfirst($nav1); ?></a>
  <a href="<?php echo BASE_URL; ?>view/community.php?session=<?php echo isset($name) ? $name : 'none';?>"><i class="fa fa-users"></i> <?php echo ucfirst($nav2); ?></a>
  <a href="<?php echo BASE_URL; ?>view/contactUs.php"><i class="fa fa-user"></i> <?php echo ucfirst($nav3); ?></a>
  <a href="<?php echo BASE_URL; ?>view/aboutus.php"><i class="fa fa-heart"></i> <?php echo $nav4; ?></a>
  
  <?php if (isset($_SESSION['user'])) {?>
  <!-- <a href="<?php echo BASE_URL; ?>view/checkout.php?id"><i class="fa fa-heart"></i> Checkout </a> -->
    <!-- <a class="cart-i" href="<?php echo BASE_URL.'view/cart.php?session='.$name; ?>"><i class="fa fa-cart-plus"></i> Cart(<?php echo $num;?>) </a> -->
    <a class="cart-i" href="<?php echo BASE_URL.'view/cart.php?session='.$name; ?>"><i class="fa fa-cart-plus"></i> Cart( <span class="result_cart"></span> ) </a>
  <a href="<?php echo BASE_URL.'view/profile.php?tab=summary';?>" id="user2" style="color:#fff;">@<?php echo $num_user > 0 ? ucfirst($firstname) : '' ; ?></a>
  <?php } else { ?>
  <a class="nav_signup" href="<?php echo BASE_URL.'view/signup.php?set_up_login'?>" style="float:right;"><i class="fa fa-lock"></i> Signup</a>
  <button class="res-nav-login" onclick="document.getElementById('id01').style.display='block'" id="login" href="#"A><i class="fa fa-lock"></i> Login</button>
  <?php } ?>

  </div>

</div>
<!-- end of topnav -->


<div class="cat_nav" id="cat_nav">
  <ul class="cat_content" id="cat_content">
    <li><a href="<?php echo BASE_URL; ?>view/items.php">All Products</a></li>
    <?php
    $sql = "SELECT * FROM tbl_categories";
    $res = $viewUser->get_query($sql);
    foreach($res as $row) {
      $name = $row['cat_name'];
      $qry = "SELECT * FROM tbl_stack WHERE category = '$name'";
      $res2 = $viewUser->get_query($qry);
      $num_res = $res2->num_rows;
      echo '<li><a href="'.BASE_URL.'view/items.php?category='.$name.'">'.$name.' ('.$num_res.')</a></li>';
    }
    ?>
  </ul>
</div>


<!-- modal -->
<div id="id01" class="modal">
  
  <form class="modal-content animate" id="form_login" action="" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
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
      <input type="submit" value="Login" id="login" name="login">
      <!-- <button class="login" type="submit" onclick="return login()"> Login </button> -->
    </div>

    <div class="container">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw"><a href="#">Forgot password?</a></span>
    </div>
  </form>
</div>


<div id="cashout" class="modal">
  
  <form class="modal-content animate" style="width:30%;" id="form_login" action="" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('cashout').style.display='none'" class="close" title="Close Modal">&times;</span>
      <h2 class="response">Method of Payment</h2>
      <!-- <span class="response"></span> -->
    </div>

    <div class="container">
      <h2><small>Cash on Delivery</small> </h2>
      <h3>Fullname: <small><?php echo $firstname.' '.$lastname; ?></small> </h3>
      <h3>Contact No.: <small><?php echo $contact; ?></small> </h3>
      <h3>Address: <small><?php echo $address; ?></small> </h3>
      <!-- <h3>Address: <small>#143 Mapagmahal St. Taguig City Philippines</small> </h3> -->
      <br>
      <a onclick="alert('Purchase successful!')" href="<?php echo BASE_URL; ?>require/ajax/user_log.php?customer=<?php echo $get_name;?>" style="padding:8px;background-color:green;color:#fff;text-decoration:none;" id="login" name="login">Confirm</a>
      <a onclick="document.getElementById('cashout').style.display='none'" style="cursor:pointer;padding:8px;background-color:red;color:#fff;text-decoration:none;" id="login" name="login">Cancel</a>      
      <!-- <button class="login" type="submit" onclick="return login()"> Login </button> -->
    </div>

    <!-- <div class="container">
      <button type="button" onclick="document.getElementById('cashout').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw"><a href="#">Forgot password?</a></span>
    </div> -->
  </form>
</div>


<div id="creditdebit" class="modal" style="overflow:auto">
  
  <form class="modal-content animate" style="width:30%;" id="form_login" action="" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('creditdebit').style.display='none'" class="close" title="Close Modal">&times;</span>
      
      <h2>Payment method</h2>
    </div>

    <div class="container">
      <p>Enter Credit Card # :</p>
      <input class="input" type="text" maxlength="16" placeholder="Enter Card number.." name="title_rev" id="title_rev" required>
      
      <p>Enter Fullname :</p>
      <input class="input" type="text" placeholder="Enter Fullname.." name="title_rev" id="title_rev" required>
      
      <p>Enter Valid Date:</p>
      <input class="input" type="date" placeholder="Enter Card number.." name="title_rev" id="title_rev" required>
      
      <p>Enter CV :</p>
      <input class="input" type="text" maxlength="3" placeholder="Enter CV number.." name="title_rev" id="title_rev" required>

      <br><br><br>
      <a href="<?php echo BASE_URL; ?>require/ajax/user_log.php?customer=<?php echo $get_name;?>" style="padding:8px;background-color:green;color:#fff;text-decoration:none;" id="login" name="login">Confirm</a>
      <a onclick="document.getElementById('creditdebit').style.display='none'" style="cursor:pointer;padding:8px;background-color:red;color:#fff;text-decoration:none;" id="login" name="login">Cancel</a>      
      <!-- <button class="login" type="submit" onclick="return login()"> Login </button> -->
    </div>

    <!-- <div class="container">
      <button type="button" onclick="document.getElementById('cashout').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw"><a href="#">Forgot password?</a></span>
    </div> -->
  </form>
</div>