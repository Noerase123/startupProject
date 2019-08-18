<?php

    include '../../config.php';    
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT * FROM tbl_admin WHERE username = '$username'";

        $res = $viewUser->get_query($query);
        $count = 5;
        foreach($res as $row){
          $name = $row['firstname'];
          $user = $row['username'];
          $pw = $row['password'];
        }

        $encrypt = password_verify($password, $pw);

        if ($username == $user) {
      
        if ($username != "" && $password != ""){
          if ($encrypt == true) {
  
            $_SESSION['admin'] = $name;
            // header("location:home.php?signedin");
            echo "Please wait...";
          }
          else {
            echo '<h4 style="color:red;">Incorrect password</h4>';
          }
        }
        else {
          echo '<h4 style="color:red;">Fill up the blank</h4>';
        }
        
        } else {
          echo '<h4 style="color:red;">Username is not found.</h4>';
        }
        
      }
    ?>