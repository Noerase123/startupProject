<?php
// session_start();
include '../config.php';

if (!isset($_SESSION['user'])) {
  header("location:".BASE_URL );
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
?>

<?php 
  if (isset($_GET['query']) && isset($_GET['searchbtn'])) {
    header("location:".BASE_URL."index.php?query=".$_GET['query']."&searchbtn=");
  }
?>


<div class="row">

  <div class="column-content centre">
    
    <div class="card contact">
      <h2>VISIT US!</h2>
      
      <h4>Contact Details</h4>
      
      <?php
        $res = $viewUser->get_data("tbl_contact_info");

        while ($row = $res->fetch_assoc()) {
          
          $address = $row['address'];
          $tel = $row['tel_no'];
          $fax = $row['fax_no'];
          $mobile = $row['mobile_no'];
          $email = $row['email'];
        }
      ?>

      <p>Address : <?php echo $address; ?></p>
      <p>Telephone No. : <?php echo $tel; ?></p>
      <p>Fax No. : <?php echo $fax; ?></p>
      <p>Mobile No. : <?php echo $mobile; ?></p>
      <p>Email Address : <?php echo $email; ?></p>

      <h2>Email Us</h2>
      <form action="" method="post" id="form">
        <input type="text" name="name" placeholder="Name..">
        <input type="text" name="email" placeholder="Email Address..">
        <input type="text" name="mobile" placeholder="Mobile Number">
        <textarea style="height:100%; width:100%" placeholder="Message.." rows="10" cols="60" name="desc" id="desc"></textarea>
        <input style="background-color: rgba(169, 196, 255);border: 1px solid #000;padding:15px 20px;font-weight:bold;" type="submit" name="message_us" value="Send Message">
      </form>
      </div>
    
    </div>
  
  </div>

  </div>

<!-- </div> -->

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