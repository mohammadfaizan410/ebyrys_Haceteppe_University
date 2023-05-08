<?php
require_once("config-students.php");
?>
<?php
if (isset($_POST)) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password = sha1(($_POST['password']));
    
    $sql = "Select * from students where email = '$email'";
    $result = mysqli_query($conn, $sql);
    $present= mysqli_num_rows($result);
    if ($present > 0) {
        echo 'exists';
    } else {
        echo 'not-exists';
    }
} else
    echo 'no data';
