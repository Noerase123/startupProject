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
    <a href="#header">
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
    $("#form_register").submit(function(e) {
      e.preventDefault();
      var email = $("#reg_username").val();
      var pass = $("#reg_password").val();
      var first = $("#reg_first").val();
      var last = $("#reg_last").val();
      var address = $("#reg_address").val();
      var birth = $("#reg_birth").val();
      var register = $("#register").val();
      var pass2 = $("#re-reg_password").val();
      
      $(".response").load("<?php echo BASE_URL;?>require/ajax/register.php" ,
      {
        email: email,
        pass: pass,
        pass2: pass2,
        first: first,
        last: last,
        address: address,
        birth: birth,
        register: register
      });

      // setTimeout(() => {
      //   window.location = "<?php echo BASE_URL; ?>view/profile.php?tab=summary";
      // }, 1000);
    
    // location.reload();
      // setTimeout(location.reload.bind(),2000);

    });
  });
</script>

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

      setTimeout(() => {
        location.reload();
      }, 1000);
      // setTimeout(location.reload.bind(),2000);
  });
});

</script>

<!-- <script>
  $(document).ready(function() {
    $("#change_profile_form").submit(function(e) {
      e.preventDefault();
      var btn_profile = $("#btn_profile").val();
      var prof_image = $("#file").val();

      $(".response_change_profile").load("<?php echo BASE_URL; ?>require/ajax/change_profile.php", 
      {
        btn_profile: btn_profile,
        prof_image: prof_image
      });

      // setTimeout(() => {
      //   location.reload();
      // }, 1000);

    });
  });
</script> -->

<script>
  $(document).ready(function() {
    $("#change_pass_form").submit(function(e) {
      e.preventDefault();
      var btn_change_pass = $("#submit_change_pass").val();
      var old_pass = $("#old_pass").val();
      var new_pass = $("#new_pass").val();
      
      $(".response_change_pass").load("<?php echo BASE_URL; ?>require/ajax/change_pass.php",
      {
        btn_change: btn_change_pass,
        old_pass: old_pass,
        new_pass: new_pass
      });
    });
  });
</script>

<script>
  $(document).ready(function() {
    $("#prod_form").submit(function() {
      var title = $("#title").val();
      var star = $("#star").val();
      var desc = $("#desc").val();
      var submit = $("#submit").val();
      
      $(".response_msg").load("<?php echo BASE_URL;?>review/ajax/prod_review.php",
      {
        title: title,
        star: star,
        desc: desc,
        submit : submit
      });

    });
  });
</script>

<script>

$(document).ready(function() {
  $("#delete_cart").click(function() {
    $(".deleted").load("<?php echo BASE_URL;?>require/ajax/cart_delete.php?id=<?php echo $qty_id;?>");
  });
});


// var form = $('#bc_form');

// $('#btncart').on('click', () => {
//     form.submit(function(e)) {
//     $(this).attr("disabled","disabled");
//     e.preventDefault();
        
//             $.ajax({
//                 type: 'POST',
//                 url: "<?php echo BASE_URL;?>require/ajax/cart_add.php",
//                 data: form.serialize(),
//                 success: function(data) {
        
//                 $(".response").text(data.content);
//                 },
//                 error: function(data) {

//                 $(".response").text("An error occurred");
//                 }
//             });
//     });
// });

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