<?php
require_once("config-students.php");
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
        <form action="" method="post">
            <div class="login-box login-signup">

                <h1 class="header">e-BYRYS-KKDS</h1>
                <h2 class="login">Sign Up as Student</h2>

                <p class="usernamelabel">İsim</p>
                <input type="text" required name="name" id="name" placeholder="İsim Giriniz">

                <p class="usernamelabel">Soyisim</p>
                <input type="text" required name="surname" id="surname" placeholder="Soyisim Giriniz">

                <p class="usernamelabel">E-mail</p>
                <input type="email" required name="email" id="email" placeholder="E-mail Giriniz" oninput="sanitizeEmail()">
                <span id="email-error" style="display:none; color:red;">Lütfen geçerli bir e-posta adresi giriniz.</span>

                <p class="passwordlabel">Şifre</p>
                <input type="password" name="password" id="password" required placeholder="Şifre Giriniz" minlength="6" oninput="sanitizePassword()">
                <span id="password-error" style="display:none; color:red;">Şifre en az 6 karakter uzunluğunda olmalıdır.</span>

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
                        url: 'process-student.php',
                        data: {
                            name: name,
                            surname: surname,
                            email: email,
                            password: password
                        },
                        success: function(data) {
                            Swal.fire({
                                'title': 'Success',
                                'text': data,
                                'type': 'success'
                            })
                            setTimeout('window.location.href = "main.php"', 1000);

                        },
                        error: function(data) {
                            Swal.fire({
                                'title': 'Errors',
                                'text': 'There were errors',
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
        function isEmailExist($email) {
            $servername = "ebyrys.cpcbxswdfvjg.eu-central-1.rds.amazonaws.com";
            $username = "admin";
            $password = "12345678";
            $dbname = "ebyrys_db";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Escape special characters to prevent SQL injection attacks
            $email = mysqli_real_escape_string($conn, $email);

            // SQL query to check if email exists
            $sql = "SELECT COUNT(*) AS count FROM students WHERE email='$email'";

            // Execute SQL query
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            // Email exists in database
                $row = $result->fetch_assoc();
                if ($row["count"] > 0) {
      // Show alert if email already exists
                    echo "<script>alert('Email already exists in database. Please choose a different email.');</script>";
                    return true;
                }
            }

  // Close database connection
            $conn->close();
  
             return false;
        }

    </script>
    <script>
        function sanitizePassword() {
            var passwordInput = document.getElementById("password");
            passwordInput.value = passwordInput.value.replace(/[^a-zA-Z0-9_-]/g, '');

            var passwordError = document.getElementById("password-error");
            if (passwordInput.value.length < 6) {
                passwordError.style.display = "inline";
                document.getElementById("register").disabled = true;
            }   
            else {
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
        } 
        else {
            emailError.style.display = "none";
            document.getElementById("register-button").disabled = false;
            if (isEmailExist(email)) {
                emailInput.setCustomValidity("Bu e-posta adresi zaten kayıtlı. Lütfen farklı bir e-posta adresi seçin.");
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