<?php
session_start();

require_once './lib/PHPMailer/src/PHPMailer.php';
require_once './lib/PHPMailer/src/SMTP.php';
require_once './lib/PHPMailer/src/Exception.php';
if (isset($_POST)) { 
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password = sha1(($_POST['password']));


    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'your_email@gmail.com';
    $mail->Password = 'your_email_password';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->setFrom('mohamamdfaizan410@gmail.com', 'e-BYRYS');
    $mail->addAddress('$email', `$name $surname`);
    $mail->Subject = 'E-BYRYS';
    $mail->Body = 'This is a test email';
    if ($mail->send()) {
        echo 'Email sent successfully!';
    } else {
        echo 'Email could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
   


    $sql = "INSERT INTO students (name, surname, email, password) VALUES(?,?,?,?)";
    $smtminsert = $db->prepare($sql);
    $result = $smtminsert->execute([$name, $surname, $email, $password]);
    if ($result) {
        echo 'success';
    } else {
        echo 'error';
    }
} else
    echo 'server error';
?>