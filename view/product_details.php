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
    $quantity = $row['quantity'];

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
    <!-- <script src="jquery-3.4.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script> -->
    
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
      <center><img src="../<?php echo $image; ?>" style="width:300px;height:400px;"></center>
      
    </div>
    
  </div>  

  <div class="column-content">
    
    <div class="card">
      <h3 style="float:right;padding:10px;background-image: url('../image/carousel-2.jpg');width:100%;"><?php echo $money ? 'Price : Php '.$money : '' ; ?></h3>
      <h3 style="float:right;padding:10px;background-image: url('../image/carousel-2.jpg');width:100%;"><?php echo $quantity ? 'Pieces : '.$quantity : '' ; ?></h3>
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
      <form action="" method="post" id="bc_form">
        <input class="order" id="btnbuy" type="submit" name="buy" value="Buy now">
        <input class="cart" id="btncart" type="submit" name="cart" value="Add to Cart">
        <span class=".response"></span>
      </form>
    </div>

    <?php
    }
    include '../require/ajax/cart_add.php';
    ?>
    
  </div>
    
  </div>

  <br><br>

  </div>

<div class="parallax" style="background-image: url('../<?php echo $image2;?>');">

<div class="row">
  <div class="centercolumn" style="background-color:rgb(255,255,255,0.6);width:100%;">
    <h2>Product Ratings</h2>  
  </div>
</div>

<div class="row">

<div class="leftcolumn" style="width:50%;margin-top:10px;overflow:auto;height:500px;">

<?php
    // $view = $viewUser->select_where("tbl_prod_review", $get_id);

  $tbl = "SELECT * FROM tbl_prod_review WHERE ref_id = $get_id ORDER BY id DESC";
  $res = $viewUser->get_query($tbl);
  $num = $res->num_rows;
  if ($num > 0) {
  foreach($res as $row) {
    $name = $row['rev_name'];
    $title = $row['rev_title'];
    $message = $row['message'];
    $star_ = $row['rev_star'];
    $rev_id = $row['id'];
    // $rev_image = $row['rev_image'];
    // $date = $row['date_posted'];
    $sql2 = "SELECT * FROM tbl_user WHERE firstname = '$name'";
    $res_image = $viewUser->get_query($sql2);
    foreach($res_image as $row) {
      $rev_image = $row['image'];
    }

    $sql = "SELECT * FROM tbl_prod_review WHERE id = $rev_id";
    $res_date = $viewUser->get_query($sql);
    foreach($res_date as $row_date) {
      $date = $row_date['date_posted'];

      $timeago = $viewUser->timeago($date);
      
      // $timeago = time() - $date;
    }

?>

<div class="card">
<?php
if (isset($_SESSION['user']['name'])) {
if ($_SESSION['user']['firstname'] == $name) {
?>
<!-- <a id="edit_prod_review" style="cursor:pointer;" onclick="document.getElementById('edit_prod_review').style.display = 'block'">Edit</a> -->
<a id="delete_prod_review" href="../require/ajax/prev_delete.php?id=<?php echo $rev_id; ?>">Delete </a>
<?php } } ?>
<img src="../<?php echo $rev_image; ?>" style="border-radius:100px;float:right;height:100px;width:100px;">
<h2><?php echo $name;?> 
<span>( <?php 
if ($star_ > 5){
    for($i=0;$i<5;$i++) { 
      echo '<img src="../image/Star.png" alt="" style="height:20px;width:30px;">';
    }
}
else {
  for($i=0;$i<$star_;$i++) { 
    echo '<img src="../image/Star.png" alt="" style="height:20px;width:30px;">';
  }
} ?> <small>ratings )</small> </span></h2>
<h5>Date Posted : <?php echo $timeago; ?></h5>
<p style="color:#aaa;"><?php echo $title;?></p>
<p><?php echo $message; ?></p>
</div>

  <?php } } else { echo '<h2 style="color:#fff;">No Product review at the moment... </h2>';} ?>

</div>
<?php
if (isset($_SESSION['user']['name'])) {
?>
<div class="centercolumn">

    <div class="card rate" style="background-color:rgba(255,255,255,0.8);height:490px;">
    <h3>Rate the product</h3>
      <form action="" id="prod_form" method="post" enctype="multipart/form-data">
        <input type="text" name="title" placeholder="Write your Subject" id="title"><br>
        <!-- <label>How many star you like to give? </label><input style="width:10%;padding:10px;" type="number" name="star" id="star"><br><br> -->
        <label for="">How many star you like to give?</label>
        <select style="font-size:18px;padding:5px;" name="star" id="star">
        <option value="5">5</option>
        <option value="4">4</option>
        <option value="3">3</option>
        <option value="2">2</option>
        <option value="1">1</option>
        </select><br><br>
        
        <textarea name="message" id="message" cols="30" rows="10" placeholder="Message here..."></textarea>
        <input type="submit" value="Submit" name="submit" id="submit">
        <p class="response_msg"></p>
      </form>

      <?php
      include '../require/ajax/prod_review.php';
      ?>

    </div>
  </div>
<?php } ?>

  </div>
  
  <div class="row">

  <div class="centercolumn" style="background-color:rgb(255,255,255,0.6);width:100%;">
      <h2>More like this</h2>
  </div>

  <div class="row">
    
    <?php
      $qry = "SELECT * FROM tbl_stack WHERE category = '$category' ORDER BY rand() LIMIT 4";
      $res = $viewUser->get_query($qry);
      while ($row = $res->fetch_assoc()){

        $title = $row['title'];
        $image = $row['image'];
        $author = $row['title_desc'];
        $id = $row['id'];
      
    ?>
    <div class="leftcolumn morelike">
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