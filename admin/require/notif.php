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
    else if (isset($_GET['review_deleted'])) {
        $message = "Review Deleted";
        echo '<h5 class="response notif">'.$message.'</h5>';
    }
    else if (isset($_GET['about_updated'])) {
        $message = "About Updated";
        echo '<h5 class="response notif">'.$message.'</h5>';
    }
    else if (isset($_GET['contact_info_updated'])) {
        $message = "Contact Info Updated";
        echo '<h5 class="response notif">'.$message.'</h5>';
    }
    else if (isset($_GET['header_updated'])) {
        $message = "Header Updated";
        echo '<h5 class="response notif">'.$message.'</h5>';
    }
    else {
        $message = '';
    }
?>