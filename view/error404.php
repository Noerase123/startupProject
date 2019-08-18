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
<!-- <div class="parallax" style="background-color: lightblue;"> -->


<!-- PARALLAX END============================================= -->

<?php
include '../require/home_navbar.php';
?>

<!-- modal end -->

<div class="row row2">

<p></p>

<div class="row">
    <br>

<center>
    <h1>error404 page not found...</h1>
    <img src="../image/carousel-3.jpg" style="height:300px;width:500px;" alt="">
</center>

</div>
  
</div>
</div>
<!-- parallax end here -->
  


<?php 
include '../require/footer.php';
?>



</body>
</html>