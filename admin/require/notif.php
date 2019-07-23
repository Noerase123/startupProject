<?php
    if (isset($_GET['deleted'])) {
        $message = "Item deleted";
        echo '<h5 class="response notif">'.$message.'</h5>';
    }
    else if (isset($_GET['updated'])) {
        $message = "Item updated";
        echo '<h5 class="response notif">'.$message.'</h5>';
    }
    else if (isset($_GET['created'])) {
        $message = "Item created";
        echo '<h5 class="response notif">'.$message.'</h5>';
    }
    else {
        $message = '';
    }
?>