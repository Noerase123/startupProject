<?php
// session_start();
include '../config.php';

if (isset($_SESSION['user']['name'])) {
    header("location:".BASE_URL."view/profile.php?tab=summary");
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
    <script src="../js/jquery-3.1.1.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

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

  <div class="card" style="background-color:rgba(255,255,255,0.7);">
    <h1>Signup</h1>
  </div>

  <div class="leftcolumn">
  <p></p>
  </div>

  <div class="centercolumn">
    
    <div class="card" style="background-color:rgba(255,255,255,0.7);">

      <style>
        .form-register input[type=text], .form-register input[type=date],
        .form-register input[type=email] {
            padding:10px;
            width:100%;
            margin-bottom:20px;
            margin-top:10px;
        }
      </style>

      <form action="" method="POST" class="form-register" id="form_register">
        
        <h2>Personal Information</h2>

        <label style="font-weight:bold;font-size:17px;">First name : </label><br>
        <span style="color:red;" class="first_error"></span>
        <input type="text" id="reg_first" placeholder="Enter your First name"><br>
        
        <label style="font-weight:bold;font-size:17px;">Last name : </label><br>
        <span style="color:red;" class="last_error"></span>
        <input type="text" id="reg_last" placeholder="Enter your Last name"><br>

        <label style="font-weight:bold;font-size:17px;">Address : </label><br>
        <span style="color:red;" class="address_error"></span>
        <input type="text" id="reg_address" placeholder="Enter your Address"><br>
        
        <label style="font-weight:bold;font-size:17px;">Birthdate : </label><br>
        <span style="color:red;" class="birth_error"></span>
        <input type="date" id="reg_birth" placeholder="Enter your Birthdate"><br>

        <h2>Security Information</h2>

        <label style="font-weight:bold;font-size:17px;">Username/Email : </label><br>
        <span style="color:red;" class="email_error"></span>
        <input type="email" id="reg_username" placeholder="Enter your Email"><br>
        
        <label style="font-weight:bold;font-size:17px;">Password : </label><br>
        <span style="color:red;" class="pw_error"></span>
        <input type="text" id="reg_password" placeholder="Enter your Password"><br>
        
        <label style="font-weight:bold;font-size:17px;">Confirm Password : </label><br>
        <span style="color:red;" class="re_enter_error"></span>
        <input type="text" id="re-reg_password" placeholder="Enter your Confirm Password"><br>

        <input type="submit" value="Login" id="register">

        <span class="response"></span>

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