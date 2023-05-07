<?php
require_once("config-students.php");
?>
<?php
if (isset($_POST)) {
    $id = $_POST['id'];
    $student_group = $_POST['student_group'];
    $sql = "UPDATE students SET student_group=? WHERE id=?";
    $stmt = $db->prepare($sql);
    $result = $stmt->execute([$student_group, $id]);
    if ($result) {
        echo 'Güncelleme başarılı';
    } else {
        echo 'Hata';
    }
} else {
    echo 'no data';
}
