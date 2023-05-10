<?php
session_start();
$message = '';
if (isset($_SESSION['email_alert'])) {
    $message = 'Email Already Existed';
}
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

    <div id="validation-box">
        <form action="" method="post">
            <div class="login-box login-login" style= 'width : 50%;'>

                <h1 class="header">e-BYRYS-KKDS</h1>
                <h2 class="login">An email was sent to you, please enter the code</h2>

                <p class="labels">Kodu</p>
                <input type="text" required name="code" id="code" placeholder="enter code">
                <input type="submit" name="submit" id="validate" value="Giriş Yap">
                <button class='btn btn-primary' id="sendEmail">Send again</button>
                <a href="main.php" class="lower-buttons" style="padding-top:10px"><i class="gg-arrow-left-o"
                        style="margin: 0; margin-right: 20px;"></i>Ana Sayfaya Dön</a>
</div>
        </form>

    </div>



        <form action="" method="post">
            <div class="login-box login-signup" id="registrationForm">

            <h2 class="login">Öğretmen Kaydı</h2>

            <p class="usernamelabel">İsim</p>
            <input type="text" required name="name" id="name" placeholder="İsim Giriniz" oninput="sanitizeName()">
            <span id="name-error" style="display:none; color:red;">Name cannot be empty</span>
            <p class="usernamelabel">Soyisim</p>
            <input type="text" required name="surname" id="surname" placeholder="Soyisim Giriniz" oninput="sanitizeName()">
            <span id="surname-error" style="display:none; color:red;">Surname cannot be empty</span>
            <p class="usernamelabel">E-mail</p>
            <input type="email" required name="email" id="email" placeholder="E-mail Giriniz"
                oninput="sanitizeEmail()">
            <span id="email-error" style="display:none; color:red;">Lütfen geçerli bir e-posta adresi
                giriniz.</span>

            <p class="passwordlabel">Şifre</p>
            <input type="password" name="password" id="password" required placeholder="Şifre Giriniz" minlength="6"
                oninput="sanitizePassword()">
            <span id="password-error" style="display:none; color:red;">Şifre en az 6 karakter uzunluğunda
                olmalıdır.</span>
                <input type="submit" name="submit" id="register" value="Kayıt Ol">
                <a href="main.php" class="lower-buttons" style="padding-top:10px"><i class="gg-arrow-left-o"
                        style="margin: 0; margin-right: 20px;"></i>Ana Sayfaya Dön</a>
        </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
                      document.getElementById("register").style.display = 'none';

        var emailCode = '';


        function sendEmail(){
                    var name = $('#name').val();
                    var surname = $('#surname').val();
                    var email = $('#email').val();
                    var password = $('#password').val();
                    
                    $.ajax({
                                type: "POST",
                                url: "sendEmail.php",
                                data: {
                                    name: name,
                                    surname: surname,
                                    email: email,
                                    password: password
                                },
                                success: function (response) {
                                        $("#registrationForm").css("display", 'none');
                                        $("#validation-box").css("display", 'block');
                                       emailCode = response;
                                },
                                error :function(response){
                                    console.log(response)
                                }
                            });   
        }

        $(function() {

                                $('#validate').click(function(e) {
                                e.preventDefault();
                                var name = $('#name').val();
                                var surname = $('#surname').val();
                                var email = $('#email').val();
                                var password = $('#password').val();
                                                
                                        if(emailCode === $("#code").val()){
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
                                            alert("registration successfull")
                                            window.location.href= './login-teacher.php';
                                        },
                                        error: function(data) {
                                            console.log("Resgitration was not complete",data)
                                            alert("Could not be registered!");
                                        }
                                    })
                                                    } 
                                                    else {
                                                        alert("codes do not match")
                                                    };
                                                    
                                            })
                                        });


     $("#validation-box").css("display", 'none');

        $(function() {
            $('#register').click(function(e) {
                e.preventDefault()
                    sendEmail();
            })
        })
    

        $("#sendEmail").click(function (e) { 
            e.preventDefault();
            alert("Code sent again, check your email!") 
            sendEmail();
        });

    </script>
    <script>
        function isEmailExist(email, callback) {
            $.ajax({
                type: "POST",
                url: "checkEmailAll.php",
                data: {
                email: email,
                },
                success: function(response) {
                console.log(response)
                var isPresent = (response === 'exists');
                callback(isPresent);
                },
                error: function(response) {
                callback(false);
                }
            });
            }

    </script>
    <script>
    // function sanitizeName(){
    //     var nameInput = document.getElementById("name");
    //     var surnameInput = document.getElementById("surname");
    //     var nameError = document.getElementById('name-error')
    //     var surnameError = document.getElementById('surname-error')

    //     if(nameInput === ''){
    //         nameError.style.display = 'inline'
    //         document.getElementById("register").style.display = 'none';
    //     }
    //    if(surnameInput === ''){
    //         surnameError.style.display = 'inline'
    //         document.getElementById("register").style.display = 'none';
    //     }
    
    // }


    function sanitizePassword() {
  var passwordInput = document.getElementById("password");
  passwordInput.value = passwordInput.value.replace(/[^a-zA-Z0-9_-]/g, '');

  var passwordError = document.getElementById("password-error");
  var emailInput = document.getElementById("email");
  var emailError = document.getElementById("email-error");

  if (!isValidEmail(emailInput.value)) {
    emailError.style.display = "inline";
    document.getElementById("register").style.display = 'none';
    return;
  } else {
    emailError.style.display = "none";
  }

  isEmailExist(emailInput.value, function(isPresent) {
    if (isPresent) {
      emailError.innerText =  "Bu e-posta adresi zaten kayıtlı. Lütfen farklı bir e-posta adresi seçin.";
      emailInput.setCustomValidity(
        "Bu e-posta adresi zaten kayıtlı. Lütfen farklı bir e-posta adresi seçin.");
      emailError.style.display = "block";
      document.getElementById("register").style.display = 'none';
    } else {
      emailInput.setCustomValidity("");
      emailError.style.display = "none";

      if (passwordInput.value.length < 6) {
        passwordError.style.display = "inline";
        document.getElementById("register").style.display = 'none';
      } else {
        passwordError.style.display = "none";
        document.getElementById("register").style.display = 'block';
      }
    }
  });
}
    </script>
    <script>
    function sanitizeEmail() {
  var emailInput = document.getElementById("email");
  emailInput.value = emailInput.value.replace(/[^a-zA-Z0-9@._-]/g, '');
  var emailError = document.getElementById("email-error");
  var passwordInput = document.getElementById("password");
  var passwordError = document.getElementById("password-error");

  if (!isValidEmail(emailInput.value)) {
    emailError.style.display = "inline";
    document.getElementById("register").style.display = 'none';
    return;
  } else {
    emailError.style.display = "none";
  }

  isEmailExist(emailInput.value, function(isPresent) {
    if (isPresent) {
      emailError.innerText =  "Bu e-posta adresi zaten kayıtlı. Lütfen farklı bir e-posta adresi seçin.";
      emailInput.setCustomValidity(
        "Bu e-posta adresi zaten kayıtlı. Lütfen farklı bir e-posta adresi seçin.");
      emailError.style.display = "block";
      document.getElementById("register").style.display = 'none';
    } else {
      emailInput.setCustomValidity("");
      emailError.style.display = "none";

      if (passwordInput.value.length < 6) {
        passwordError.style.display = "inline";
        document.getElementById("register").style.display = 'none';
      } else {
        passwordError.style.display = "none";
        document.getElementById("register").style.display = 'block';
      }
    }
  });
}
    function isValidEmail(email) {
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }
   
</script>

</body>

</html>
