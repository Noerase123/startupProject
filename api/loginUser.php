<?php

class loginUser extends viewUser {

    public function login($username, $password) {

        $query = "SELECT * FROM tbl_user WHERE username = '$username' AND password = '$password'";

        $res = $this->get_query($query);

        $num = $res->num_rows;

        if ($num > 0) {

            return $res;
        }
    }

    public function email_validate($email) {
        
        $res = filter_var($email, FILTER_VALIDATE_EMAIL);

        return $res;
    }

    public function input_val($input) {

        if (preg_match("/^[a-zA-Z]*$/", $input)) {

            return true;
        }

    }

}

?>