<?php
session_start();
include '../config.php';

$res = $viewUser->get_data("tbl_stack");
$rows = $res->num_rows;

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
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap.min.css" /> -->
    <script src="main.js"></script>
    <script src="jquery-3.4.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.0.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
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


<!-- PARALLAX END============================================= -->

<?php
include '../require/home_navbar.php';
?>

<!-- modal end -->

<div class="row row2">

<div class="leftcolumn">
    <div class="card">
      <!-- <h2>Categories</h2> -->
      <p id="btn1" class="Menu">>Categories (<?php echo $rows; ?>)</p>
      <div class="submenu" id="submenu">

      <?php

$query = "SELECT * FROM tbl_categories ORDER BY id ASC";

$res = $viewUser->get_query($query);

$num = $res->num_rows;

if ($num > 0) {

    while($row = $res->fetch_assoc()) {
      $cat_name = $row['cat_name'];
      $id = $row['id'];

      $qry = "SELECT category FROM tbl_stack WHERE category = '$cat_name'";
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
      <!-- =========================================================== -->
      <p id="btn2" class="Menu">>New Release</p>
      <div class="submenu" id="submenu2">

      <?php

$query = "SELECT * FROM tbl_categories ORDER BY id ASC";

$res = $viewUser->get_query($query);

$num = $res->num_rows;

if ($num > 0) {

    while($row = $res->fetch_assoc()) {
      $cat_name = $row['cat_name'];
      $id = $row['id'];

      $qry = "SELECT category FROM tbl_stack WHERE category = '$cat_name'";
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
      <!-- ===================================================================== -->
      <p id="btn3" class="Menu">>All time Favorites</p>
      <div class="submenu" id="submenu3">

      <?php

$query = "SELECT * FROM tbl_categories ORDER BY id ASC";

$res = $viewUser->get_query($query);

$num = $res->num_rows;

if ($num > 0) {

    while($row = $res->fetch_assoc()) {
      $cat_name = $row['cat_name'];
      $id = $row['id'];

      $qry = "SELECT category FROM tbl_stack WHERE category = '$cat_name'";
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
      <!-- ====================================================================================== -->
      <p id="btn4" class="Menu">>Best Sellers</p>
      <div class="submenu" id="submenu4">

      <?php

$query = "SELECT * FROM tbl_categories ORDER BY id ASC";

$res = $viewUser->get_query($query);

$num = $res->num_rows;

if ($num > 0) {

    while($row = $res->fetch_assoc()) {
      $cat_name = $row['cat_name'];
      $id = $row['id'];

      $qry = "SELECT category FROM tbl_stack WHERE category = '$cat_name'";
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
    </div>
  </div>

  <script>
    var btn1 = document.getElementById('btn1');
    var btn2 = document.getElementById('btn2');
    var btn3 = document.getElementById('btn3');
    var btn4 = document.getElementById('btn4');
    var submenu = document.getElementById('submenu');
    var submenu2 = document.getElementById('submenu2');
    var submenu3 = document.getElementById('submenu3');
    var submenu4 = document.getElementById('submenu4');
    

    btn1.onclick = function() {
      
      if (submenu.style.display === "none"){
        submenu.style.display = "block";
        submenu2.style.display = "none";
        submenu3.style.display = "none";
        submenu4.style.display = "none";        
      } else {
        submenu.style.display = "none";
      }
    }
    btn2.onclick = function() {
      if (submenu2.style.display === "none"){
        submenu.style.display = "none";
        submenu2.style.display = "block";
        submenu3.style.display = "none";
        submenu4.style.display = "none";        
      } else {
        submenu2.style.display = "none";
      }
    }
    btn3.onclick = function() {
      if (submenu3.style.display === "none"){
        submenu.style.display = "none";
        submenu2.style.display = "none";
        submenu3.style.display = "block";
        submenu4.style.display = "none";        
      } else {
        submenu3.style.display = "none";
      }
    }
    btn4.onclick = function() {
      if (submenu4.style.display === "none"){
        submenu.style.display = "none";
        submenu2.style.display = "none";
        submenu3.style.display = "none";
        submenu4.style.display = "block";        
      } else {
        submenu4.style.display = "none";
      }
    }
  </script>
  


  <div class="centercolumn">

  <?php
  
  if (isset($_GET['searchbtn']) || isset($_GET['query']))
  {
    $term = $_GET['query'];
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

      echo '<h3>Results: '.$num_result.' '.$item.' "'.$term.'"</h3>';
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

            ?>
    <div class="card">
      <h2><a style="color:#000;text-decoration:none;" href="<?php echo BASE_URL.'view/product_details.php?id='.$id;?>"><?php echo ucfirst($title); ?></a></h2>
      <h5 style="color:rgb(94, 92, 92)">by: <?php echo $title_desc; ?>,<?php echo $quantity ? ' (stock items : '.$quantity.' pieces)' : '' ; ?></h5>
      <a href="<?php echo BASE_URL.'view/product_details.php?id='.$id;?>">
      <?php 
        if ($image == "") {
          echo '<div class="fakeimg" style="height:300px;"></div>';
        }
        else {
          echo '<div><img style="width:100%;height:250px;" src="../'.$image.'"></div>';
        }
      ?>
      </a><br>
      <a href="" style="color:rgb(94, 92, 92)"><?php echo $some_text; ?></a>
      <p style="color:rgb(94, 92, 92)"><?php echo $price ? 'Price : Php '.$price : '' ; ?></p>
      <a class="seemore" href="<?php echo BASE_URL.'view/product_details.php?id='.$id;?>">See more +</a>
    </div>
    
    <?php
    $query = "SELECT * FROM tbl_ecommerce_config WHERE activated = '1'";
    $true = $viewUser->rows($query);

    if ($true) {
    ?>

  <div id="comm-content">
    <div class="bg-dark">
      <button class="order" id='btnbuy<?php echo $id; ?>'>Order now</button>
      <button class="cart" id='btncart<?php echo $id; ?>'>Add to Cart</button>
    </div>
  </div>

    <?php } ?>

  <script>
    var content = {
      buy: document.getElementById('btnbuy<?php echo $id; ?>'),
      cart: document.getElementById('btncart<?php echo $id; ?>')
    };

    content.cart.onclick = function() {
      var alrt = 'Product ' +<?php echo $id; ?> +' has been added to cart!';
      console.log(alrt);
      alert(alrt);
    }

    content.buy.onclick = function() {
      var alrt = 'New product sold! <?php echo $id;?>';
      console.log(alrt);
      alert(alrt);
    }
  </script>
              
            <?php

        }
    } 
    else {
        echo '<h3 style="color:green;">No Records Found </h3> &nbsp';   
        echo '<a href="'.BASE_URL.'index.php"> Go Back </a>'; 
    }
  }
  // ================================================================================================
  else if (isset($_GET['category'])) {
    $categ = $_GET['category'];

    $table_name = "tbl_stack";
    $query = "SELECT category FROM $table_name WHERE category = '$categ'";
    $res_row = $viewUser->get_query($query);
    $num_row = $res_row->num_rows;

    // tbl
    $query2 = "SELECT * FROM $table_name WHERE category = '$categ' ORDER BY id DESC";
    $res = $viewUser->get_query($query2);

if ($num_row > 0){

  echo '<h3>"'.ucfirst($categ).'"  ('.$num_row.' Items)</h3>';

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

    if (strlen($description) > 73) {
      $description = substr($description, 0, 73).'...';
    }
  ?>

    <div class="card">
      <h2><a style="color:#000;text-decoration:none;" href="<?php echo BASE_URL.'view/product_details.php?id='.$id;?>"><?php echo ucfirst($title); ?></a></h2>
      <h5 style="color:rgb(94, 92, 92)">by: <?php echo $title_desc; ?>,<?php echo $quantity ? ' (stock items : '.$quantity.' pieces)' : '' ; ?></h5>
      <a href="<?php echo BASE_URL.'view/product_details.php?id='.$id;?>">
      <?php 
        if ($image == "") {
          echo '<div class="fakeimg" style="height:300px;"></div>';
        }
        else {
          echo '<div><img style="width:100%;height:250px;" src="../'.$image.'"></div>';
        }
      ?>
      </a><br>
      <a href="" style="color:rgb(94, 92, 92)"><?php echo $some_text; ?></a>
      <p style="color:rgb(94, 92, 92)"><?php echo $price ? 'Price : Php '.$price : '' ; ?></p>
      <a class="seemore" href="<?php echo BASE_URL.'view/product_details.php?id='.$id;?>">See more +</a>
    </div>

    <?php
    $query = "SELECT * FROM tbl_ecommerce_config WHERE activated = '1'";
    $true = $viewUser->rows($query);

    if ($true) {
    ?>

  <div id="comm-content">
    <div class="bg-dark">
      <button class="order" id='btnbuy<?php echo $id; ?>'>Order now</button>
      <button class="cart" id='btncart<?php echo $id; ?>'>Add to Cart</button>
    </div>
  </div>

  <?php } ?>

  <script>
    var content = {
      buy: document.getElementById('btnbuy<?php echo $id; ?>'),
      cart: document.getElementById('btncart<?php echo $id; ?>')
    };

    content.cart.onclick = function() {
      var alrt = 'Product ' +<?php echo $id; ?> +' has been added to cart!';
      console.log(alrt);
      alert(alrt);
    }

    content.buy.onclick = function() {
      var alrt = 'New product sold! <?php echo $id;?>';
      console.log(alrt);
      alert(alrt);
    }
  </script>

  <!-- <div class="fakeimg" style="height:200px;"></div> -->
  <?php
  }
  }
  }
  else {
// ============================================================
  $data = "tbl_stack";
  $res = $viewUser->get_data($data);

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

    if (strlen($description) > 73) {
      $description = substr($description, 0, 73).'...';
    }
  ?>

    <div class="card">
      <h2><a style="color:#000;text-decoration:none;" href="<?php echo BASE_URL.'view/product_details.php?id='.$id;?>"><?php echo ucfirst($title); ?></a></h2>
      <h5 style="color:rgb(94, 92, 92)">by: <?php echo $title_desc; ?>,<?php echo $quantity ? ' (stock items : '.$quantity.' pieces)' : '' ; ?></h5>
      <a href="<?php echo BASE_URL.'view/product_details.php?id='.$id;?>">
      <?php 
        if ($image == "") {
          echo '<div class="fakeimg" style="height:300px;"></div>';
        }
        else {
          echo '<div><img style="width:100%;height:250px;" src="../'.$image.'"></div>';
        }
      ?>
      </a><br>
      <a href="" style="color:rgb(94, 92, 92)"><?php echo $some_text; ?></a>
      <p style="color:rgb(94, 92, 92)"><?php echo $price ? 'Price : Php '.$price : '' ; ?></p>
      <a class="seemore" href="<?php echo BASE_URL.'view/product_details.php?id='.$id;?>">See more +</a>
    </div>

    <?php
    $query = "SELECT * FROM tbl_ecommerce_config WHERE activated = '1'";
    $true = $viewUser->rows($query);

    if ($true) {
    ?>
  
  <div id="comm-content">
    <div class="bg-dark">
      <button class="order" id='btnbuy<?php echo $id; ?>'>Order now</button>
      <button class="cart" id='btncart<?php echo $id; ?>'>Add to Cart</button>
    </div>
  </div>
  
    <?php
    }
    ?>

  <script>
    var content = {
      buy: document.getElementById('btnbuy<?php echo $id; ?>'),
      cart: document.getElementById('btncart<?php echo $id; ?>')
    };

    content.cart.onclick = function() {
      var alrt = 'Product ' +<?php echo $id; ?> +' has been added to cart!';
      console.log(alrt);
      alert(alrt);
    }

    content.buy.onclick = function() {
      var alrt = 'New product sold! <?php echo $id;?>';
      console.log(alrt);
      alert(alrt);
    }
  </script>

  <!-- <div class="fakeimg" style="height:200px;"></div> -->
  <?php
  }
  }
  ?>

    <!-- modal image -->
    <!-- <div id="Modal<?php echo $id; ?>">
    <div id="myModal" class="modal">
      <span class="close">&times;</span>
        <img class="modal-content" id="img01">
      <div id="caption"></div>
    </div>
    </div> -->

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
  
  <div class="rightcolumn">
  
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
      <h3>Popular Post</h3>

  <?php 
    $query = "SELECT * FROM tbl_stack ORDER BY rand() LIMIT 3";
    $res = $viewUser->get_query($query);
    while ($row = $res->fetch_assoc()) {
      $img = $row['image'];
      $title = $row['title'];
      $id = $row['id'];

  ?>
  <div class="popular">
    <img src="../<?php echo $img; ?>"><br>
    <span class="tooltip"><a href="<?php echo BASE_URL.'view/product_details.php?id='.$id;?>">See more about <?php echo $title; ?></a></span>
    </div>
  <?php
    }
  ?>
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

</div>
<!-- parallax end here -->


</body>
</html>