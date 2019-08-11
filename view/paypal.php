<?php
include '../config.php';
$session_name = $_SESSION['user']['name'];

if ($_SESSION["pay"]=="")
{
    ?>
    <script type="text/javascript">
        window.location="<?php echo BASE_URL;?>view/checkout.php?session=" + $session_name;
    </script>
    <?php
}
$_SESSION["paypal.php"]="yes";
?>
<h1>Please wait we are transferring you in paypal....</h1>
<?php
$paypal_url = 'https://www.paypal.com/';
$pay=$_SESSION["pay"];
$order_id=$_SESSION["order_id"];
?>
<form action="<?php echo $paypal_url;?>/in/cgi-bin/webscr" method="post" name="buyCredits" id="buyCredits">
    <input type="hidden" name="cmd" value="_xclick">
    <input type="hidden" name="business" value="noerase12@gmail.com">
    <input type="hidden" name="currency_code" value="USD">
    <input type="hidden" name="item_name" value="payment for testing">
    <input type="hidden" name="item_number" value="1212">
    <input type="hidden" name="amount" value="<?php echo $pay; ?>">
    <input type="hidden" name="return" value="http://localhost/onlineshoppingsite/payment_success.php?id=<?php echo $order_id; ?>">
</form>
<script type="text/javascript">
    document.getElementById("buyCredits").submit();
</script>