<?php 
    include '../../config.php';

    if (isset($_POST['register'])) {
      $uname = $_POST['email'];
      $pass = $_POST['pass'];
      $first = $_POST['first'];
      $last = $_POST['last'];
      $birth = $_POST['birth'];

      $pw = password_hash($pass, PASSWORD_DEFAULT);

      if ($loginUser->email_validate($uname) && $loginUser->input_val($first) && $loginUser->input_val($last)) {
       

      $add_arr = array();

      $add_arr['username'] = $uname;
      $add_arr['password'] = $pw;
      $add_arr['firstname'] = $first;
      $add_arr['lastname'] = $last;
      $add_arr['birthdate'] = $birth;

      $res = $sqlUser->create("tbl_user",$add_arr);

      if ($res) {

        echo "Account successfully created";

          $query = "SELECT * FROM tbl_user WHERE username='$uname'";
          $res = $viewUser->get_query($query);
          foreach($res as $row) {
            $user_id = $row['id'];
            $user_name = $row['firstname'];
          }

          $encrypt = password_verify($pass, $pw);

          if ($encrypt == true){

            $_SESSION['user'] = array(
              'id' => $user_id,
              'name' => $user_name
            );

            $loginUser->login($uname, $pw);
          }
    
      } else {
          echo 'error';
      }

    } else {
      ?>
      <script>
        alert("fill up the invalid field!");
      </script>
      <?php
    }

    }
    

?>