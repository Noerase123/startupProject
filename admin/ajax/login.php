<?php

    include '../../config.php';    
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT * FROM tbl_admin WHERE username = '$username'";

        $res = $viewUser->get_query($query);
        foreach($res as $row){
          $name = $row['firstname'];
          $pw = $row['password'];
        }

        $encrypt = password_verify($password, $pw);

          if ($encrypt == true) {
  
            $_SESSION['admin'] = $name;
            // header("location:home.php?signedin");
            echo "Please wait...";
          }
          else {
            echo '<h4 style="color:red;">Incorrect username or password</h4>';
          }
        
      }
    ?>