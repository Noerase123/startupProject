<?php
// session_start();
include '../config.php';

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Test Website - Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="admin_css/main.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="main.js"></script>

<style>
.time-frame {
    background-color: #000000;
    color: #ffffff;
    width: 300px;
    font-family: Arial;
}

.time-frame > div {
    width: 100%;
    text-align: center;
}

#date-part {
    font-size: 1.2em;
}
#time-part {
    font-size: 2em;
}
</style>

</head>
<body>

<?php 
include 'require/nav.php';
?>


<div class="container">
<br>

<div>
<p style="float:left;margin-right:10px;font-size:20px;" id="date"></p>
<p style="float:left;font-size:20px;" id="time"></p>
</div><br><br><br>

<h1>Dashboard</h1>

    <div class="content">
        <div class="row">

        <?php 
        $tbl = "SELECT * FROM tbl_menus";
        $res = $viewUser->get_query($tbl);
        while($row = $res->fetch_assoc()) {

            $menu = $row['menu_name'];
            $link = $row['menu_link'];
    ?>

            <div class="column" id="con">
                <a href="<?php echo ADMIN_URL.$link.'.php'; ?>">
                <div class="card">
                <h3><?php echo strtoupper($menu); ?></h3>
                <!-- <p><a href="#link">See more</a></p> -->
                </div>
                </a>
            </div>

    <?php
        }
        
    ?>
            
    </div>
    </div>

    
</div>

<script>
var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();
if(dd<10) {
  dd='0'+dd
} 

if(mm<10) {
  mm='0'+mm
} 

today = mm+'/'+dd+'/'+yyyy;
document.getElementById("date").innerHTML = today;
var myVar=setInterval(function(){myTimer()},1000);

function myTimer() {
    var d = new Date();
    document.getElementById("time").innerHTML = d.toLocaleTimeString();
}
</script>

<!-- <script>
    $(document).ready(function() {
    var interval = setInterval(function() {
        var momentNow = moment();
        $('#date-part').html(momentNow.format('YYYY MMMM DD') + ' '
                            + momentNow.format('dddd')
                             .substring(0,3).toUpperCase());
        $('#time-part').html(momentNow.format('A hh:mm:ss'));
    }, 100);
    
    $('#stop-interval').on('click', function() {
        clearInterval(interval);
    });
});
</script> -->
    
</body>
</html>
