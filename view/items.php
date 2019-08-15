<?php
// session_start();
include '../config.php';

$res2 = $viewUser->get_data("tbl_parallax");
foreach($res2 as $row) {

  $img1 = $row['image'];
  $img2 = $row['image2'];
  $img3 = $row['image3'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Test Website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/main.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="../css/carousel.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="../css/login.css" />
    <script src="../js/jquery-3.3.1.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>


<!-- <div class="parallax" style="
  background-image: url('../image/carousel-2.jpg');"> -->

<?php
include '../require/header.php';
?>

<!-- </div> -->

<div class="parallax" style="background-image: url('../<?php echo $img2; ?>');">
<!-- <div class="parallax" style="background-color: darkblue;"> -->


<!-- PARALLAX END============================================= -->

<?php
include '../require/home_navbar.php';
?>

<!-- modal end -->

<div class="row row2">

<div class="leftcolumn category">

    <div class="card">
      <!-- <h2>Categories</h2> -->

      <?php 
      $res = $viewUser->orderBy("tbl_top_categories", "id");
      foreach($res as $data) {
        $top_id = $data['id'];
        $top_name = $data['top_name'];
      ?>
        <p id="btn<?php echo $top_id; ?>" class="Menu">> <?php echo $top_name; ?></p>
      
      <div class="submenu" id="submenu<?php echo $top_id;?>">

      <?php

$query = "SELECT * FROM tbl_categories WHERE ref_id = '$top_id' ORDER BY id ASC";

$res = $viewUser->get_query($query);

$num = $res->num_rows;

if ($num > 0) {

    while($row = $res->fetch_assoc()) {
      $cat_name = $row['cat_name'];
      $id = $row['id'];

      $qry = "SELECT category FROM tbl_stack WHERE quantity >= 1 AND category = '$cat_name'";
      $res2 = $viewUser->get_query($qry);
      $num2 = $res2->num_rows;

  ?>

    <a style="width:100%" href="<?php echo BASE_URL; ?>view/items.php?category=<?php echo $cat_name;?>"><?php echo ucfirst($cat_name); ?>(<?php echo $num2; ?>)</a>

  <?php
  }
  } 
  else {
    echo 'No Categories available';
  }
  ?>
      </div>
    <script>
    var btn = $('#btn<?php echo $top_id;?>');
    var submenu = $('#submenu<?php echo $top_id; ?>');
    
    btn.on('click', () => {
      alert("click" + <?php echo $top_id;?>);
      // submenu.toggle();
    });

    
  </script>


<?php } ?>
    </div>
  </div>


  <div class="rows">
  <?php
  
  if (isset($_GET['searchbtn']) || isset($_GET['query']))
  {
    $term = strip_tags($_GET['query']);
    $table = "tbl_stack";
    $search = "title";
    $result = $viewUser->search($term,$table,$search);
    
    $num_result = mysqli_num_rows($result);

    if($num_result > 0) {

      if ($num_result > 1)
      {
        $item = "items";
      }
      else {
        $item = "item";
      }

      echo '<h3 style="color:#fff;text-shadow: 0 5px rgba(0, 0, 0, 0.2);">Results: '.$num_result.' '.$item.' "'.$term.'"</h3>';
        while($row =$result->fetch_assoc()){               
            
            $dataArray[]=$row;
            // print_r($row);
            $title = $row['title'];
            $title_desc = $row['title_desc'];
            $some_text = $row['some_text'];
            $description = $row['description'];
            $image = $row['image'];
            $id = $row['id'];
            $money = $row['price'];
            $qty = $row['quantity'];

    
            $quantity = number_format($qty);
    
            $price = number_format($money,2);
            
            $date = $row['date_created'];
      
            $get_date = $viewUser->datetime($date);

            if (strlen($title) > 15) {
              $title = substr($title, 0, 15).'...';
            }

            ?>
    <div class="columns">
    <div class="card">
      <a href="<?php echo BASE_URL.'view/product_details.php?id='.$id;?>">
      <?php 
        if ($image == "") {
          echo '<div class="fakeimg" style="height:300px;"></div>';
        }
        else {
          echo '<div><img style="width:100%;height:250px;" src="../'.$image.'"></div>';
        }
      ?>
      </a>
      <h2><a style="color:#000;text-decoration:none;" href="<?php echo BASE_URL.'view/product_details.php?id='.$id;?>"><?php echo ucfirst($title); ?></a></h2>
      <a class="tags" href="" style="color:rgb(94, 92, 92)"><?php echo $some_text; ?></a>
      <p style="color:rgb(94, 92, 92)"><?php echo $price ? 'Price : Php '.$price : '' ; ?></p>
      <!-- <a class="seemore" href="<?php echo BASE_URL.'view/product_details.php?id='.$id;?>">See more +</a> -->
      <div class="prod_option">
      <?php
      if (isset($_SESSION['user']['name'])) {
      ?>
      <a class="seemore name prod_cart response" id="btncart" href="<?php echo BASE_URL.'require/ajax/direct_cart.php?id='.$id;?>">Cart</a>
      <?php
      } 
      ?>
      </div>
    </div>
  </div>
    
    <?php

        }
    } 
    else {
        echo '<h3 style="color:orange;text-shadow: 0 5px rgba(0, 0, 0, 0.2);">No Records Found </h3> &nbsp';
    }
  }
  // ================================================================================================
  else if (isset($_GET['category'])) {
    $categ = $_GET['category'];

    $table_name = "tbl_stack";
    $query = "SELECT category FROM $table_name WHERE category = '$categ' AND quantity >= 1";
    $res_row = $viewUser->get_query($query);
    $num_row = $res_row->num_rows;

    // tbl
    $query2 = "SELECT * FROM $table_name WHERE quantity >= 1 AND category = '$categ' ORDER BY id DESC";
    $res = $viewUser->get_query($query2);

if ($num_row > 0){

  echo '<h3 style="color:#fff;text-shadow: 0 5px rgba(0, 0, 0, 0.2);">"'.ucfirst($categ).'"  ('.$num_row.' Items)</h3>';

  while ($row = $res->fetch_assoc())
  {
    $title = $row['title'];
    $title_desc = $row['title_desc'];
    $some_text = $row['some_text'];
    $description = $row['description'];
    $image = $row['image'];
    $id = $row['id'];
    $money = $row['price'];
    $qty = $row['quantity'];

    
    $quantity = number_format($qty);
    
    $price = number_format($money,2);

    $date = $row['date_created'];
      
    $get_date = $viewUser->datetime($date);

    if (strlen($title) > 15) {
      $title = substr($title, 0, 15).'...';
    }
  ?>
  <div class="columns">
    <div class="card">
      <a href="<?php echo BASE_URL.'view/product_details.php?id='.$id;?>">
      <?php 
        if ($image == "") {
          echo '<div class="fakeimg" style="height:300px;"></div>';
        }
        else {
          echo '<div><img style="width:100%;height:250px;" src="../'.$image.'"></div>';
        }
      ?>
      </a>
      <h2><a style="color:#000;text-decoration:none;" href="<?php echo BASE_URL.'view/product_details.php?id='.$id;?>"><?php echo ucfirst($title); ?></a></h2>
      <a class="tags" href="" style="color:rgb(94, 92, 92)"><?php echo $some_text; ?></a>
      <p style="color:rgb(94, 92, 92)"><?php echo $price ? 'Price : Php '.$price : '' ; ?></p>
      <!-- <a class="seemore" href="<?php echo BASE_URL.'view/product_details.php?id='.$id;?>">See more +</a> -->
      <div class="prod_option">
      <?php
      if (isset($_SESSION['user']['name'])) {
      ?>
      <a class="seemore name prod_cart response" id="btncart" href="<?php echo BASE_URL.'require/ajax/direct_cart.php?id='.$id;?>">Cart</a>
      <?php
      } 
      ?>
      </div>
    </div>
  </div>

  <!-- <div class="fakeimg" style="height:200px;"></div> -->
  <?php
  }
  }
  }
  else {
// ============================================================
  $data = "SELECT * FROM tbl_stack WHERE quantity >= 1 ORDER BY id DESC";
  $res = $viewUser->get_query($data);

  while ($row = $res->fetch_assoc())
  {
    $title = $row['title'];
    $title_desc = $row['title_desc'];
    $some_text = $row['some_text'];
    $description = $row['description'];
    $image = $row['image'];
    $stack_id = $row['id'];
    $money = $row['price'];
    $qty = $row['quantity'];

    
    $quantity = number_format($qty);
    
    $price = number_format($money,2);

    $date = $row['date_created'];
      
    $get_date = $viewUser->datetime($date);

    if (strlen($title) > 15) {
      $title = substr($title, 0, 15).'...';
    }
  ?>
  <div class="columns">
    <div class="card">
      <a href="<?php echo BASE_URL.'view/product_details.php?id='.$id;?>">
      <?php 
        if ($image == "") {
          echo '<div class="fakeimg" style="height:300px;"></div>';
        }
        else {
          echo '<div><img class="img" src="../'.$image.'"></div>';
        }
      ?>
      </a>
      <h2><a class="name" style="color:#000;text-decoration:none;" href="<?php echo BASE_URL.'view/product_details.php?id='.$id;?>"><?php echo ucfirst($title); ?></a></h2>
      <!-- <a class="tags" href="" style="color:rgb(94, 92, 92)"><?php echo $some_text; ?></a> -->
      <p class="name" style="color:rgb(94, 92, 92)"><?php echo $price ? 'Price : Php '.$price : '' ; ?></p>
      <!-- <a class="seemore name" href="<?php echo BASE_URL.'view/product_details.php?id='.$id;?>">See more +</a> -->
      <div class="prod_option">
      <?php
      if (isset($_SESSION['user']['name'])) {
      ?>
      <a class="seemore name prod_cart response" id="btncart" href="<?php echo BASE_URL.'require/ajax/direct_cart.php?id='.$stack_id;?>">Cart</a>
      <?php
      } 
      ?>
      </div>
      
      
    </div>
  </div>
  <?php
  }
  }
  ?>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>
  
  </div>
  
  <div class="leftcolumn category">

<div class="card">
      <h3>Popular Post</h3>

  <?php 
    $query = "SELECT * FROM tbl_stack ORDER BY rand() LIMIT 3";
    $res = $viewUser->get_query($query);
    while ($row = $res->fetch_assoc()) {
      $img = $row['image'];
      $title = $row['title'];
      $id = $row['id'];

      if (strlen($title) > 10) {
        $title = substr($title, 0, 10).'...';
      }

  ?>
  <div class="popular">
    <span class="tooltip"><a href="<?php echo BASE_URL.'view/product_details.php?id='.$id;?>">See more about <?php echo $title; ?></a></span>
    <img src="../<?php echo $img; ?>"><br>
    </div>
  <?php
    }
  ?>
    </div>

  <?php 
    $query = "SELECT * FROM tbl_about";
    $res = $viewUser->get_query($query);
    while ($row = $res->fetch_assoc()) {
      $sometext = $row['some_text'];
    }
  ?>

    <div class="card">
      <h2>About Us</h2>
      <img src="../image/carousel-1.jpg" style="height:100px;width:100%;">
      <p><?php echo $sometext; ?></p>
      <a href="<?php echo BASE_URL.'view/aboutus.php';?>" style="cursor:pointer;color:#000;">See more</a>

    </div>

    
    <div class="card">
      <h3>Follow Us</h3>
      <div class="icons">
          <a href="#facebook"><i class="fa fa-facebook"></i></a>
          <a href="#instagram"><i class="fa fa-instagram"></i></a>
          <a href="#twitter"><i class="fa fa-twitter"></i></a>
          <a href="#tumblr"><i class="fa fa-tumblr"></i></a>
          <a href="#youtube"><i class="fa fa-youtube"></i></a>
      </div>
    </div>
  </div>
  
</div>


<?php 
include '../require/footer.php';
?>

</div>
<!-- parallax end here -->


</body>
</html>