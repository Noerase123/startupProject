<?php 
    include '../../config.php';

    if (isset($_POST['login'])) {
      $uname = $_POST['username']; 
      $pass = $_POST['password'];

      $query = "SELECT * FROM tbl_user WHERE username='$uname'";
      $res = $viewUser->get_query($query);

      foreach($res as $row){
        $user_id = $row['id'];
        $user_name = $row['username'];
        $firstname = $row['firstname'];
        $lastname = $row['lastname'];
        $pw = $row['password'];
      }

      $encrypt = password_verify($pass, $pw);

      if ($encrypt == true){

        $_SESSION['user'] = array(
          'id' => $user_id,
          'name' => $user_name,
          'firstname' => $firstname,
          'lastname' => $lastname
        );

        echo "Welcome ".$_SESSION['user']['firstname'];
      } else {
          echo "No user found";
        }
      
    }
    

?>