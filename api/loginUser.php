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

}

?>