<?php
if (isset($_POST['delete']))
{
    $box = $_POST['select'];
    while (list($key,$val) = @each($box))
    {
    //   echo $val;
        $table = "tbl_cart";
        $sqlUser->delete($table, $val);

    }
    
    if (empty($box))
        {
          header("location:".ADMIN_URL."cart.php?no_select_delete");
        } else {
          header("location:".ADMIN_URL."cart.php?select_delete");
        }

    
}

?>

