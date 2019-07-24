<?php
include '../config.php';

$get_id = $_GET['id'];

$detail_tbl = "tbl_stack";

$id = array(
    'id' => $get_id
);

$res2 = $viewUser->select_where($detail_tbl,$id);

foreach ($res2 as $row) {
    $title = $row['title'];
    $title_desc = $row['title_desc'];
    $some_text = $row['some_text'];
    $desc = $row['description'];
    $category = $row['category'];
    $image = $row['image'];
    $date_ = $row['date_created'];
    $id = $row['id'];
    $price = $row['price'];

    $money = number_format($price,2);

    $date = $viewUser->datetime($date_);
}

$table = "tbl_parallax";
    
    $res = $viewUser->get_data($table);

    foreach ($res as $row) {
        $image1 = $row['image'];
        $image2 = $row['image2'];
        $image3 = $row['image3'];
        $id = $row['id'];
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
    <script src="main.js"></script>
    <script src="jquery-3.4.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.0.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

  
<?php
include '../require/header.php';
?>


<?php
include '../require/home_navbar.php';
?>

<div class="parallax" style="background-image: url('../<?php echo $image3; ?>');">


<?php 
  if (isset($_GET['query']) && isset($_GET['searchbtn'])) {
    header("location:".BASE_URL."index.php?query=".$_GET['query']."&searchbtn=");
  }
?>

<div style="background-color:rgb(255,255,255,0.6)" class="card">
<h1><?php echo strtoupper($title).' by <small>'.ucfirst($title_desc).'</small>'; ?></h1>
</div>


<div class="row">


<div class="column-details">
    
    <div class="card" style="background-color: rgba(255, 255, 255, 0.8);border-radius:10px;">
      <center><img src="../<?php echo $image; ?>" style="height:300px;"></center>
      
    </div>
    
  </div>  

  <div class="column-content">
    
    <div class="card">
      <h3 style="float:right;padding:10px;background-image: url('../image/carousel-2.jpg');width:100%;"><?php echo $money ? 'Price : Php '.$money : '' ; ?></h3>
      <h3><?php echo ucfirst($title); ?></h3>
      <h3><small>Author</small> : <?php echo ucfirst($title_desc); ?></h3>
      <h5>Date posted: <?php echo $date;?></h5>
      <p>Category : <?php echo $category; ?></p>
      <p>Tags : <?php echo $some_text; ?></p>
      <p style="overflow:auto;height:180px;"><span style="font-weight:bold;">Description</span> : <?php echo $desc; ?></p>
    </div>

    <?php
    $query = "SELECT * FROM tbl_ecommerce_config WHERE activated = '1'";
    $true = $viewUser->rows($query);

    if ($true) {
    ?>
    
    <div class="bg-dark">
      <button class="order" id='btnbuy<?php echo $id; ?>'>Order now</button>
      <button class="cart" id='btncart<?php echo $id; ?>'>Add to Cart</button>
    </div>

    <?php
    }
    ?>
    
  </div>
    
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


  </div>

  <br><br>

  </div>

<div class="parallax" style="background-image: url('../image/carousel-3.jpg');">

<div class="row">
  <div class="centercolumn">
    <div class="card" style="background-color:rgb(255,255,255,0.6);">
      <h1>More like this</h1>
    </div>
  </div>
  </div>

  <div style="overflow:hidden" class="row">
    
    <?php
      $qry = "SELECT * FROM tbl_stack WHERE category = '$category' ORDER BY rand() LIMIT 4";
      $res = $viewUser->get_query($qry);
      while ($row = $res->fetch_assoc()){

        $title = $row['title'];
        $image = $row['image'];
        $author = $row['title_desc'];
        $id = $row['id'];
      
    ?>
    <div class="leftcolumn">
      <div class="card" style="border-radius:10px;">
        <h2><?php echo $title; ?></h2>
        <h5>by: <?php echo $author; ?></h5>
        <div><a href="<?php echo BASE_URL.'view/product_details.php?id='.$id;?>"><img style="width:100%;height:250px;" src="../<?php echo $image; ?>"></a></div>
      </div>
    </div>

    <?php } ?>
    
  </div>
  <br>
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


</body>
</html>