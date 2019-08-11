<?php 
  // session_start();
  include '../config.php';

  if (isset($_SESSION['admin'])) {
    header("location:".ADMIN_URL."home.php");
  }
?>

<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Welcome to Admin</title>
        <link rel="stylesheet" href="admin_css/login.css/style.css">
    <script src="../js/jquery-3.3.1.js"></script>
  </head>
  <body>

    <div class="login" style="box-shadow: 0 10px 10px 10px rgba(0, 0, 0, 0.2);">
  <div class="login-triangle"></div>
  
  <h2 class="login-header">Log in</h2>

  <form action="" class="login-container" id="form" method="post">
    <p><input type="text" placeholder="Email" name="username" id="uname"></p>
    <p><input type="password" placeholder="Password" name="password" id="pw"></p>
    <p><input type="submit" value="Log in" name="login" id="login"></p>
    <p class="response"></p>
  </form>
</div>


    <script>
    $(document).ready(function(){
      $("#form").submit(function(event) {
        event.preventDefault();
        var username = $("#uname").val();
        var password = $("#pw").val();
        var login = $("#login").val();
        var response = $(".response");

        response.load("ajax/login.php", {
          username: username,
          password: password,
          login: login
        });
        
        $("#login").on("disable").css("opacity", 0.5);
        setTimeout(() => {
          location.reload();
        }, 1000);
        
      });
    });
    </script>


  </body>
</html>
