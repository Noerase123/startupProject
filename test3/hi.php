<?php
// SQL CONFIGURATION------------
define('HOST','localhost');
define('USER','root');
define('PASS','');

// DATA CONFIGURATION=============
define('DBNAME','newdb');

class dbh {

    private $servername;
    private $username;
    private $password;
    private $dbname;

    //constructor
    public function __construct() {
        $this->servername = HOST;
        $this->username = USER;
        $this->password = PASS;
        $this->dbname = DBNAME;

        $this->conn = mysqli_connect($this->servername,$this->username,$this->password,$this->dbname);
        
        if (!$this->conn)
        {
            echo "Data Connection Error ". mysqli_connect_error($this->conn);
        }
    }

}

header("location:../view/items.php");
?>
