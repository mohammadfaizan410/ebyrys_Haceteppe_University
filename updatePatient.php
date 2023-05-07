<?php
require_once("config-students.php");
?>
<?php
if (isset($_POST)) {
    $patient_id = $_POST['patient_id'];
    $uyaran = $_POST['uyaran'];
    $nemlilik = $_POST['nemlilik'];
    $aktivite = $_POST['aktivite'];
    $hareket = $_POST['hareket'];
    $beslenme = $_POST['beslenme'];
    $surtunme = $_POST['surtunme'];
    $sql = "UPDATE patients SET uyaran=?, nemlilik=?, aktivite=?, hareket=?, beslenme=?, surtunme=? WHERE patient_id=?";
    $stmt = $db->prepare($sql);
    $result = $stmt->execute([
        $uyaran, $nemlilik, $aktivite, $hareket, $beslenme, $surtunme, $patient_id
    ]);
    if ($result) {
        echo 'successfully updated!';
    } else {
        echo 'error';
    }
} else {
    echo 'no data';
}