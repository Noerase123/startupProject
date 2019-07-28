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
  <div class="card" style="background-color:rgba(255,255,255,0.8)">
  <h2>Checkout</h2>
  </div>
  </div>

  <div class="column-content" style="width:48%;">
    <div class="card" style="background-color:rgba(255,255,255,0.8)">
      <h3>Payment</h3>
      <div class="card">
        <h4>Total: P650.00</h4>
      </div>
    </div>
  </div>

  <div class="column-content" style="width:48%;float:right;">
    <div class="card">
      <h3>Methods of Payments</h3>
      <div class="card">
      <h4>Cash on Delivery</h4>
      </div>
      <div class="card">
      <h4>Credit/Debit Card</h4>
      </div>
    </div> 
  </div>


</div>



<?php 
include '../require/footer.php';
?>




</div>

</body>
</html>