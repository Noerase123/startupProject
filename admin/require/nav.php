<div class="header">
    <p><a style="color:#fff;text-decoration:none;" href="<?php echo ADMIN_URL;?>">Welcome to Admin</a></p>
    <div class="head-content">
        <p>admin</p>
        <p>settings</p>
    </div>
</div>

<nav class="navi">
    <ul>
        <li><a href="<?php echo ADMIN_URL;?>">Home</a></li>

    <?php 
        $tbl = "SELECT * FROM tbl_menus";
        $res = $viewUser->get_query($tbl);
        while($row = $res->fetch_assoc()) {

            $menu = $row['menu_name'];
            $link = $row['menu_link'];
    ?>
        <li><a href="<?php echo ADMIN_URL.$link.'.php'; ?>"><?php echo ucfirst($menu); ?></a></li>

    <?php
        }
    ?>
    </ul>
</nav>