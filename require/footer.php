<?php 

$table = "tbl_web_content";

$res = $viewUser->get_data($table);

while($row = $res->fetch_assoc()) {

    $nav1 = $row['nav_menu1'];
    $nav2 = $row['nav_menu2'];
    $nav3 = $row['nav_menu3'];
    $nav4 = $row['nav_menu4'];
    $footer_image = $row['footer_image'];
    $text_display = $row['text_display'];

    $footer = $row['footer_text'];
}

?>
<div class="footer">
    <div style="float:left;width:25%;">
    <a href="<?php echo BASE_URL; ?>">
    <img src="../<?php echo $footer_image; ?>" style="height:50px; width:130px;">
    </a>
    <p><?php echo ucfirst($text_display);?>.</p>
    </div>

    <div style="float:left;width:50%;">
    <h3>Follow Us</h3>
      <div class="icons">
          <a href="#facebook"><i class="fa fa-facebook"></i></a>
          <a href="#instagram"><i class="fa fa-instagram"></i></a>
          <a href="#twitter"><i class="fa fa-twitter"></i></a>
          <a href="#tumblr"><i class="fa fa-tumblr"></i></a>
          <a href="#youtube"><i class="fa fa-youtube"></i></a>
      </div>
        <p><?php echo $footer; ?>.</p>
    </div>

    <div>
    <p><a style="color:#000;text-decoration:none;" href="<?php echo BASE_URL; ?>view/items.php"><?php echo $nav1; ?></a></p>
    <p><a style="color:#000;text-decoration:none;" href="<?php echo BASE_URL; ?>view/community.php"><?php echo $nav2; ?></a></p>
    <p><a style="color:#000;text-decoration:none;" href="<?php echo BASE_URL; ?>view/contactUs.php"><?php echo $nav3; ?></a></p>
    <p><a style="color:#000;text-decoration:none;" href="<?php echo BASE_URL; ?>view/aboutus.php"><?php echo $nav4; ?></a></p>
    </div>
</div>



<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

</script>
<!-- modal end -->

<script>
var btn = document.getElementById('btn-nav');
var nav = document.getElementById('nav');

btn.onclick = function() {
    if (nav.style.display === "none"){
        nav.style.display = "block";
    } else {
        nav.style.display = "none";
    }
}

</script>