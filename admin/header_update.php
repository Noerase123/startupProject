<?php

include '../config.php';

$table = 'tbl_web_content';

$id = array(
    'id' => $_GET['id']
);

$res = $viewUser->select_where($table, $id);

foreach ($res as $row) {

    $nav1 = $row['nav_menu1'];
    $nav2 = $row['nav_menu2'];
    $nav3 = $row['nav_menu3'];
    $nav4 = $row['nav_menu4'];
    $nav_logo = $row['nav_logo'];
    $home_logo = $row['home_logo'];
    $why = $row['why_desc'];
    // $footer = $row['footer_text'];
    $pid = $row['id'];
}

include 'ajax/update_header.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="admin_css/main.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="main.js"></script>
</head>
<body>

<?php 
include 'require/nav.php';
?>

<div class="container">
    <br>
<h1>Update your Header</h1>

<div style="background-color:#f1f1f1;padding:1px;"><h4>&nbsp &nbsp Header Settings > Update</h4></div>

    <div class="content">
        <div class="row">
            
            <div class="form">
            <span style="font-weight:bold;font-size:20px;color:green;" class="response"></span>
            <form action="" method="post" enctype="multipart/form-data" id="form">

      <h4 style="padding:10px; width:100%; background-color:#ddd">Logos :</h4><small style="color:red;" id="title_desc_error"></small>
      <div style="">
        <p>Nav logo</p>
        <img src="../<?php echo $nav_logo; ?>" style="height:50px; width:100px;"><br>
        <input type="file" name="nav_image" id="">
        <p>Home logo</p>
        <img src="../<?php echo $home_logo; ?>" style="height:100px; width:200px;"><br>
        <input type="file" name="home_image" id="">
      </div>

      <h4 style="padding:10px; width:100%; background-color:#ddd">Nav Links :</h4><small style="color:red;" id="title_error"></small>
      <div style="margin:20px;">
      <h4>Nav Link 1 : <input type="text" value="<?php echo $nav1; ?>" name="nav1" id="nav1" ></h4>
      <h4>Nav Link 2 : <input type="text" value="<?php echo $nav2; ?>" name="nav2" id="nav2" ></h4>
      <h4>Nav Link 3 : <input type="text" value="<?php echo $nav3; ?>" name="nav3" id="nav3" ></h4>
      <h4>Nav Link 4 : <input type="text" value="<?php echo $nav4; ?>" name="nav4" id="nav4" ></h4>
      </div>
      
      <!-- <h4 style="padding:10px; width:100%; background-color:#ddd">Copyrights :</h4><small style="color:red;" id="title_error"></small>
      <h4><input type="text" value="<?php echo $footer; ?>" name="footer" id="footer" ></h4> -->

      <h4 style="padding:10px; width:100%; background-color:#ddd">Description (why us) :</h4><small style="color:red;" id="desc_error"></small>
      <textarea style="width:50%" rows="10" cols="60" name="desc" id="desc" ><?php echo $why; ?></textarea>

      <div class="addbtns">
        <input class="submit" type="submit" name="update_header" id="addbtn" value="Update">
        <a href="<?php echo ADMIN_URL; ?>header.php" style="text-decoration:none;" name="cancel">Cancel</a>
      </div>
    </form>
      </div>
        
                
            
    </div>
    </div>

    
</div>


<script>

    var form = $('#form');
    
    $('#addbtn').on('click', () => {

        form.submit(function(e)) {
        $(this).attr("disabled","disabled");
        e.preventDefault();
            
                $.ajax({
                    type: 'POST',
                    url: "ajax/create.php",
                    data: form.serialize(),
                    success: function(data) {
            
                    $(".response").text(data.content);
                    },
                    error: function(data) {

                    $(".response").text("An error occurred");
                    }
                });
        });
    });

</script>
    
</body>
</html>