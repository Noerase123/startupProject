<?php
session_start();
include '../config.php';

if (isset($_GET['add_review_success'])) {
  $success = "Message Request Sent";
}

$tbl = 'tbl_web_content';

$res = $viewUser->get_data($tbl);

while ( $row = $res->fetch_assoc()) {
  $footer = $row['footer_text'];
}

$table = "tbl_parallax";
    
    $res2 = $viewUser->get_data($table);

    foreach ($res2 as $row) {
        $image1 = $row['image'];
        $image2 = $row['image2'];
        $image3 = $row['image3'];
        $id = $row['id'];
    }


    if (isset($_POST['submit'])) {

        $create_review = array(
          'name' => $sqlUser->escapeString($_POST['name']),
          'description' => $sqlUser->escapeString($_POST['desc'])
        );

        if ($sqlUser->create("tbl_pending_reviews", $create_review)) {

          ?>
          <script type="text/javascript">
              alert("message request sent");
          </script>
          <?php

          header("location:" .BASE_URL. "view/community.php?add_review_success");
          
        }
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


<div class="parallax" style="background-image: url('../<?php echo $image2; ?>');">

<?php
include '../require/home_navbar.php';




  if (isset($_GET['query']) && isset($_GET['searchbtn'])) {
    header("location:".BASE_URL."index.php?query=".$_GET['query']."&searchbtn=");
  }
?>


<div class="row">

  <div class="leftcolumn">
  <p></p>
  </div>

  <div class="column-content">
    
<?php 
$tblbl = "tbl_reviews";

$res = $viewUser->get_data($tblbl);
foreach($res as $row) {
  
  $title = $row['name'];
  $desc = $row['description'];
  $datee = $row['date_created'];

  $date = $viewUser->datetime($datee);
?>
    
    <div class="card">

      <img src="../image/carousel-3.jpg" style="border-radius:100px;float:right;height:100px;width:100px;">
      <h2><?php echo $title; ?></h2>

      <h5>Date Posted : <?php echo $date; ?></h5>

      <!-- <p>Some text..</p> -->
      <p><?php echo $desc; ?></p>

    </div>

<?php } 

      if ($_SESSION['user'] == "John Isaac")
      {
    ?>

    <form action="" method="post">
    
    <div class="card">
      <h2><input type="text" name="name" placeholder="Write your name..." id=""></h2>

      <!-- <p><input type="text" name="some_text" placeholder="Write your subject..." id=""></p> -->

      <p><textarea name="desc" id="" cols="30" placeholder="Tell us about your thoughts..." rows="10"></textarea></p>

      <input style="width:100%;padding:10px;border: 1px solid #000;background-color:#ddd" type="submit" name="submit" value="Send Message">

    </div>
    
    </form>

      <?php } ?>
    
  
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