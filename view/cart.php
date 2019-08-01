<?php
// session_start();
include '../config.php';

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

$user = $viewUser->get_data("tbl_cart");
foreach($user as $row) {
  $name = $row['name'];
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
    <h1><i class="fa fa-cart-plus"></i>Cart</h1>
   </div>
  </div>

  <div class="leftcolumn" style="width:15%;">
  <p></p>
  </div>

  <div class="column-content" style="width:70%;">

    <div class="card">

      <div>
        <h3>Item Details <span style="margin-right:35%;"></span> 
            Price <span style="margin-right:13%;"></span>
            Quantity <span style="margin-right:12%;"></span>
            Total</h3>
            <span style="width:100%;background-color:yellow;" class="deleted"></span>
      </div>

    </div>
    
    <div class="card">

    <?php
      $query = "SELECT * FROM tbl_cart WHERE `name`='$name' ORDER BY id DESC";

      $res = $viewUser->get_query($query);

      $exist = $res->num_rows;


      if ($exist > 0) {
        
      if ($_SESSION['user'] == $name){

      foreach($res as $row) {
        $title = $row['title'];
        $author = $row['title_desc'];
        $price = $row['price'];
        $qty_id = $row['id'];

        $pricee = number_format($price,2);

    ?>
    
    <div class="cart-gap">
      <img src="../image/carousel-3.jpg" style="float:left;height:130px;width:140px;margin-right:10px;" alt="">

      <table>
        
        <tr>
          <th style="width:35%;height:130px;"><h3><?php echo $title.'<br><small>by: '.$author.'</small>'; ?></h3></th>
          <th><h3><?php echo 'P'.$pricee; ?></h3></th>
          <th><button style="font-size:25px;font-weight:bold;padding:5px;width:50px;" id="minusbtn<?php echo $qty_id; ?>">-</button> 
                    <input type="number" name="qty" id="qty<?php echo $qty_id; ?>" value="1" style="width:20%;padding:1px;font-size:25px;"> 
                   <button style="font-size:25px;font-weight:bold;padding:5px;width:50px;" id="plusbtn<?php echo $qty_id; ?>">+</button></th>
          <th><h3><?php echo 'P'.$pricee; ?></h3></th>
          <th><a style="padding:10px;" id="delete_cart" href="">Delete</a></th>
        </tr>
        <!-- <?php echo BASE_URL;?>require/ajax/cart_delete.php?id=<?php echo $qty_id;?> -->
      </table>

      <hr>
    </div>



    <?php } } } else { echo '<h2>No Item purchase.</h2>' ;} ?>
  
    </div>

    <div class="card" style="height:170px;">
    
    <?php
    $charge = 50;
    $count = $res->num_rows;
    $totcharge_ = $charge * $count;
    $totcharges = number_format($totcharge_,2);
    
    $query2 = "SELECT sum(price) FROM tbl_cart";
    $res = $viewUser->get_query($query2);
    $row = $res->fetch_assoc();
    $price_ = $row['sum(price)'];
    $total = number_format($price_,2);

    $total_price_ = $price_ + $totcharge_;
    $ptotal = number_format($total_price_, 2);
    ?>

    <div style="float:left;">
      <h4>Sub Amount :</h4>
      <h4>Services charge :</h4>
      <h4 style="background-color:orange; width:740%;">Total Amount:</h4>
    </div>
    <div style="float:right;">
      <h4>P<?php echo $total; ?></h4>
      <h4>P<?php echo $totcharges; ?></h4>
      <h4>P<?php echo $ptotal;?></h4>
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