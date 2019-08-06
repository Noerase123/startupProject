<?php 

include '../../config.php';

$get_id = $_GET['id'];

$id = array(
    'id' => $get_id
);

$rest = $viewUser->select_where("tbl_stack", $id);
foreach($rest as $row) {
    $image = $row['image'];
    $title = $row['title'];
    $title_desc = $row['title_desc'];
    $price = $row['price'];
}

 $qty_add = 1;

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
          window.location = "<?php echo BASE_URL; ?>view/items.php";
        // window.location.reload();
      </script>
      <?php
   }

?>