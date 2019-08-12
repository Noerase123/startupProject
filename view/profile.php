<?php
// session_start();
include '../config.php';

include '../require/ajax/change_profile.php';

$name = $_SESSION['user']['name'];

$qry = "SELECT * FROM tbl_user WHERE username = '$name'";
$names = $viewUser->get_query($qry);
$count = $names->num_rows;

    if ($count == 0) {
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
        <a style="width:100%" href="<?php echo BASE_URL;?>view/profile.php?tab=contacts">Contact Details</a>
        <a style="width:100%" href="<?php echo BASE_URL;?>view/cart.php">Shopping Cart</a>
        <a style="width:100%" href="<?php echo BASE_URL;?>view/profile.php?tab=reviews">Reviews</a>
        <a style="width:100%" href="<?php echo BASE_URL;?>view/profile.php?tab=change_profile">Change Profile Picture</a>
        <a style="width:100%" href="<?php echo BASE_URL;?>view/profile.php?tab=change_pass">Change Password</a>
        
      </div>
    </div>
  </div>

  <?php
  // Summary of Details
    $name = $_SESSION['user']['name'];
    $tbl = "SELECT * FROM tbl_user_items WHERE `user_name` = '$name'";
    $res_order = $viewUser->get_query($tbl);
    
    $tbl = "SELECT * FROM tbl_deliver_process WHERE `user_name` = '$name'";
    $res_deliver = $viewUser->get_query($tbl);
    
    $tbl = "SELECT * FROM tbl_customer_received WHERE `user_name` = '$name'";
    $res_received = $viewUser->get_query($tbl);

    // ========================================

    $qry = "SELECT * FROM tbl_user WHERE username = '$name'";
    $birth = $viewUser->get_query($qry);
    foreach($birth as $bir) {
        $firstname = $bir['firstname'];
        $lastname = $bir['lastname'];
        $address = $bir['address'];
        $contact = $bir['contact_no'];
        $date = date("M d, Y", strtotime($bir['birthdate']));
    }

    $tbl2 = "SELECT * FROM tbl_prod_review WHERE rev_name = '$firstname'";
    $review = $viewUser->get_query($tbl2);

    
    
        $sql = "SELECT * FROM tbl_user WHERE username= '$name'";
        $user = $viewUser->get_query($sql);
        foreach($user as $row) {
            $image = $row['image'];
            // print_r($image);
        }
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
        <?php if (empty($image)) { ?>
        <div><img src="../image/sample-image.jpg" style="float:left;width:100px; height:100px;margin-right:20px;" alt=""></div>
        <?php } else { ?>
        <div><img src="../<?php echo $image; ?>" style="float:left;width:100px; height:100px;margin-right:20px;" alt=""></div>
        <?php } ?>
        <div><h2> <?php echo $firstname.' '.$lastname. ' (<small>'.$_SESSION['user']['name'].'</small>)';?></h2></div>
        <div><h4>Birthdate : <?php echo $date;?></h4></div><br>
        <button onclick="return document.getElementById('namebirth').style.display = 'block'">Edit Name & Birthdate</button>
        <br><br>

        <div class="nameoptions" id="namebirth">
        <form action="" method="post" id="change_profile_form">

            <label for="">Change Name : </label><input type="text" placeholder="First name.." name="change_firstname" id="change_firstname" required>
            <input type="text" placeholder="Last name.." name="change_lastname" id="change_lastname" required><br><br>
            
            <label for="">Change Birth : </label><input type="date" name="change_birth" id="change_birth" required><br><br>
            <input style="width:25%;background-color:green;" type="submit" value="Save" id="namebirth_btn"><br>

            <span class="response_change_namebirth" style="color:green;font-weight:bold;"></span><br>
        </form>
        </div>
        <div class="processpanel">
            <div class="panelp">
                <button id="orderedbtn">Ordered Pending</button><span class="arrow"></span><button id="delibtn" >Delivery Process</button><span class="arrow"></span><button id="receivedbtn">Items Received</button>
            </div>
             </div>
        <br><br>
        <div id="ordered">
        
        <h3>Ordered Details :</h3>
        <table>
            <tr class="menus">
                <th>Title</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Date</th>
            </tr>
    <?php
    foreach($res_order as $row) {
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

        <div id="delivery">
        
        <h3>Items to Deliver :</h3>
        <table>
            <tr class="menus">
                <th>Title</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Date</th>
            </tr>
    <?php
    foreach($res_deliver as $row) {
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

        <div id="received">
        
        <h3>Items Delivered/Received :</h3>
        <table>
            <tr class="menus">
                <th>Title</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Date</th>
            </tr>
    <?php
    foreach($res_received as $row) {
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
        
        </div>

        <?php } else if ($_GET['tab'] == 'change_profile') {?>
        
            <div class="content-summary">
        

        <h2>Change Profile Picture</h2>
        <div class="card">
        <center>

        <?php if (empty($image)) { ?>
        <div><img src="../image/sample-image.jpg" style="width:200px; height:200px;margin-right:20px;" alt=""></div>
        <?php } else { ?>
        <div><img src="../<?php echo $image; ?>" style="width:200px; height:200px;margin-right:20px;" alt=""></div>
        <?php } ?>
        <span style="color:green" class="response_change_profile"></span><br><br>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="profile_pic" id="profile_pic"><br><br>
            <input style="width:50%;background-color:green;" type="submit" value="Save" name="btn_profile" id="btn_profile">
        </form>
        </center>
        </div>
        </div>


        <?php } else if ($_GET['tab'] == 'change_pass') {?>

    <div class="content-summary">
        <?php if (empty($image)) { ?>
        <div><img src="../image/sample-image.jpg" style="float:left;width:100px; height:100px;margin-right:20px;" alt=""></div>
        <?php } else { ?>
        <div><img src="../<?php echo $image; ?>" style="float:left;width:100px; height:100px;margin-right:20px;" alt=""></div>
        <?php } ?>
        
        <div><h2> <?php echo $firstname.' (<small>'.$_SESSION['user']['name'].'</small>)';?></h2></div><br><br><br>

        <h3>Change Password :</h3>
        <form action="" method="POST" id="change_pass_form">

        <label for="">Old Password : </label><br>
        <input style="padding:10px;width:50%;" type="password" name="old_pass" id="old_pass"><br>

        <label for="">New Password : </label><br>
        <input style="padding:10px;width:50%;" type="password" name="new_pass" id="new_pass"><br>

        <label for="">Confirm New Password : </label><br>
        <input style="padding:10px;width:50%;" type="password" name="confirm_pass" id="confirm_pass"><br>
        
        <h4 class="response_change_pass"></h4>
        <input style="background-color:green;width:50%;" type="submit" id="submit_change_pass" value="Save">
        </form>
        </div>



        <?php } else if ($_GET['tab'] == 'reviews') { ?>

        <div class="content-summary">
        <?php if (empty($image)) { ?>
        <div><img src="../image/sample-image.jpg" style="float:left;width:100px; height:100px;margin-right:20px;" alt=""></div>
        <?php } else { ?>
        <div><img src="../<?php echo $image; ?>" style="float:left;width:100px; height:100px;margin-right:20px;" alt=""></div>
        <?php } ?>
        
        <div><h2> <?php echo $firstname.' (<small>'.$_SESSION['user']['name'].'</small>)';?></h2></div><br><br><br>

        <h3>Reviews :</h3>

        <table>
            <tr class="menus">
                <th>Item Name</th>
                <th>Title</th>
                <th>Message</th>
                <th>Date</th>
            </tr>
    <?php
    foreach($review as $row) {
        $title = $row['rev_title'];
        $message = $row['message'];
        $datee = $row['date_posted'];
        $ref_id = $row['ref_id'];
        $date = $viewUser->datetime($datee,2);

        $sql = "SELECT * FROM tbl_stack WHERE id = '$ref_id'";
        $pname = $viewUser->get_query($sql);
        foreach($pname as $row) {
            $nameuser = $row['title'];
        }

        ?>
            <tr>
                <th><h3><?php echo $nameuser; ?></h3></th>
                <th><h3><?php echo $title; ?></h3></th>
                <th><p><?php echo $message; ?></p></th>
                <th><p><?php echo $date; ?></p></th>
            </tr>
        <?php
    }
    ?>

            
        </table>
        
        </div>

        <?php } else if ($_GET['tab'] == 'contacts') {?>

<div class="content-summary">
    <?php if (empty($image)) { ?>
    <div><img src="../image/sample-image.jpg" style="float:left;width:100px; height:100px;margin-right:20px;" alt=""></div>
    <?php } else { ?>
    <div><img src="../<?php echo $image; ?>" style="float:left;width:100px; height:100px;margin-right:20px;" alt=""></div>
    <?php } ?>
    
    <div><h2> <?php echo $firstname.' (<small>'.$_SESSION['user']['name'].'</small>)';?></h2></div><br><br><br>

    <style>
        #contact_det {
            display:none;
        }
    </style>

    <h3>Contact Details :</h3>

    <h4>Contact No. : <?php echo $contact; ?></h4>
    <h4>Home Address : <?php echo $address; ?></h4>

    <button onclick="document.getElementById('contact_det').style.display = 'block'">Edit Detail</button>

    <div id="contact_det">
    <form action="" method="POST" id="change_contact_form">
    <label for="">Contact No. : </label><br>
    <input style="padding:10px;width:50%;" type="text" maxlength="11" name="contact" id="contact" required><br>
    <label for="">Home Address : </label><br>
    <input style="padding:10px;width:50%;" type="text" name="address" id="address" required><br>
    <h4 class="response_change_contacts"></h4>
    <input style="background-color:green;width:50%;" type="submit" id="submit_contact" name="submit_contact" value="Save">
    </form>
    </div>
    
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