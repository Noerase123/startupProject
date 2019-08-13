<?php
// session_start();
if($_SESSION["admin"]=="")
{
    header("location:".ADMIN_URL);
}
?>

<div class="header">
    <p><a style="color:#fff;text-decoration:none;" href="<?php echo ADMIN_URL.'home.php';?>">Welcome to Admin</a></p>
    <div class="head-content">
        <p style="cursor:pointer;"><img src="<?php echo BASE_URL; ?>image/sample-image.jpg" style="height:15px;width:15px;" alt=""> <?php echo $_SESSION["admin"]; ?></p>
        <p><a style="color:#fff;text-decoration:none;" href="<?php echo ADMIN_URL.'logout.php';?>">Logout</a></p>
    </div>
    
</div>

<nav class="navi">
    <ul>
        <li><a href="<?php echo ADMIN_URL.'home.php';?>">Home</a></li>

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