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
    $price = $data['price'];
    $quantity = $data['quantity'];
}

  if (isset($_POST['update']))
  {
        $fnm=$_FILES["image"]["name"];
        
        if ($fnm == "") {

          $update_array2 = array(
            'title'         => $sqlUser->escapeString($_POST['title']),
            'title_desc'    => $sqlUser->escapeString($_POST['titledesc']),
            'some_text'     => $sqlUser->escapeString($_POST['sometext']),
            'description'   => $sqlUser->escapeString($_POST['desc']),
            'category'   => $sqlUser->escapeString($_POST['cat']),
            'price'   => $sqlUser->escapeString($_POST['price']),
            'quantity'   => $sqlUser->escapeString($_POST['quantity'])
          );
    
          if ($sqlUser->update("tbl_stack", $update_array2, $id))
          {
            $get_id = $_GET['id'];
            // $id_get = md5($get_id);
            header("location:".ADMIN_URL."index.php?updated=".$get_id."_no_image_update");
          }

        } else {

        $v1 = rand(1111,9999);
        $v2 = rand(1111,9999);

        $v3 = $v1.$v2;
        $v3 = md5($v3);
        // $fnm = $_FILES["image"]["name"];
        $dst = "../uploads/".$v3.$fnm;
        $image_upload = "uploads/".$v3.$fnm;
        move_uploaded_file($_FILES["image"]["tmp_name"],$dst);

    $update_array = array(
      'title'         => $sqlUser->escapeString($_POST['title']),
      'title_desc'    => $sqlUser->escapeString($_POST['titledesc']),
      'image'         => $sqlUser->escapeString($image_upload),
      'some_text'     => $sqlUser->escapeString($_POST['sometext']),
      'description'   => $sqlUser->escapeString($_POST['desc']),
      'category'   => $sqlUser->escapeString($_POST['cat']),
      'price'   => $sqlUser->escapeString($_POST['price']),
      'quantity'   => $sqlUser->escapeString($_POST['quantity'])
    );

    if ($sqlUser->update("tbl_stack", $update_array, $id))
    {
      $get_id = $_GET['id'];
      header("location:".ADMIN_URL."index.php?updated=$get_id");
    }
        }
  
  }

  $admin = "admin";
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
  <h3>Dashboard - Update</h3>
</div>

<!-- modal end -->

<div class="row">

  <div class="homecolumn create">
  
  <br>
  <div class="header">
  <h3 class="header-info" style="color:green">Update your data.</h3>
  </div>

    <div class="item">

    <form action="" method="post">

      <h4>Select your category : <br><br>
        <select type="text" value="" name="cat">
          <option><?php echo $category == "Select category" ? 'None' : $category ; ?></option>
            <?php 
                $query = "SELECT * FROM tbl_categories ORDER BY id ASC";

                $res = $viewUser->get_query($query);

                while ($row = $res->fetch_assoc()) {

                  $dataArray[] = $row;

                  $cat = $row['cat_name'];

                  echo '<option>'.$cat.'</option>';
                }
            ?> 
        </select>
      </h4>

      <h2>Title :</h2>
      <h2><input type="text" name="title" value="<?php echo $title; ?>"></h2>

      <h5>Author(s) :</h5>
      <h5><input type="text" name="titledesc" style="width:50%;" value="<?php echo $title_desc; ?>"></h5>

    <?php
    $query = "SELECT * FROM tbl_ecommerce_config WHERE activated = '1'";
    $true = $viewUser->rows($query);

    if ($true) {
    ?>

      <p><span style="margin-right:300px;">Price :</span><span>Quantity :</span></p>
      <p>
        <input type="number" value="<?php echo $price; ?>" name="price" style="width:40%;padding:8px;font-size:15px;margin-right:80px;" id="title_desc" required>
        <input type="number" value="<?php echo $quantity; ?>" name="quantity" style="width:40%;padding:8px;font-size:15px;" id="title_desc" required>
      </p>

    <?php } ?>
      
      <?php 
        if (empty($image)) {
          echo '<div class="fakeimg" style="height:300px;"></div>';
        }
        else {
          echo '<img style="width:100%;height:300px;" src="../'.$image.'">';
        }
      ?>
      <br>
      <h5>Change Image :</h5>
      <input type="file" name="image">
      
      <h5>Some Text</h5>
      <input type="text" name="sometext" value="<?php echo $some_text; ?>">
      
      <h5>Description</h5>
      <textarea style="height:100%; width:100%"  rows="10" cols="60" name="desc"><?php echo $desc; ?></textarea>

      <a href="<?php echo ADMIN_URL;?>index.php" style="float:right;" name="cancel">Cancel</a>
      
      <input class="submit" type="submit" style="float:right" name="update" value="Update">
      
    </form>
    </div>
    
  </div>
  
</body>
</html>