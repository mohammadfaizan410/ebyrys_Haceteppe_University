<?php
require_once("config-students.php");
?>
<?php
if (isset($_POST)) {
    echo 'aasdafa';
    $id = $_POST['id'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $age = $_POST['age'];
    $not = $_POST['not'];
    $uyaran = $_POST['uyaran'];
    $nemlilik = $_POST['nemlilik'];
    $aktivite = $_POST['aktivite'];
    $hareket = $_POST['hareket'];
    $beslenme = $_POST['beslenme'];
    $surtunme = $_POST['surtunme'];
    $renk = $_POST['renk'];
    $sicaklik = $_POST['sicaklik'];
    $odem = $_POST['odem'];
    $butunluk = $_POST['butunluk'];
    $butunluknot = $_POST['butunluknot'];
    $nrs1 = $_POST['nrs1'];
    $nrs2 = $_POST['nrs2'];
    $nrs3 = $_POST['nrs3'];
    $nrs4 = $_POST['nrs4'];
    $nutrisyon = $_POST['nutrisyon'];
    $nrsyas = $_POST['nrsyas'];
    $siddet = $_POST['siddet'];

    var_dump($uyaran);
    echo $name;
    $sql = "INSERT INTO patients (id ,name, surname, age, notlar, uyaran, nemlilik, aktivite, hareket, beslenme, surtunme, renk, sicaklik, odem, butunluk, butunluknot, nrs1, nrs2, nrs3, nrs4, nutrisyon, nrsyas, siddet) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    $smtminsert = $db->prepare($sql);
    $result = $smtminsert->execute([
        $id, $name, $surname, $age, $not, $uyaran, $nemlilik, $aktivite, $hareket, $beslenme, $surtunme, $renk, $sicaklik, $odem, $butunluk, $butunluknot, $nrs1, $nrs2, $nrs3, $nrs4, $nutrisyon, $nrsyas, $siddet
    ]);
    if ($result) {
        echo 'success';
    } else {
        echo 'error';
    }
} else
    echo 'no data';