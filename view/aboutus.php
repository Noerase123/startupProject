<?php
session_start();
include '../config.php';

$table = "tbl_parallax";
    
    $res = $viewUser->get_data($table);

    foreach ($res as $row) {
        $image1 = $row['image'];
        $image2 = $row['image2'];
        $image3 = $row['image3'];
        $id = $row['id'];
    }

    $table2 = "tbl_about";
    
    $res2 = $viewUser->get_data($table2);

    foreach ($res2 as $data) {
        $name = $data['name'];
        $some = $data['some_text'];
        $abouts = $data['description'];
        $img1 = $data['image1'];
        $img2 = $data['image2'];
        $img3 = $data['image3'];
        $pid = $data['id'];
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


<div class="parallax" style="background-image: url('../<?php echo $image1; ?>');">

<?php
include '../require/home_navbar.php';
?>

<?php 
  if (isset($_GET['query']) && isset($_GET['searchbtn'])) {
    header("location:".BASE_URL."index.php?query=".$_GET['query']."&searchbtn=");
  }
?>

<div style="background-color:rgb(255,255,255,0.6)" class="card">
<h1>About Us</h1>
</div>

<div class="row">

    <div class="picolumn">
    <img src="../<?php echo $img1; ?>">
    <img src="../<?php echo $img2; ?>">
    <img src="../<?php echo $img3; ?>">
    </div>

</div>

<div class="row">


  <?php 
    $about = "tbl_about";
    $res = $viewUser->get_data($about);
    while ($row = $res->fetch_assoc()) {
      $name = $row['name'];
      $some_text = $row['some_text'];
      $desc = $row['description'];
    }
  ?>

  <div class="column-content2">
    
    <div class="card">
      <h2><?php echo $name; ?></h2>
      
      <h5>Date Created : Jun 25, 2019</h5>
      
      <p><?php echo $some_text; ?></p>
      <p><?php echo $desc; ?></p>
    
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

</body>
</html>