<?php

include '../config.php';

$table = 'tbl_web_content';

$id = array(
    'id' => $_GET['id']
);

$res = $viewUser->select_where($table, $id);

foreach ($res as $row) {
    $text_display = $row['text_display'];
    $footer_logo = $row['footer_image'];
    $footer = $row['footer_text'];
    $pid = $row['id'];
}

include 'ajax/update_footer.php';
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
<h1>Update your Footer</h1>

<div style="background-color:#f1f1f1;padding:1px;"><h4>&nbsp &nbsp Footer Settings > Update</h4></div>

    <div class="content">
        <div class="row">
            
            <div class="form">
            <span style="font-weight:bold;font-size:20px;color:green;" class="response"></span>
            <form action="" method="post" enctype="multipart/form-data" id="form">

      <h4 style="padding:10px; width:100%; background-color:#ddd">Footer Logo :</h4><small style="color:red;" id="title_desc_error"></small>
        <img src="../<?php echo $footer_logo; ?>" style="height:70px; width:120px;"><br>
        <input type="file" name="footer_image" id="">

      <h4 style="padding:10px; width:100%; background-color:#ddd">Text Display :</h4><small style="color:red;" id="desc_error"></small>
      <input type="text" value="<?php echo $text_display; ?>" name="text_display" id="text_display">
      
      <h4 style="padding:10px; width:100%; background-color:#ddd">Copyrights :</h4><small style="color:red;" id="title_error"></small>
      <h4><input type="text" value="<?php echo $footer; ?>" name="footer" id="footer" ></h4>


      <div class="addbtns">
        <input class="submit" type="submit" name="update_footer" id="addbtn" value="Update">
        <a href="<?php echo ADMIN_URL; ?>footer.php" style="text-decoration:none;" name="cancel">Cancel</a>
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