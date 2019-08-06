<?php

class Person {
    function myfunc($str) {

        if ($str == "time") {
            $date = date('h:i A');
        }
        else if ($str == "date") {
            $date = date('m/d/Y');
        }
        else {
            $date = "unable to find";
        }

        echo $date;
        return $date;
    }
}

$person = new Person;

if (isset($_GET['string'])) {
    $str = $_GET['string'];

    $input = $str;
    $inputdb =  password_hash($str, PASSWORD_DEFAULT);

    $res = password_verify($input, $inputdb);
    if ($res) {
        echo 'hello fucking world!';
    }
    else {
        echo 'hehe';
    }
}
?>

<form action="" method="get">
    <input type="text" name="string" id="">
    <input type="submit" value="Submit">
</form><br>


<?php 

$person_arr = array();

$person_arr['id'] = array('1','2','3','4');

echo $person_arr['id'][2];



?>
