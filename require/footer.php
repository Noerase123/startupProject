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

    <script src="<?php echo BASE_URL;?>js/jquery-3.3.3.js"></script>
    <script src="<?php echo BASE_URL;?>js/jquery.min.js"></script>
    <script src="<?php echo BASE_URL; ?>js/jquery.validate.min.js"></script>

    <link href="<?php echo BASE_URL; ?>css/font-awesome.css" rel="stylesheet" type="text/css" /> 



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

$(document).ready(function() {
  $("#form_login").submit(function(event) {
    event.preventDefault();
    var username = $("#username").val();
    var password = $("#password").val();
    var login = $("#login").val();

    $(".response").load("<?php echo BASE_URL;?>require/ajax/login.php", {
      username: username,
      password: password,
      login: login
    });

    location.reload();
  });
});

</script>

<script>

var form = $('#bc_form');

$('#btncart').on('click', () => {
    form.submit(function(e)) {
    $(this).attr("disabled","disabled");
    e.preventDefault();
        
            $.ajax({
                type: 'POST',
                url: "<?php echo BASE_URL;?>require/ajax/cart_add.php",
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

<script>
    var btn1 = document.getElementById('btn1');
    var btn2 = document.getElementById('btn2');
    var btn3 = document.getElementById('btn3');
    var btn4 = document.getElementById('btn4');
    var submenu = document.getElementById('submenu');
    var submenu2 = document.getElementById('submenu2');
    var submenu3 = document.getElementById('submenu3');
    var submenu4 = document.getElementById('submenu4');
    

    btn1.onclick = function() {
      
      if (submenu.style.display === "none"){
        submenu.style.display = "block";
        submenu2.style.display = "none";
        submenu3.style.display = "none";
        submenu4.style.display = "none";        
      } else {
        submenu.style.display = "none";
      }
    }
    btn2.onclick = function() {
      if (submenu2.style.display === "none"){
        submenu.style.display = "none";
        submenu2.style.display = "block";
        submenu3.style.display = "none";
        submenu4.style.display = "none";        
      } else {
        submenu2.style.display = "none";
      }
    }
    btn3.onclick = function() {
      if (submenu3.style.display === "none"){
        submenu.style.display = "none";
        submenu2.style.display = "none";
        submenu3.style.display = "block";
        submenu4.style.display = "none";        
      } else {
        submenu3.style.display = "none";
      }
    }
    btn4.onclick = function() {
      if (submenu4.style.display === "none"){
        submenu.style.display = "none";
        submenu2.style.display = "none";
        submenu3.style.display = "none";
        submenu4.style.display = "block";        
      } else {
        submenu4.style.display = "none";
      }
    }
  </script>

  <script>
    var qty = document.getElementById("qty<?php echo $qty_id; ?>");
    var plusbtn = document.getElementById("plusbtn<?php echo $qty_id; ?>");
    var minusbtn = document.getElementById("minusbtn<?php echo $qty_id; ?>");

    plusbtn.onclick = function() {
      qty.value++;
    }
    minusbtn.onclick = function() {
      qty.value--;
    }
    
  </script>