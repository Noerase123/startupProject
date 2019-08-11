<?php

// include '../../config';

$get_id = $_GET['id'];

$name = $_SESSION['user']['name'];

if (isset($_POST['submit'])) {

    $subject = $_POST['title'];
    $message_rev = $_POST['message'];

    $sql = "SELECT * FROM tbl_user WHERE username = '$name'";
    $res = $viewUser->get_query($sql);
    foreach($res as $row) {
        $image = $row['image'];
    }

    $add_review = array(
        'ref_id' => $sqlUser->escapeString($get_id),
        'rev_name' => $sqlUser->escapeString($_SESSION['user']['firstname']),
        'rev_star' => $sqlUser->escapeString($_POST['star']),
        'rev_title' => $sqlUser->escapeString($subject),
        'rev_image' => $sqlUser->escapeString($image),
        'message' => $sqlUser->escapeString($message_rev)
    );

    if ($sqlUser->create("tbl_prod_review", $add_review)) {
        
        // echo 'Review Added';
        ?>
        <script>
            window.location="<?php echo BASE_URL.'view/product_details.php?id='.$get_id; ?>";
        </script>
        <?php
    }
    else {
        ?>
        <script>
        alert("something is not working");
        </script>
        <?php
    }

}

?>