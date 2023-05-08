<?php
session_start();
if (isset($_SESSION['userlogin'])) {
    header("Location: student-main.php");
}
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
                <a href="main.php" class="lower-buttons" style="padding-top:10px"><i class="gg-arrow-left-o"
                        style="margin: 0; margin-right: 20px;"></i>Ana Sayfaya Dön</a>
            </div>
        </form>

    </div>

    <div id="recovery-box">
        <form action="" method="post">
            <div class="login-box login-login">
                <h1 class="header">e-BYRYS-KKDS</h1>
                <h2 class="login">Password Recovery</h2>

                <p class="labels">Confirm Mail</p>
                <input type="text" required name="email" id="email" placeholder="Mail Giriniz">
                <input type="submit" name="submit" id="send-code" value="Send Code">
                <a href="main.php" class="lower-buttons" style="padding-top:10px"><i class="gg-arrow-left-o"
                        style="margin: 0; margin-right: 20px;"></i>Ana Sayfaya Dön</a>
                </div>
        </form>

    </div>
    <div id="password-box">
        <form action="" method="post">
            <div class="login-box login-login">
                <h1 class="header">e-BYRYS-KKDS</h1>
                <h2 class="login">Password Recovery</h2>

                <p class="labels">New password</p>
                <input type="text" required name="email" id="password" placeholder="Mail Giriniz">
                <p class="labels">Confirm password</p>
                <input type="text" required name="email" id="confirm-password" placeholder="Mail Giriniz">
                <input type="submit" name="submit" id="change-password" value="Done">
                <a href="main.php" class="lower-buttons" style="padding-top:10px"><i class="gg-arrow-left-o"
                        style="margin: 0; margin-right: 20px;"></i>Ana Sayfaya Dön</a>
                </div>
        </form>

    </div>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>,
    <script>
        var emailCode = '';
        var email = '';
        $("#validation-box").css("display", "none");
        $("#password-box").css("display", "none");

//send code
    $(function() {
        $('#send-code').click(function(e) {
            e.preventDefault();
            sendEmail();                
        })
    })


    //validate codde
    $(function() {
        $('#validate').click(function(e) {
            e.preventDefault();
            if(emailCode === $('#code').val() ){
                alert("validated");
                $("#recovery-box").css("display", 'none');
                $("#validation-box").css("display", 'none');
                $("#password-box").css("display", "block");
            }
            else{
                alert("codes do not match try again");
            }
        })
    })
    $(function() {
        $('#change-password').click(function(e) {
            e.preventDefault();
            var password = $("#password").val();
            var confirmPassword = $("#confirm-password").val();
            console.log("change pass clicked",password, confirmPassword)
            if(password !== confirmPassword || password==''){
                alert("passwords do not match");
            }
            else{
                $.ajax({
                    type: "POST",
                    url: "changePasswordStudent.php",
                    data: {
                        email :email,
                        password :password
                    },
                    success: function (response) {
                        console.log(response)
                        if(response == "success"){
                            alert("your password has been changed!")
                            window.location.href = "main.php"
                        }else{
                            alert("server error")
                        }
                    },
                    error :function(response){
                        alert(response);
                    }

                });
            }
            })
    })


    </script>
    <script>
 function sendEmail(){
                    email = $('#email').val();
                    
                    $.ajax({
                                type: "POST",
                                url: "sendEmail.php",
                                data: {
                                    email: email,
                                },
                                success: function (response) {
                                    console.log(response)
                                        $("#recovery-box").css("display", 'none');
                                        $("#validation-box").css("display", 'block');
                                       emailCode = response;
                                },
                                error :function(response){
                                    console.log(response)
                                }
                            });   
        }
    </script>



</body>

</html>