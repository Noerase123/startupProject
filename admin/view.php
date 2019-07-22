<?php
include '../config.php';

$table = "tbl_stack";

$id = array(
    'id' => $_GET['id']
);

$res = $viewUser->select_where($table, $id);

foreach ($res as $data) {

    $title = $data['title'];
    $title_desc = $data['title_desc'];
    $some_text = $data['some_text'];
    $desc = $data['description'];
    $image = $data['image'];
    $category = $data['category'];
    $datee = $data['date_created'];
    $price = $data['price'];
    $quantity = $data['quantity'];
    $admin = "admin";

    $price2 = number_format($price,2);
    $quantity2 = number_format($quantity);
    
    $date = $viewUser->datetime($datee);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Test Website - <?php echo ucfirst($admin); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/admin_main.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="../css/carousel.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="../css/admin.css" />
    <script src="main.js"></script>
    <script src="jquery-3.4.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.0.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<?php 
include '../require/admin_navbar.php';
?>

<div class="header">
  <h3>Dashboard - View</h3>
</div>

<!-- modal end -->

<div class="row">

  <div class="homecolumn create">

<br>
  <div class="header">
  <h3 class="header-info" style="color:green">View your data.</h3>
  </div>

    <div class="item">

    <form action="" method="post">
      <h2>Title : <?php echo $title; ?></h2>

      <h4>Author(s) : <?php echo $title_desc; ?></h4>

      <h4>Category : <?php echo $category == "Select category" ? 'None' : $category ; ?></h4>
      
      <h5>Price : <?php echo $price2; ?></h5>

      <h5>Quantity : <?php echo $quantity2; ?></h5>
      
      <h5>Date Created : <?php echo $date; ?></h5>
      
      <h5>Date Updated : <?php echo $date; ?></h5>
      
      <?php 
        if (empty($image)) {
          echo '<div class="fakeimg" style="height:300px;"></div>';
        }
        else {
          echo '<img style="width:100%;height:300px;" src="../'.$image.'">';
        }
      ?>
      
      <br>
      
      <h5>Some Text : <?php echo $some_text; ?></h5>

      <h5>Description : <?php echo $desc; ?></h5>
      
      <a href="<?php echo ADMIN_URL; ?>edit.php?id=<?php echo $_GET['id'];?>" id="update"> Update </a>
      <a onclick="return confirm('Are you sure?')" href="<?php echo ADMIN_URL; ?>delete.php?id=<?php echo $_GET['id'];?>" id="delete"> Delete </a>
      <a href="<?php echo ADMIN_URL; ?>index.php"> Cancel </a>
     
      
    </form>
    </div>
    
  </div>
  
</body>
</html>

    
    <!-- select/////////////////////////////////////////////////////////////////////// -->
    <?php
}
?>