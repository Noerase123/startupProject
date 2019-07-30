
<?php

include '../config.php';
//Fetching Values from URL
$name2=$_POST['name1'];
$email2=$_POST['email1'];
$password2=$_POST['password1'];
$contact2=$_POST['contact1'];
//Insert query
// $query = mysql_query("insert into form_element(name, email, password, contact) values ('$name2', '$email2', '$password2','$contact2')");
$query = array(
    'name' => $sqlUser->escapeString($name2),
    'email' => $sqlUser->escapeString($email2),
    'password' => $sqlUser->escapeString($password2),
    'contact' => $sqlUser->escapeString($contact2),
);

if ($sqlUser->create("tbl_ajax",$query)) {

    echo "Form Submitted Succesfully";
}

?>
