<?php
require_once("config-teachers.php");
?>
<?php
if (isset($_POST)) {
    echo 'aasdafa';
    $pdffile = $_FILES['file'];
    $saveto = __DIR__ . DIRECTORY_SEPARATOR . 'vakalar' . DIRECTORY_SEPARATOR . time() . '_' . $pdffile['name'];

    //Move file:
    move_uploaded_file($pdffile['tmp_name'], $saveto);
    echo 'mmmmmmmmmmmm';
    echo $pdffile['name'];

    $sql = "INSERT INTO vakalar (filename) VALUES(?)";
    $smtminsert = $db->prepare($sql);
    $result = $smtminsert->execute([$saveto]);
    if ($result) {
        echo 'success';
    } else {
        echo 'error';
    }
} else
    echo 'no data';