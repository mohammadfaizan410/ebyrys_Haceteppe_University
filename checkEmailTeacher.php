<?php
require_once("config-students.php");
?>
<?php
if (isset($_POST)) {
    $email = $_POST['email'];    
    $sql = "Select * from teachers where email = '$email'";
    $result = mysqli_query($conn, $sql);
    $present= mysqli_num_rows($result);
    if ($present > 0) {
        echo 'exists';
    } else {
        echo 'not-exists';
    }
} else
    echo 'no data';