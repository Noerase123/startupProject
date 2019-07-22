<nav>
    <ul>
        <li><a href="<?php echo ADMIN_URL.'index2.php';?>">Home</a></li>

    <?php 
        $tbl = "SELECT * FROM tbl_menus";
        $res = $viewUser->get_query($tbl);
        while($row = $res->fetch_assoc()) {

            $menu = $row['menu_name'];
            $link = $row['menu_link'];
    ?>
        <li><a href="<?php echo $link.'.php'; ?>"><?php echo ucfirst($menu); ?></a></li>

    <?php
        }
    ?>
    </ul>
</nav>