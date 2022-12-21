<?php
require_once('config-students.php');

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

$sql = "SELECT * FROM students WHERE email = ? AND password = ? LIMIT 1";
$smtmselect = $db->prepare($sql);
$result = $smtmselect->execute([$email, $password]);
if ($result) {
    $user = $smtmselect->fetch(PDO::FETCH_ASSOC);
    if ($smtmselect->rowCount() > 0) {
        echo 'Successful';
    } else {
        echo 'Wrong e-mail or password';
    }
} else {
    echo 'error';
}
