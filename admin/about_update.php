<?php

include '../config.php';

$table = 'tbl_about';

$id = array(
    'id' => $_GET['id']
);

$res = $viewUser->select_where($table, $id);

foreach ($res as $data) {

    $title = $data['name'];
    $some_text = $data['some_text'];
    $img1 = $data['image1'];
    $img2 = $data['image2'];
    $img3 = $data['image3'];
    $desc = $data['description'];
}

include 'ajax/update_about.php';
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
<h1>Update your Abouts</h1>

<div style="background-color:#f1f1f1;padding:1px;"><h4>&nbsp &nbsp About Us > Update</h4></div>

    <div class="content">
        <div class="row">
            
            <div class="form">
            <span style="font-weight:bold;font-size:20px;color:green;" class="response"></span>
            <form action="" method="post" enctype="multipart/form-data" id="form">


      <h4>Images :</h4><small style="color:red;" id="title_error"></small>
      <div>
      <span><img src="../<?php echo $img1?>" style="height:100px; width:100px;margin-left:50px;" alt=""></span>
      <span><img src="../<?php echo $img2?>" style="height:100px; width:100px;margin-left:150px;" alt=""></span>
      <span><img src="../<?php echo $img3?>" style="height:100px; width:100px;margin-left:150px;" alt=""></span>
      </div>
      <input type="file" name="image1" id="image1">
      <input type="file" name="image2" id="image2">
      <input type="file" name="image3" id="image3">

      <h4>Title :</h4><small style="color:red;" id="title_error"></small>
      <h4><input type="text" value="<?php echo $title; ?>" name="name" id="name" ></h4>
      
      <h4>Some Text :</h4><small style="color:red;" id="title_desc_error"></small>
      <h4><input type="text" value="<?php echo $some_text; ?>" name="some_text" id="some_text" ></h4>
      
      <h4>Description :</h4><small style="color:red;" id="desc_error"></small>
      <textarea style="width:50%" rows="10" cols="60" name="desc" id="desc" ><?php echo $desc; ?></textarea>

      <div class="addbtns">
        <input class="submit" type="submit" name="update_about" id="addbtn" value="Update">
        <a href="<?php echo ADMIN_URL; ?>about.php" style="text-decoration:none;" name="cancel">Cancel</a>
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