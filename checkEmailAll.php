<?php
require_once("config-students.php");

if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $sql = "SELECT email FROM students WHERE email = ? UNION SELECT email FROM teachers WHERE email = ?";
    $stmt = $db->prepare($sql);
    $stmt->execute([$email, $email]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($result) {
        echo 'exists';
    } else {
        echo 'not-exists';
    }
} else {
    echo 'no data';
}
?>