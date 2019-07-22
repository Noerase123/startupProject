<?php

include '../config.php';

  $success_message = '';

  $admin = "admin";

  if (isset($_POST['delete']))
    {
        $box = $_POST['select'];
        while (list($key,$val) = @each($box))
        {
            $table = "tbl_categories";
            $sqlUser->delete($table, $val);
        }
        
        if (empty($box))
            {
              header("location:".ADMIN_URL."index.php?no_select_delete");
            }
        ?>
        <script type="text/javascript">
        window.location="<?php echo ADMIN_URL;?>index.php?selected_deleted";
        </script>
        <?php
    }

    $tbl_name = "tbl_web_content";
    
    $res = $viewUser->get_data($tbl_name);
    
    while ($row = $res->fetch_assoc()) {
        
        $nav1 = $row['nav_menu1'];
        $nav2 = $row['nav_menu2'];
        $nav3 = $row['nav_menu3'];
        $nav4 = $row['nav_menu4'];
  
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Test Website - <?php echo ucfirst($admin); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/admin_main.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="../css/carousel.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="../css/login.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="../css/admin.css" />
    <script src="main.js"></script>
    <script src="jquery-3.4.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.0.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<?php 
include '../require/admin_navbar.php';
?>

<div class="header" id="header">
  <h3>Dashboard - <?php echo $nav2;?></h3>
</div>

<br>
<div class="header">
  <div class="headerspace">

  <div class="header_menu">
    <?php 
    if (!empty($nav1)) {
      echo '<a href="'.ADMIN_URL.'index.php">'.$nav1.'</a>';
    }
    if (!empty($nav2)) {
      echo '<a href="'.ADMIN_URL.'admin_reviews.php">'.$nav2.'</a>';
    }
    if (!empty($nav3)) {
      echo '<a href="'.ADMIN_URL.'index.php">'.$nav3.'</a>';
    }
    if (!empty($nav4)) {
      echo '<a href="'.ADMIN_URL.'index.php">'.$nav4.'</a>';
    }
    ?>
  </div>
  

  </div>
</div>
<!-- modal end -->


<div class="row">

  

  <div class="rightcolumn">

    <div class="card">
      <h2>UPDATES</h2>
        <p>Website updates</p>
        <p>Website notifications</p>        
    </div>
  </div>

  <div class="homecolumn create">
  
    <div class="search">
      <form method="GET">
        <input style="margin-top:20px;" type="text" placeholder="Search..." name="query">
        <button type="submit" name="searchbtn"><i class="fa fa-search"></i></button>
      </form>
    </div>

    <?php 
    $table_name = "tbl_reviews";

    $res = $viewUser->get_data($table_name);

    $num_rows = $res->num_rows;

    $message = '<h4><span style="color:#000;float:right;">Overall :'.$num_rows.' Items</h4>';

    echo $message;

    ?>
    <br>
  
  <?php 
if ($num_rows == 0) {   
  echo '<h3>';
  echo 'No Reviews...<br><br>';   
  echo '<a href="#addreviews">Add Reviews</a>';
  echo '</h3>';
}

if (isset($_GET['update_contactUs'])) {
  echo '<div class="header">
  <div id="notif">
  <h3 class="header-info">';
  $success_message = 'Contact Page updated';
  echo $success_message;  
  echo '</h3>
  </div>
  </div>';
}

  if (isset($_GET['update_content'])) {
    echo '<div class="header">
    <div id="notif">
    <h3 class="header-info">';
    $success_message = 'Home Page updated';
    echo $success_message;  
    echo '</h3>
    </div>
    </div>';
  }

  if (isset($_GET['category_created'])) {
  echo '<div class="header">
  <div id="notif">
  <h3 class="header-info">';
  $success_message = '"'.ucfirst($cat_name).'" category has been added';
  echo $success_message;  
  echo '</h3>
  </div>
  </div>';
  }

  if (isset($_GET['updated'])) {
    echo '<div class="header">
  <div id="notif">
    <h3 class="header-info">';
    $success_message = 'Successfully updated';
    echo $success_message;
    echo '</h3>
    </div>
  </div>';
  }

  if (isset($_GET['deleted'])) {
    echo '<div class="header">
  <div id="notif">
    <h3 class="header-info">';
    $success_message = 'Successfully deleted';
    echo $success_message;
    echo '</h3>
    </div>
  </div>';
  }
  
  if (isset($_GET['selected_deleted'])) {
    echo '<div class="header">
  <div id="notif">
    <h3 class="header-info">';
    $success_message = 'Selected data has been deleted';
    echo $success_message;
    echo '</h3>
    </div>
  </div>';
  }

  if (isset($_GET['created'])) {
    echo '<div class="header">
  <div id="notif">
    <h3 class="header-info">';
    $success_message = 'Successfully added';
    echo $success_message;
    echo '</h3>
    </div>
  </div>';
  }

  if (isset($_GET['no_select_delete'])) {
    $success_message = '';
    echo $success_message;
  }

  

    
  ?>
  

    <?php

    if (isset($_GET['searchbtn']) && isset($_GET['query']))
    {
      header("location:".ADMIN_URL."index.php?query=".$_GET['query']."&searchbtn=");
      $term = $_GET['query'];
      $table = "tbl_stack";
      $search = "title";
      $result = $viewUser->search($term,$table,$search);
      
      $num_result = $result->num_rows;

      if($num_result > 0) {

        if ($num_result > 1)
        {
          $item = "items";
        }
        else {
          $item = "item";
        }

        echo '<h3 style="color:green;">Results: "'.$term.'" ('.$num_result.' '.$item.')</h3>';
          while($row =$result->fetch_assoc()){               
              
              $title = $row['title'];
              $title_desc = $row['title_desc'];
              $image = $row['image'];

              $date = $row['date_created'];
      
              $get_date = $viewUser->datetime($date);

              ?>
                <div class="card">
      <h2><?php echo ucfirst($title); ?></h2>
      <?php 
        if (empty($image)) {
          echo '<div class="fakeimg" style="height:250px;width:75%;"></div>';
        }
        else {
          echo '<img style="width:75%;height:250px;" src="../'.$image.'">';
        }
      ?>

      <p><?php echo $get_date; ?></p>
      <br>
      <a href="<?php echo ADMIN_URL; ?>view.php?id=<?php echo $row['id'];?>" id="view"> View </a>
      <a href="<?php echo ADMIN_URL; ?>edit.php?id=<?php echo $row['id'];?>" id="update"> Update </a>
      <a onclick="return confirm('Are you sure?')" href="<?php echo ADMIN_URL; ?>delete.php?id=<?php echo $row["id"];?>">Delete</a>
      
      <?php
        echo "ID: ".$row['id'];
      ?>
    </div>
              <?php

          }
      } 
      else {
          echo '<h3 style="color:green;">No Records Found </h3> &nbsp';   
          echo '<a href="'.ADMIN_URL.'index.php"> Go Back </a>'; 
      }
    }
    else {
    // --------------------------VIEW ALL -----------------------------------
    $table_name = "tbl_reviews";
    $res = $viewUser->get_data($table_name);

    while ($row = $res->fetch_assoc()) {

      $title = $row['title'];
      $title_desc = $row['title_desc'];
      $image = $row['image'];

      // $get_date = date("M d, Y h:i A", strtotime($row['date_created']) );

      $date = $row['date_created'];
      
      $get_date = $viewUser->datetime($date);
      
      if (strlen($title) > 15)
      $title = substr($title, 0, 8) . '...';

      if (strlen($title_desc) > 20)
      $title_desc = substr($title_desc, 0, 12) . '...';

    ?>

    <div class="card">
      <h2><?php echo ucfirst($title); ?></h2>
      <p><span style="font-weight:bold;">Date Added : </span><?php echo $get_date; ?></p>
      
      <?php 
        if (empty($image)) {
          echo '<div class="fakeimg" style="height:250px;width:75%;"></div>';
        }
        else {
          echo '<img style="width:75%;height:250px;" src="../'.$image.'">';
        }
      ?>
      <br><br>
      <a href="<?php echo ADMIN_URL; ?>view.php?id=<?php echo $row['id'];?>" id="view"> View </a>
      <a href="<?php echo ADMIN_URL; ?>edit.php?id=<?php echo $row['id'];?>" id="update"> Update </a>
      <a onclick="return confirm('Are you sure?')" href="<?php echo ADMIN_URL; ?>delete.php?id=<?php echo $row["id"];?>">Delete</a>
      
      <?php
        echo "ID: ".$row['id'];
      ?>
    </div>

    <?php
    }
    }
    ?>
    
</div>
  


</body>
</html>