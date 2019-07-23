<?php
    if (isset($_GET['deleted'])) {
        $message = "Item Deleted";
        echo '<h5 class="response notif">'.$message.'</h5>';
    }
    else if (isset($_GET['updated'])) {
        $message = "Item Updated";
        echo '<h5 class="response notif">'.$message.'</h5>';
    }
    else if (isset($_GET['created'])) {
        $message = "Item Created";
        echo '<h5 class="response notif">'.$message.'</h5>';
    }
    else if (isset($_GET['delete_cat'])) {
        $message = "Category Deleted";
        echo '<h5 class="response notif">'.$message.'</h5>';
    }
    else if (isset($_GET['cat_created'])) {
        $message = "Category Created";
        echo '<h5 class="response notif">'.$message.'</h5>';
    }
    else {
        $message = '';
    }
?>