<!-- ========================ADMIN NAV BAR ====================================== -->
<?php 
$tbl_name = "tbl_web_content";
    
$res = $viewUser->get_data($tbl_name);

while ($row = $res->fetch_assoc()) {
    
    $nav1 = $row['nav_menu1'];
    $nav2 = $row['nav_menu2'];
    $nav3 = $row['nav_menu3'];
    $nav4 = $row['nav_menu4'];

}
?>

<div class="navi">
  <a href="<?php echo ADMIN_URL; ?>index.php"><i class="fa fa-home"></i> Home</a>
  <a href="<?php echo ADMIN_URL; ?>web_content.php"><i class="fa fa-users"></i> Website-Content</a>
  <a href="<?php echo ADMIN_URL; ?>admin_addcategory.php"><i class="fa fa-plus"></i> Add Category</a>
  <a href="<?php echo ADMIN_URL; ?>admin_create.php"><i class="fa fa-plus"></i> Add <?php echo $nav1; ?></a>
  <a href="<?php echo ADMIN_URL; ?>admin_selection.php"><i class="fa fa-trash"></i> Select <?php echo $nav1; ?></a>
  <a style="float:right" href="<?php echo ADMIN_URL; ?>admin_option.php"><i class="fa fa-cog"></i> Options</a>
  <a style="float:right" href="#notifications"><i class="fa fa-bell"></i> Notification</a>
  
</div><br>