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

<form id="my_form" onsubmit="submitForm(); return false;" action="">
    <p><input id="n" type="text" placeholder="Name..." required></p>
    <p><input id="e" type="email" placeholder="Email..." required></p>
    <textarea id="m" name="" cols="30" rows="10" required></textarea>
    <p><input id="mybtn" type="submit" name="Submit"> <span id="status"></span></p>
</form>



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