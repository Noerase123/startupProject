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

    if ($person->myfunc($str)) {
        echo "<br>success!";
    }
}
?>

<form action="" method="get">
    <input type="text" name="string" id="">
    <input type="submit" value="Submit">
</form><br>


<?php 

$person_arr = array();

$person_arr['name'] = array(
    "fullname" => "John Isaac B. Caasi",
    "age" => 21
);

echo $person_arr['name']['age'];

?>
