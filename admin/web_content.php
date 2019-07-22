<?php
include '../config.php';

$admin = "admin";


if (isset($_POST['submit'])) {

        $v1 = rand(1111,9999);
        $v2 = rand(1111,9999);

        $v3 = $v1.$v2;
        $v3 = md5($v3);

        $fnm= $_FILES["logo1"]["name1"];
        $dst= "../uploads/".$v3.$fnm;
        $logo1= "uploads/".$v3.$fnm;
        move_uploaded_file($_FILES["logo1"]["tmp_name"],$dst);
        
        $fnm= $_FILES["logo2"]["name2"];
        $dst= "../uploads/".$v3.$fnm;
        $logo2= "uploads/".$v3.$fnm;
        move_uploaded_file($_FILES["logo2"]["tmp_name"],$dst);

    $update_id = array(
        'id' => 1
    );

    $update_array = array(
      'nav_menu1'         => $sqlUser->escapeString($_POST['menu1']),
      'nav_menu2'         => $sqlUser->escapeString($_POST['menu2']),
      'nav_menu3'         => $sqlUser->escapeString($_POST['menu3']),
      'nav_menu4'         => $sqlUser->escapeString($_POST['menu4']),
      'why_desc'         => $sqlUser->escapeString($_POST['whyus']),
      'footer_text'         => $sqlUser->escapeString($_POST['footer']),
      'nav_logo'         => $sqlUser->escapeString($logo1),
      'home_logo'         => $sqlUser->escapeString($logo2)
    );

    if ($sqlUser->update("tbl_web_content", $update_array, $update_id))
    {
      header("location:".ADMIN_URL."index.php?update_content=1");
    }
}
if (isset($_POST['cancel'])) {
    
    header("location:".ADMIN_URL."index.php?no_update_cont=1");
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
  <h3>Dashboard - Webpage Content</h3>
</div>


<!-- modal end -->

<?php

$tbl_name = "tbl_web_content";

$res = $viewUser->get_data($tbl_name);

while ($row = $res->fetch_assoc()) {
    
    $nav1 = $row['nav_menu1'];
    $nav2 = $row['nav_menu2'];
    $nav3 = $row['nav_menu3'];
    $nav4 = $row['nav_menu4'];
    $why_desc = $row['why_desc'];
    $nav_logo = $row['nav_logo'];
    $home_logo = $row['home_logo'];
    $footer = $row['footer_text'];
?>

<div class="row">

  <div class="leftcolumn">
    
    <div class="card">

        <form method="post" action="" id="form">
          <div>
              <label>Nav Menu 1</label>
              <input type="text" name="menu1" value="<?php echo ucfirst($nav1); ?>">
              <label>Nav Menu 2</label>
              <input type="text" name="menu2" value="<?php echo ucfirst($nav2); ?>">
              <label>Nav Menu 3</label>
              <input type="text" name="menu3" value="<?php echo ucfirst($nav3); ?>">
              <label>Nav Menu 4</label>
              <input type="text" name="menu4" value="<?php echo ucfirst($nav4); ?>">

          </div>

    </div>
  </div>

  <div class="centercolumn">

    <div class="card">

          <div>
              <label>Logo (navigation menu)</label><br>
              <img src="../<?php echo $nav_logo; ?>"><br>
              <input type="file" name="logo1"><br><br>

              <label>Logo (home)</label><br>
              <img src="../<?php echo $home_logo; ?>"><br>
              <input type="file" name="logo2"><br><br>
              
              <label>Why Us</label><br>
              <textarea style="height:100%; width:100%"  rows="10" cols="60" name="whyus" id="desc"><?php echo $why_desc; ?></textarea><br>
              <br>
              <label>Footer Text</label>
              <input type="text" name="footer" value="<?php echo $footer; ?>">
          </div>

    </div>

    </div>

    <div class="rightcolumn">

    <div class="card">
        <h2>Everything's okay?</h2>
            <center>
                <input type="submit" name="submit" value="Save" style="padding:10px 20px;">
                <input type="submit" name="cancel" value="Cancel" style="padding:10px 20px;">
            </center>

        </form>

    </div>

    </div>

  
  </div>

<?php } ?>

</body>
</html>