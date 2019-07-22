<?php
include '../config.php';

$admin = "admin";


if (isset($_POST['save_contact'])) {

    $id = array(
        'id' => 1
    );

    $update_array = array(
      'address'         => $sqlUser->escapeString($_POST['address']),
      'tel_no'         => $sqlUser->escapeString($_POST['telno']),
      'fax_no'         => $sqlUser->escapeString($_POST['faxno']),
      'mobile_no'         => $sqlUser->escapeString($_POST['mobileno']),
      'email'         => $sqlUser->escapeString($_POST['email'])
    );

    if ($sqlUser->update("tbl_contact_info", $update_array, $id))
    {
      header("location:".ADMIN_URL."index.php?update_contactUs=1");
    }
}
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
    <link rel="stylesheet" type="text/css" media="screen" href="../css/login.css" />
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
  <h3>Dashboard - Contact Details</h3>
</div>

<?php
include '../require/admin_header.php';
?>


<!-- modal end -->

<?php

$tbl_name = "tbl_contact_info";

$res = $viewUser->get_data($tbl_name);

while ($row = $res->fetch_assoc()) {
    
    $address = $row['address'];
    $tel = $row['tel_no'];
    $fax = $row['fax_no'];
    $mobile = $row['mobile_no'];
    $email = $row['email'];
?>

<div class="row">

  <div class="homecolumn create">

    <div class="item">

        <form action="" method="post" id="form">

            <label>Address :</label>
            <input type="text" name="address" value="<?php echo $address; ?>">
            <label>Tel. No. :</label>
            <input type="text" name="telno" value="<?php echo $tel; ?>">
            <label>Fax. No. :</label>
            <input type="text" name="faxno" value="<?php echo $fax; ?>">
            <label>Mobile. No. :</label>
            <input type="text" name="mobileno" value="<?php echo $mobile; ?>">
            <label>Email :</label>
            <input type="text" name="email" value="<?php echo $email; ?>">
            
            <input class="submit" type="submit" name="save_contact" style="float:right" value="Save">
                
            <a href="<?php echo ADMIN_URL; ?>index.php" style="float:right;" name="cancel">Cancel</a>
      
        </form>

    </div>

  </div>
  
  </div>

<?php } ?>

</body>
</html>