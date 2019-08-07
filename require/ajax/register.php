<script src="../js/jquery-3.3.1.js"></script>

<?php 
    include '../../config.php';

    if (isset($_POST['register'])) {
      $uname = $_POST['email'];
      $pass = $_POST['pass'];
      $pass2 = $_POST['pass2'];
      $first = $_POST['first'];
      $last = $_POST['last'];
      $birth = $_POST['birth'];

      $pw = password_hash($pass, PASSWORD_DEFAULT);

      $add_arr = array();
      $add_arr['username'] = $uname;
      $add_arr['password'] = $pw;
      $add_arr['firstname'] = $first;
      $add_arr['lastname'] = $last;
      $add_arr['birthdate'] = $birth;

        echo 'Password is not match';

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
    

    }
    

?>