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
  <h3>Dashboard - Settings</h3>
</div>


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

<!-- new -->
<div class="centercolumn">

<div class="card">

    <form action="" method="post" id="form">
        <h3>Options 1</h3>

        <table>
            <tr>
                <th style="width:10%;">
                <label class="switch">
                <input type="checkbox" id="myCheckbox" onchange="toggleCheck()" checked>
                <span class="slider round"></span>
                </label>
                <a id="aLink" href="">Link</a>
                </th>
                <th style="width:5%;"></th>
                <th><p style="float:left;">E-commerce Website</p></th>
            </tr>
            <tr>
                <th>
                    <label class="switch">
                    <input type="checkbox" name="profile">
                    <span class="slider round"></span>
                    </label>
                </th>
                <th style="width:5%;"></th>
                <th><p style="float:left;">Profile Website</p></th>
            </tr>
            
            <tr>
                <th>
                    <button id="on" class="on">On</button>
                    <button id="off" class="off">Off</button>
                </th>
                <th style="width:5%;"></th>
                <th><p style="float:left;">Add E-commerce Config</p></th>
            </tr>
        </table> 
    </form>

</div>

</div>

<!-- old -->
<div class="centercolumn">

<div class="card">

    <form action="" method="post" id="form">
        <h3>Options 2</h3>

        <table border=1>
            <tr>
                <th style="width:10%;">
                    <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                    </label>
                </th>
                <th style="width:10%;"></th>
                <th><p>E-commerce Website</p></th>
            </tr>
            <tr>
                <th>
                    <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                    </label>
                </th>
                <th style="width:10%;"></th>
                <th><p>Profile Website</p></th>
            </tr>
            
            <tr>
                <th>
                    <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                    </label>
                </th>
                <th style="width:10%;"></th>
                <th><p>Create E-commerce Config</p></th>
            </tr>
        </table>
            
    </form>

</div>

</div>
  
  </div>

<?php } ?>

   <script>
        function toggleCheck() {
            if(document.getElementById("myCheckbox").checked === true){
                document.getElementById("aLink").style.display = "block";
            } else {
                document.getElementById("aLink").style.display = "none";
            }
        }
    </script>

</body>
</html>