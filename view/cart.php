<?php
// session_start();
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

  <div class="leftcolumn" style="width:100%;">
   <div class="card" style="background-color:rgba(255,255,255,0.8);">
    <h1>View Cart</h1>
   </div>
  </div>

  <div class="leftcolumn" style="width:15%;">
  <p></p>
  </div>

  <div class="column-content" style="width:70%;">
    
    <div class="card">
    <img src="../image/carousel-3.jpg" style="float:left;height:130px;width:140px;margin-right:10px;" alt="">
      <h3>Title <small>by: George Bush</small></h3>
      <p>Price: P500</p>
      <p>Quantity: 1 piece</p>
    </div>

    <div class="card" style="height:170px;">
    
    <div style="float:left;">
      <h4>Amount :</h4>
      <h4>Services charge :</h4>
      <h4 style="background-color:orange; width:740%;">Total Amount:</h4>
    </div>
    <div style="float:right;">
      <h4>P500.00</h4>
      <h4>P150.00</h4>
      <h4>P650.00</h4>
    </div>

    </div>
    <div class="checkout">
    <a href="<?php echo BASE_URL.'view/checkout.php';?>">Checkout</a>
    </div>

  </div>

  </div>

<div style="height:200px;"></div>


<?php 
include '../require/footer.php';
?>

</div><!-- parallax here -->

</body>
</html>