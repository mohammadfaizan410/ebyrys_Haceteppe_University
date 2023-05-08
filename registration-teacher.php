<?php
require_once("config-teachers.php");
session_start()

?>
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
        <?php
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            echo $name;
            $sql = "INSERT INTO teachers (name, surname, email, password) VALUES(?,?,?,?)";
            $smtminsert = $db->prepare($sql);
            $result = $smtminsert->execute([$name, $surname, $email, $password]);
            if ($result) {
                echo 'Başarılı';
            } else {
                echo 'Hata';
            }
        }
        ?>
    </div>
    <div>
        <form action="" method="post">
            <div class="login-box login-signup">

                <h1 class="header">e-BYRYS-KKDS</h1>
                <h2 class="login">Öğretmen Kaydı</h2>

                <p class="usernamelabel">İsim</p>
                <input type="text" required name="name" id="name" placeholder="İsim Giriniz">

                <p class="usernamelabel">Soyisim</p>
                <input type="text" required name="surname" id="surname" placeholder="Soyisim Giriniz">

                <p class="usernamelabel">E-mail</p>
                <input type="email" required name="email" id="email" placeholder="E-mail Giriniz">

                <p class="passwordlabel">Şifre</p>
                <input type="password" name="password" id="password" required placeholder="Şifre Giriniz">

                <input type="submit" name="submit" id="register" value="Kayıt Ol">
                <a href="main.php" class="lower-buttons" style="padding-top:10px"><i class="gg-arrow-left-o" style="margin: 0; margin-right: 20px;"></i>Ana Sayfaya Dön</a>
        </form>

    </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(function() {
            $('#register').click(function(e) {

                var valid = this.form.checkValidity();

                if (valid) {

                    var name = $('#name').val();
                    var surname = $('#surname').val();
                    var email = $('#email').val();
                    var password = $('#password').val();

                    e.preventDefault()

                    $.ajax({
                        type: 'POST',
                        url: 'process-teachers.php',
                        data: {
                            name: name,
                            surname: surname,
                            email: email,
                            password: password
                        },
                        success: function(data) {
                            Swal.fire({
                                'title': 'Başarılı',
                                'text': data,
                                'type': 'success'
                            })
                            setTimeout('window.location.href = "main.php"', 1000);

                        },
                        error: function(data) {
                            Swal.fire({
                                'title': 'Hata',
                                'text': 'Hata',
                                'type': 'error'
                            })
                        }
                    })


                } else {

                }

            })

        })
    </script>
    <script>
    function sanitizePassword() {
        var passwordInput = document.getElementById("password");
        passwordInput.value = passwordInput.value.replace(/[^a-zA-Z0-9_-]/g, '');

        var passwordError = document.getElementById("password-error");
        if (passwordInput.value.length < 6) {
            passwordError.style.display = "inline";
            document.getElementById("register").disabled = true;
        } else {
            passwordError.style.display = "none";
            document.getElementById("register").disabled = false;
        }
    }
    </script>
    <script>
    function sanitizeEmail() {
        var emailInput = document.getElementById("email");
        emailInput.value = emailInput.value.replace(/[^a-zA-Z0-9@._-]/g, '');

        var emailError = document.getElementById("email-error");
        if (!isValidEmail(emailInput.value)) {
            emailError.style.display = "inline";
            document.getElementById("register-button").disabled = true;
        } else {
            emailError.style.display = "none";
            document.getElementById("register-button").disabled = false;
            if (isEmailExist(email)) {
                emailInput.setCustomValidity(
                    "Bu e-posta adresi zaten kayıtlı. Lütfen farklı bir e-posta adresi seçin.");
                emailError.style.display = "block";
            } else {
                emailInput.setCustomValidity("");
                emailError.style.display = "none";
            }
        }
    }

    function isValidEmail(email) {
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }
    </script>
</body>

</html>