<?php
require_once("config-teachers.php");
?>
<?php
if (isset($_POST)) {
    $student_group = $_POST['student_group'];
    $pdffile = $_FILES['file'];
    $saveto = __DIR__ . DIRECTORY_SEPARATOR . 'vakalar' . DIRECTORY_SEPARATOR . time() . '_' . $pdffile['name'];
    //Move file:
    move_uploaded_file($pdffile['tmp_name'], $saveto);

    echo $pdffile['name'];

    $sql = "INSERT INTO vakalar (filename, student_group) VALUES(?,?)";
    $smtminsert = $db->prepare($sql);
    $result = $smtminsert->execute([$saveto, $student_group]);
    if ($result) {
        echo 'Başarılı';
    } else {
        echo 'Hata';
    }
} else
    echo 'no data';
