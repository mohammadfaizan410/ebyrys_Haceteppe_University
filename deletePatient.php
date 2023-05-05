<?php
require_once("config-students.php");

if (isset($_POST['patient_id'])) {
    $patient_id = $_POST['patient_id'];

    $sql = "DELETE FROM patients WHERE patient_id = ?";
    $stmt = $db->prepare($sql);
    $result = $stmt->execute([$patient_id]);

    if ($result) {
        echo 'successfully deleted!';
    } else {
        echo 'error';
    }
} else {
    echo 'no data';
}
?>