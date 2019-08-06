<?php
// session_start();
include '../config.php';

if (!isset($_SESSION['user']['name'])) {
    header("location:".BASE_URL."view/items.php");
}


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

    <style>
        .prof_con .logout{
            float:right;
            padding:10px;
            border:none;
            border-radius:10px;
            background-color:maroon;
            color:#fff;
            text-decoration:none;
        }
        table th{
            border: 1px solid #000;
        }
        table tr th {
            width:10%;
        }
    </style>
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
      <p id="btn1" class="Menu">>Profile Settings</p>
      <div class="submenu" id="submenu">

        <a style="width:100%" href="<?php echo BASE_URL;?>view/profile.php?tab=summary">Summary of Details</a>
        <a style="width:100%" href="<?php echo BASE_URL;?>view/cart.php">Shopping Cart</a>
        <a style="width:100%" href="<?php echo BASE_URL;?>view/profile.php?tab=reviews">Reviews</a>
        <a style="width:100%" href="<?php echo BASE_URL;?>view/profile.php?tab=change_profile">Change Profile Picture</a>
        <a style="width:100%" href="<?php echo BASE_URL;?>view/profile.php?tab=change_pass">Change Password</a>
        
      </div>
    </div>
  </div>

  <?php
    $name = $_SESSION['user']['name'];
    $tbl = "SELECT * FROM tbl_user_items WHERE `user_name` = '$name'";
    $res = $viewUser->get_query($tbl);
    
  ?>

  <div class="centercolumn rows">
    <div class="card">

    <div class="prof_con">
        <div><a class="logout" style="" href="<?php echo BASE_URL;?>require/logout.php">Logout</a></div>
        
        <?php
        if (isset($_GET['tab'])) {

            if ($_GET['tab'] == 'summary') {
        ?>
        <div class="content-summary">
        <div><img src="../image/sample-image.jpg" style="float:left;width:100px; height:100px;margin-right:20px;" alt=""></div>
        <div><h2> <?php echo ucfirst($_SESSION['user']['name']);?></h2></div><br><br><br>

        <h3>Summary Details :</h3>

        <table>
            <tr class="menus">
                <th>Title</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Date</th>
            </tr>
    <?php
    foreach($res as $row) {
        $title = $row['title'];
        $price = $row['price'];

        $pricee = number_format($price,2);
        $qty = $row['quantity'];
        $datee = $row['date_created'];

        $date = $viewUser->datetime($datee,2);

        ?>
            <tr>
                <th><h3><?php echo $title; ?></h3></th>
                <th><p>P <?php echo $pricee; ?></p></th>
                <th><p><?php echo $qty; ?></p></th>
                <th><p><?php echo $date; ?></p></th>
            </tr>
        <?php
    }
    ?>

            
        </table>
        
        </div>

        <?php } else if ($_GET['tab'] == 'change_profile') {?>
        
            <div class="content-summary">
        

        <h2>Change Profile Picture</h2>
        <div class="card">
        <center>
        <img src="../image/sample-image.jpg" style="width:200px; height:200px;margin-right:20px;" id="prof_image_ui" alt=""><br><br>
        <input type="file" name="prof_image" id="prof_image"><br><br>
        <input style="background-color:green;width:50%;" type="submit" value="Save">
        </center>
        
        </div>
        

        </div>

        <?php } else if ($_GET['tab'] == 'change_pass') {?>

    <div class="content-summary">
        <div><img src="../image/carousel-3.jpg" style="float:left;width:100px; height:100px;margin-right:20px;" alt=""></div>
        <div><h2> <?php echo $_SESSION['user']['name'];?></h2></div><br><br><br>

        <h3>Change Password :</h3>
        <input style="padding:10px;width:50%;" type="text" name="change_pass" id="change_pass"><br><br>
        <input style="background-color:green;width:50%;" type="submit" value="Save">
        </div>



        <?php } else if ($_GET['tab'] == 'reviews') { ?>

            <div class="content-summary">
        <div><img src="../image/carousel-3.jpg" style="float:left;width:100px; height:100px;margin-right:20px;" alt=""></div>
        <div><h2> <?php echo $_SESSION['user']['name'];?></h2></div><br><br><br>

        <h3>Reviews :</h3>

        <table>
            <tr class="menus">
                <th>Title</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Date</th>
            </tr>
    <?php
    foreach($res as $row) {
        $title = $row['title'];
        $price = $row['price'];

        $pricee = number_format($price,2);
        $qty = $row['quantity'];
        $datee = $row['date_created'];

        $date = $viewUser->datetime($datee,2);

        ?>
            <tr>
                <th><h3><?php echo $title; ?></h3></th>
                <th><p>P <?php echo $pricee; ?></p></th>
                <th><p><?php echo $qty; ?></p></th>
                <th><p><?php echo $date; ?></p></th>
            </tr>
        <?php
    }
    ?>

            
        </table>
        
        </div>


        <?php } } ?>
        
    </div>

    </div>
    
  </div>

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


</div>


<?php 
include '../require/footer.php';
?>

</div>
<!-- parallax end here -->


</body>
</html>