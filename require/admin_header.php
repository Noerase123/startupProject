<?php 
$tbl_name = "tbl_web_content";
    
$res = $viewUser->get_data($tbl_name);

while ($row = $res->fetch_assoc()) {
    
    $nav1 = $row['nav_menu1'];
    $nav2 = $row['nav_menu2'];
    $nav3 = $row['nav_menu3'];
    $nav4 = $row['nav_menu4'];
    
    $navi1 = ucfirst($nav1);
    $navi2 = ucfirst($nav2);
    $navi3 = ucfirst($nav3);
    $navi4 = ucfirst($nav4);

}
?>

<br>
<div class="header">
  <div class="headerspace">

  <div class="header_menu">
    <?php 
    if (!empty($nav1)) {
      echo '<a href="'.ADMIN_URL.'index.php">'.$navi1.'</a>';
    }
    if (!empty($nav2)) {
      echo '<a href="'.ADMIN_URL.'admin_reviews.php">'.$navi2.'</a>';
    }
    if (!empty($nav3)) {
      echo '<a href="'.ADMIN_URL.'admin_contact.php">'.$navi3.'</a>';
    }
    if (!empty($nav4)) {
      echo '<a href="'.ADMIN_URL.'admin_about.php">'.$navi4.'</a>';
    }
    ?>
  </div>
  

  </div>
</div>