<?php

if (isset($_POST['submit_msg'])) {

    $subject = $_POST['title'];
    $message_rev = $_POST['description'];

    $add_review = array(
        'ref_id' => $sqlUser->escapeString($get_id),
        'rev_name' => $sqlUser->escapeString($_SESSION['user']),
        'rev_star' => $sqlUser->escapeString($_POST['star']),
        'rev_title' => $sqlUser->escapeString($subject),
        'message' => $sqlUser->escapeString($message_rev)
    );

    if ($sqlUser->create("tbl_prod_review", $add_review)) {
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