<?php 
    include '../config.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Submit Form Using AJAX and jQuery</title>
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->
    <!-- <script src="jquery-1.9.1.slim.js"></script> -->
    <script src="<?php echo BASE_URL;?>/js/jquery-3.3.1.js"></script>

</head>
<body>
<div id="mainform">
    <h2>Submit Form Using AJAX and jQuery</h2> <!-- Required div Starts Here -->
    <div id="form">
    <h3>Fill Your Information !</h3>
        <div>
            <form action="" method="post" id="form">
            <label>Name :</label>
                <input id="name" type="text"><br><br>
            <label>Email :</label>
                <input id="email" type="text"><br><br>
            <label>Password :</label>
                <input id="password" type="password"><br><br>
            <label>Contact No :</label>
                <input id="contact" type="text"><br>
            <input id="submit" type="button" value="Submit"><br>
            </form>
            
            <span class="response"></span>
        </div>
    </div>
</div>

<script>

$(document).ready(function(){
  $("#form").submit(function(e){
      e.prevenDefault();
    var name = $("#name").val();
    var email = $("#email").val();
    var password = $("#password").val();
    var contact = $("#contact").val();
// Returns successful data submission message when the entered information is stored in database.
    // var dataString = 'name1='+ name + '&email1='+ email + '&password1='+ password + '&contact1='+ contact;
    // console.log(dataString);
    if(name==''||email==''||password==''||contact=='')
    {
        $(".response").text("Please input remaining data");
    }
    else
    {
// AJAX Code To Submit Form.
        $.ajax({
        type: "POST",
        url: "hi.php",
        data: $("#form").serialize(),
        cache: false,
        success: function(result){
            $(".response").text(result);
    }
});
}
return false;
});
});

</script>

</body>
</html>
