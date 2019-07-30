<?php 

    if (isset($_POST['login'])) {
      $uname = $_POST['username']; 
      $pass = $_POST['password'];

      $query = "SELECT firstname FROM tbl_user WHERE username='$uname'";
      $res = $viewUser->get_query($query);
      foreach($res as $row){
        $user = $row['firstname'];
        $_SESSION['user'] = $user;
      }

      $res = $loginUser->login($uname,$pass);

      if ($res) {
        header("location:".BASE_URL."view/items.php");
        exit;
      }
    }

?>