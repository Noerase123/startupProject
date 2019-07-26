<?php 
  session_start();
  include '../config.php';
?>

<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Welcome to Admin</title>
        <link rel="stylesheet" href="admin_css/login.css/style.css">    
  </head>
  <body>

    <div class="login" style="box-shadow: 0 10px 10px 10px rgba(0, 0, 0, 0.2);">
  <div class="login-triangle"></div>
  
  <h2 class="login-header">Log in</h2>

  <form action="" class="login-container" name="form1" method="post">
    <p><input type="text" placeholder="Email" name="username"></p>
    <p><input type="password" placeholder="Password" name="pw"></p>
    <p><input type="submit" name="submit1" value="Log in"></p>
  </form>
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <?php

      if (isset($_POST["submit1"]))
      {
        $username = $_POST['username'];
        $password = $_POST['pw'];

        $query = "SELECT firstname FROM tbl_user WHERE username = '$username' AND password = '$password'";

        $res = $viewUser->get_query($query);
        foreach($res as $row){
          $name = $row['firstname'];
          $_SESSION['admin'] = $name;
        }


        if (isset($_SESSION['admin'])) {
          if ($loginUser->login($username,$password)) {
  
            header("location:home.php?signedin");
          }
          else {
            echo '<h4 style="color:red;">Incorrect username or password</h4>';
          }
        }
        else {
          echo '<h4 style="color:red;">User not found</h4>';
        }
        
        
      }
    ?>


  </body>
</html>
