<?php

if (isset($_POST['submit_msg'])) {

    $subject = $_POST['title'];
    $message_rev = $_POST['description'];

    $add_review = array(
        'ref_id' => $sqlUser->escapeString($get_id),
        'name' => $sqlUser->escapeString($_SESSION['user']),
        'title' => $sqlUser->escapeString($subject),
        'description' => $sqlUser->escapeString($message_rev)
    );

    if ($sqlUser->create("tbl_prod_review", $add_review)) {
        ?>
        <script>
            window.location="<?php echo BASE_URL.'view/product_details.php?id='.$get_id;?>";
        </script>
        <?php
    }

}

?>