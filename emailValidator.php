
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>e-BYRYS-KKDS</title>


    <link rel="icon" href="img/core-img/favicon.ico">


    <link rel="stylesheet" href="style.css">
    <link href='https://css.gg/arrow-left-o.css' rel='stylesheet'>


</head>

<body>

    <div>
        <form action="" method="post">
            <div class="login-box login-login" style= 'width : 50%;'>

                <h1 class="header">e-BYRYS-KKDS</h1>
                <h2 class="login">An email was sent to you, please enter the code</h2>

                <p class="labels">Kodu</p>
                <input type="text" required name="code" id="code" placeholder="enter code">
                <input type="submit" name="submit" id="login" value="Giriş Yap">
                <a href="main.php" class="lower-buttons" style="padding-top:10px"><i class="gg-arrow-left-o"
                        style="margin: 0; margin-right: 20px;"></i>Ana Sayfaya Dön</a>
        </form>

    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>,
    <script>
    $(function() {
        $('#login').click(function(e) {
            var valid = this.form.checkValidity();

            if (valid) {
                var code = $('#code').val();

            }
            e.preventDefault();

            $.ajax({
                type: 'POST',
                url: 'processEmailValidation.php',
                data: {
                    code : code
                },
                success: function(data) {
                    alert(data)
                    if ($.trim(data) === "Successful") {
                        setTimeout('window.location.href = "student-main.php"', 1000);
                    }
                },
                error: function(data) {
                    alert('error');
                }
            })

        })
    })
    </script>
</body>

</html>