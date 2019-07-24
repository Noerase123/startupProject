<?php

include '../config.php';

$table = 'tbl_contact_info';

$id = array(
    'id' => $_GET['id']
);

$res = $viewUser->select_where($table, $id);

foreach ($res as $data) {

        $add = $data['address'];
        $tel = $data['tel_no'];
        $fax = $data['fax_no'];
        $mobile = $data['mobile_no'];
        $email = $data['email'];
        $pid = $data['id'];
}

include 'ajax/update_contact.php';
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
<h1>Update your Contact Info</h1>

<div style="background-color:#f1f1f1;padding:1px;"><h4>&nbsp &nbsp Contact Us > Update</h4></div>

    <div class="content">
        <div class="row">
            
            <div class="form">
            <span style="font-weight:bold;font-size:20px;color:green;" class="response"></span>
            <form action="" method="post" enctype="multipart/form-data" id="form">

      <h4>Address :</h4><small style="color:red;" id="title_error"></small>
      <h4><input type="text" value="<?php echo $add; ?>" name="add" id="add" ></h4>
      
      <h4>Telephone Number :</h4><small style="color:red;" id="title_desc_error"></small>
      <h4><input type="text" value="<?php echo $tel; ?>" name="tel" id="telno" ></h4>
      
      <h4>Fax Number :</h4><small style="color:red;" id="title_desc_error"></small>
      <h4><input type="text" value="<?php echo $fax; ?>" name="fax" id="faxno" ></h4>
      
      <h4>Mobile Number :</h4><small style="color:red;" id="title_desc_error"></small>
      <h4><input type="text" value="<?php echo $mobile; ?>" name="mobile" id="mobileno" ></h4>
      
      <h4>Email Address :</h4><small style="color:red;" id="title_desc_error"></small>
      <h4><input type="text" value="<?php echo $email; ?>" name="email" id="email" ></h4>
      
      <div class="addbtns">
        <input class="submit" type="submit" name="update_contact" id="addbtn" value="Update">
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