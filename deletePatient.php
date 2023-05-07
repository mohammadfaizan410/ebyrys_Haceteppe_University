<?php
require_once("config-students.php");
?>
<?php
if (isset($_POST)) {
    $patient_id = $_POST['patient_id'];
    $sql = "DELETE FROM patients WHERE patient_id=?";
    $stmt = $db->prepare($sql);
    $result = $stmt->execute([$patient_id]);
    if ($result) {
        echo 'Silme işlemi başarılı';
    } else {
        echo 'Silme işlemi başarısız';
    }
} else {
    echo 'No data';
}
