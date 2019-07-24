<?php

  $table = "tbl_web_content";
  $res = $viewUser->get_data($table);

  foreach($res as $row) {
    $logo = $row['home_logo'];
    $header_image = $row['header_image'];
  }
?>

<div style="background-image: url('../<?php echo $header_image; ?>');" id="header">
    <h1 style="margin:15px 0px 15px 0px; text-align:center;"><img src="../<?php echo $logo; ?>" style="max-height:70px; max-width:300px;"></h1>
  </div>  