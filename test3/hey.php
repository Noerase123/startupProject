<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <!-- <script src="http://code.jquery.com/jquery-1.9.1.js"></script> -->
</head>
<body>

    <form method="POST" action="" id="form">

        <h1 id="login-text"> Please Login!</h1>

    UserName: <br> <span id="uname-error"></span>
    <input type="text" name="uname" id="uname"><br>

    Password: <br> <span id="password-error"></span>
    <input type="text" name="pw" id="password"> <br>

    <input type="submit" value="submit" class="login-btn" id="btn_send">

    <span id="response"></span>

    </form>

<script type="text/javascript">
    $('#btn_send').on('click' , () => {
        alert("click");
        $('#uname').val("");
        $('#password').val("");
        $('#uname-error').hide();
        $('#password-error').hide();
        
        $('#form').validate({
            rules:{
                uname:{
                    required:true,
                },
                password: {
                    required:true,
                }
            },
            messages: {
                uname: {
                    required: "please enter username",
                },
                password: {
                    required: "please enter password",
                }
            },
            submitHandler:(label) => {
                $.ajax({
                    type: 'POST',
                    url: "hi.php",
                    data: $('#form').serialize(),
                    beforSend: () => {
                        $('.login-btn').prop("disabled", true).val("please wait...");
                    },
                    success:function(data) {
                        alert("OK!" + data);
                    },
                    error: function(data){
                        alert("not OK!" + data);
                    }
                });
            }

        });

    });
  </script>

    <!-- <script>

        const form = {
            username: document.getElementById('uname'),
            password: document.getElementById('pw'),
            submit: document.getElementById('btn_send'),
            response: document.getElementById('response')
        };

        form.submit.addEventListener('click', () => {
            const request = new XMLHttpRequest();

            request.onload = () => {
                let responseObject = null;

                try {
                    responseObject = JSON.parse(request.responseText);
                }
                catch(e) {
                    console.error("could not pass JSON");
                }

                if (responseObject){
                    handleResponse(responseObject);
                }
            };

            const requestData = 'username=${form.username.value}&password=${form.password.value}';
            console.log(requestData);

            request.open('post','hi.php');
            request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            request.send(requestData);
        });

        function handleResponse(responseObject) {
            console.log(responseObject);
        }

    </script>  -->

</body>
</html>