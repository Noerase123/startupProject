<?php 

// include '../../config.php';
if (isset($_SESSION['user']['name'])) {
  $session = $_SESSION['user']['name'];
}

 $qty_add = 1;
 if (isset($_POST['cart'])) {

   $add = array(
     'ref_id'         => $sqlUser->escapeString($get_id),
     'customer_name'  => $sqlUser->escapeString($_SESSION['user']['name']),
     'image'      => $sqlUser->escapeString($image),
     'title'      => $sqlUser->escapeString($title),
     'title_desc' => $sqlUser->escapeString($title_desc),
     'price'      => $sqlUser->escapeString($price),
     'quantity'      => $sqlUser->escapeString($qty_add)
   );

   $res = $sqlUser->create("tbl_cart",$add);

   if ($res) {

     ?>
     <script>
       window.location.href="<?php echo BASE_URL.'view/product_details.php?id='.$get_id; ?>";
     </script>
     <?php
   }

 }

 if (isset($_POST['buy'])) {
   
  ?>
  <script>
    window.location.href="<?php echo BASE_URL.'view/checkout.php?session='.$session.'&direct_id='.$get_id; ?>";
  </script>
  <?php
 }
?>