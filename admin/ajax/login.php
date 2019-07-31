<?php

    include '../../config.php';    
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT firstname FROM tbl_admin WHERE username = '$username' AND password = '$password'";

        $res = $viewUser->get_query($query);
        foreach($res as $row){
          $name = $row['firstname'];
          $_SESSION['admin'] = $name;
        }


        if (isset($_SESSION['admin'])) {
          if ($loginUser->login($username,$password)) {
  
            // header("location:home.php?signedin");
            echo "Please wait...";
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