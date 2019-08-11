<script src="../js/jquery-3.3.1.js"></script>

<?php 
    include '../../config.php';

    if (isset($_POST['register'])) {
      $uname = strip_tags($_POST['email']);
      $pass = strip_tags($_POST['pass']);
      $pass2 = strip_tags($_POST['pass2']);
      $first = strip_tags($_POST['first']);
      $last = strip_tags($_POST['last']);
      $address = strip_tags($_POST['address']);
      $birth = strip_tags($_POST['birth']);
      $pw = password_hash($pass, PASSWORD_DEFAULT);

      $add_arr = array();
      $add_arr['username'] = $sqlUser->escapeString($uname);
      $add_arr['password'] = $sqlUser->escapeString($pw);
      $add_arr['firstname'] = $sqlUser->escapeString($first);
      $add_arr['lastname'] = $sqlUser->escapeString($last);
      $add_arr['address'] = $sqlUser->escapeString($address);
      $add_arr['birthdate'] = $sqlUser->escapeString($birth);
      
      $success = 0;

      if ($success == 0){

        $qry = "SELECT * FROM tbl_user WHERE username = '$uname'";
        $res = $viewUser->get_query($qry);
        $num = $res->num_rows;

        //empty handlers
        
        if ($first == "" && $success == 0) {
          ?>
        <script>
          $(".first_error").text("Please enter your first name");
        </script>
        <?php
        } else {
          ?>
        <script>
          $(".first_error").text("");
        </script>
        <?php
        }
        if ($last == "") {
          ?>
        <script>
          $(".last_error").text("Please enter your last name");
        </script>
        <?php
        } else {
          ?>
        <script>
          $(".last_error").text("");
        </script>
        <?php
        }
        if ($address == "") {
          ?>
        <script>
          $(".address_error").text("Please enter your home address");
        </script>
        <?php
        } else {
          ?>
        <script>
          $(".address_error").text("");
        </script>
        <?php
        }
        if ($birth == "") {
          ?>
        <script>
          $(".birth_error").text("Please enter your birthdate");
        </script>
        <?php
        } else {
          ?>
          <script>
            $(".birth_error").text("");
          </script>
          <?php
        }

        ////////////////// security info //////////////////////

          if ($uname == "") {
            ?>
            <script>
              $(".email_error").text("Enter your email address");
            </script>
            <?php
          }
          else if (!$loginUser->email_validate($uname)) {
            ?>
            <script>
              $(".email_error").text("Enter a Valid Email Address");
            </script>
            <?php
          }
        else if ($num >= 1 && $uname != ""){
          // echo 'this email has been taken';
          ?>
        <script>
          $(".email_error").text("this email has been taken");
        </script>
        <?php
        } else {
          ?>
        <script>
          $(".email_error").text("");
        </script>
        <?php
          // $success = 1;
        }

        if ($pass == "") {
          // echo 'Password is not match';
          ?>
          <script>
            $(".pw_error").text("Enter your password");
          </script>
          <?php
        } else if ($pass != $pass2 && $pass != "") {
          ?>
          <script>
            $(".re_enter_error").text("Password is not match");
            $(".pw_error").text("");
          </script>
          <?php
        }
         else{
          ?>
          <script>
            $(".re_enter_error").text("");
            $(".pw_error").text("");
          </script>
          <?php
          $success = 1;
        }

        // if ($loginUser->email_validate($uname) && $pass == $pass2){
        //   $success = 1;
        // }
      

      }
      if ($success == 1){

      if ($sqlUser->create("tbl_user",$add_arr)) {

        echo "Account successfully created";

          $query = "SELECT * FROM tbl_user WHERE username='$uname'";
          $res = $viewUser->get_query($query);
          foreach($res as $row) {
            $user_id = $row['id'];
            $user_name = $row['username'];
            $passrow = $row['password'];
            $firstname = $row['firstname'];
            $lastname = $row['lastname'];
          }

          $encrypt = password_verify($pass, $passrow);

          if ($encrypt != true){
            echo 'Password is incorrect';
          }
          else {

            $email_arr = array(
              'ref_id' => $sqlUser->escapeString($user_id),
              'email' => $sqlUser->escapeString($user_name)
            );

            $sqlUser->create("tbl_existed_user",$email_arr);

            $_SESSION['user'] = array(
              'id' => $user_id,
              'name' => $user_name,
              'firstname' => $firstname,
              'lastname' => $lastname
            );

            ?>
            <script>
              setTimeout(() => {
              window.location = "<?php echo BASE_URL; ?>view/profile.php?tab=summary";
              }, 1000);
            </script>
            <?php
          }
    
      }

    }

    }
    

?>