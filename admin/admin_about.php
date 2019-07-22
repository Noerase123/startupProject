<?php

include '../config.php';

    $success_message = '';

  if (isset($_POST['create']))
  {
    $insert_array = array(
      'name'         => $sqlUser->escapeString($_POST['name']),
      'some_text'     => $sqlUser->escapeString($_POST['some_text']),
      'description'   => $sqlUser->escapeString($_POST['desc'])
    );

    $id_array = array(
        'id' => 1
    );

    if ($sqlUser->update("tbl_about", $insert_array, $id_array))
    {
      header("location:".ADMIN_URL."index.php?about_update=1");
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
  <h3>Dashboard - About</h3>
</div>

<!-- modal end -->

<div class="row">
  <div class="homecolumn create">
  
  
<?php
  include '../require/admin_header.php';
?>

    <div class="item">

        <?php 
            $tbl_about = "SELECT * FROM tbl_about WHERE id = '1'";
            $res = $viewUser->get_query($tbl_about);
            while ($row = $res->fetch_assoc()) {
                $name = $row['name'];
                $some_text = $row['some_text'];
                $desc = $row['description'];

            }
        ?>

    <form action="" method="post" enctype="multipart/form-data" id="form">
      
      <h4>Name of the Website :</h4><small style="color:red;" id="title_error"></small>
      <h4><input type="text" name="name" value="<?php echo $name; ?>" required></h4>
      
      <h4>Some Text :</h4><small style="color:red;" id="some_text_error"></small>
      <input type="text" name="some_text" value="<?php echo $some_text; ?>" required>
      
      <h4>Abouts :</h4><small style="color:red;" id="desc_error"></small>
      <textarea style="height:100%; width:100%"  rows="10" cols="60" name="desc" id="desc" required><?php echo $desc; ?></textarea>

      <a href="<?php echo ADMIN_URL; ?>index.php" style="float:right;" name="cancel">Cancel</a>
      
      <input class="submit" type="submit" style="float:right" name="create" value="Update">
      
    </form>
    
    </div>
    
  </div>

  <!-- <script type="text/javascript">
    $(function()) {

      var form = $('#form');

      form.submit(function(e)) {
        $(this).attr("disabled","disabled");
        e.preventDefault();

        $.ajax({
          type: form.attr("method"),
          url: form.attr("action"),
          data: form.serialize(),
          dataType: "json",
          success: function(data) {
            
            $(".response").text(data.content);
          },
          error: function(data) {

            $(".response").text("An error occurred");
          }
        });
      }
    }
  </script> -->
  
</body>
</html>