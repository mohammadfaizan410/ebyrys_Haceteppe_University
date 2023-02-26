<?php
session_start();
if (!isset($_SESSION['userlogin'])) {
    header("Location: login-student.php");
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION);
    header("Location: main.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>e-BYRYS-KKDS</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">


    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->

</head>

<body style="background-color:white">
    <div class="container-fluid pt-4 px-4">
        <?php
        require_once('config-students.php');
        $userid = $_SESSION['userlogin']['id'];
        //echo $userid;
        $sql = "SELECT * FROM  patients  WHERE id =" . $userid;
        $smtmselect = $db->prepare($sql);
        $result = $smtmselect->execute();
        if ($result) {
            $values = $smtmselect->fetchAll(PDO::FETCH_ASSOC);
        } else {
            echo 'error';
        };



        ?>
        <div class="send-patient">

            <div class=" patients-save">

            </div>
            <div class="patients-table text-center rounded p-4" id="patients-table">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0 darkcyan table-title">Hastalar</h6>

                </div>

                <div class="table-responsive">
                    <table class="table text-start align-middle table-bordered table-hover mb-0">
                        <thead>
                            <tr class=" darkcyan table-head">

                                <th scope="col">İsim</th>
                                <th scope="col">Soyisim</th>
                                <th scope="col">Yaş</th>
                                <th scope="col">Notlar</th>
                                <th scope="col">Detaylar</th>

                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            foreach ($values as &$value) {
                                $uyaran = $value['uyaran'];
                                if ($uyaran == '') {
                                    $uyaranval = 'Veri Bulunamadı';
                                    $girisim = 'Veri Bulunamadı';
                                }
                                if ($uyaran == 'option1') {
                                    $uyaranval = '<span class="girisimler-score bold block"> Skor 1: Tamamen Yetersiz </span>
                                    <span class="girisimler-span">Ağrılı uyaranlara yanıt vermiyor.
                                    Bilinçsizliğe bağlı olarak vücudunda ağrı odaklarını hissedemiyor.</span>';
                                    $girisim = '<span class="girisimler-span"><span class="bold"> ÖG1- </span>En az 2 saatte 1 pozisyon verme</span>
                                    <span class="girisimler-span"><span class="bold">ÖG2-</span> Vücut pozisyonunda sık aralıklarla küçük değişimler yapma</span>
                                    <span class="girisimler-span"><span class="bold">ÖG3-</span>Havalı yatak vb. destek yüzey kullanma</span>
                                    <span class="girisimler-span"><span class="bold">ÖG4-</span>Basınç altında kalan vücut bölümlerine koruyucu yara örtüsü uygulama</span>';
                                }
                                if ($uyaran == 'option2') {
                                    $uyaranval = '<span class="girisimler-score bold block"> Skor 2: Çok Yetersiz </span>
                                    Yalnız ağrılı uyaranlara yanıt veriyor.
                                    Rahatsızlığını inleme ile belli edebiliyor.';
                                    $girisim = '<span class="girisimler-span"><span class="bold"> ÖG1- </span>En az 2 saatte 1 pozisyon verme</span>
                                    <span class="girisimler-span"><span class="bold">ÖG2-</span> Vücut pozisyonunda sık aralıklarla küçük değişimler yapma</span>
                                    <span class="girisimler-span"><span class="bold">ÖG3-</span>Havalı yatak vb. destek yüzey kullanma</span>
                                    <span class="girisimler-span"><span class="bold">ÖG4-</span>Basınç altında kalan vücut bölümlerine koruyucu yara örtüsü uygulama</span>';
                                }
                                if ($uyaran == 'option3') {
                                    $uyaranval = '<span class="girisimler-score bold block"> Skor 3: Biraz Yeterli </span>
                                    Sözlü uyaranlara yanıt veriyor.
                                    Sürekli iletişim kurulamıyor.
                                    Hastanın yatak İçinde çevrilmesi gerekiyor.';
                                    $girisim = '<span class="girisimler-span"><span class="bold"> ÖG1- </span>En az 2 saatte 1 pozisyon verme</span>
                                    <span class="girisimler-span"><span class="bold">ÖG2-</span> Vücut pozisyonunda sık aralıklarla küçük değişimler yapma</span>
                                    <span class="girisimler-span"><span class="bold">ÖG3-</span>Havalı yatak vb. destek yüzey kullanma</span>
                                    <span class="girisimler-span"><span class="bold">ÖG4-</span>Basınç altında kalan vücut bölümlerine koruyucu yara örtüsü uygulama</span>';
                                }
                                if ($uyaran == 'option4') {
                                    $uyaranval = '<span class="girisimler-score bold block"> Skor 4: Tamamen Yeterli </span>
                                    Sözlü uyaranlara yanıt veriyor.
                                    Duyu kusuru yok.';
                                    $girisim = '<span class="girisimler-span"><span class="bold">ÖG5-</span>Kademeli olarak mobilizasyonun sağlanması</span>';
                                }
                                echo "
                                <tr>
                                   
                                    <td style='
                                    color: black; font-size: 18px;
                                   '>" . $value["name"] . "</td>
                                    <td style='
                                    color: black; font-size: 18px;
                                    '>" . $value["surname"] . "</td>
                                    <td style='
                                    color: black; font-size: 18px;
                                    '>" . $value["age"] . "</td>
                                    <td style='
                                    color: black; font-size: 18px;
                                    '> " . $value["notlar"] . " </td>
                                    <td style='
                                    color: black; font-size: 18px;
                                    '> <button type='button' id = '" . $value['patient_id'] . "' class='btn btn-success'>Detay</button> </td>
                                    
                                    <div id='myModal" . $value['patient_id'] . "' class='modal none'>

                                        <!-- Modal content -->
                                        <div class='modal-content' id='modal-content" . $value['patient_id'] . "'>
                                            <span class='close" . $value['patient_id'] . " closeBtn' id='close" . $value['patient_id'] . "'>&times;</span>
                                            <p>Hasta Adı:" . $value['name'] . "</p>
                                            <p>Hasta Soyadı:" . $value['surname'] . "</p>
                                            <p>Hasta yaşı:" . $value['age'] . "</p>
                                            <p>Not:" . $value['notlar'] . "</p>
                                            <div class='girisimler'>
                                                <p class='girisimler-p'><span class='girisimler-span block girisimler-header'>Uyaranın Algılanması:</span>" . $uyaranval . "</p>
                                                <p class='girisimler-p'><span class='girisimler-span block girisimler-header'>Önerilen Girişimler:</span>" . $girisim . "</p>
                                            </div>
                                            <div class='girisimler'>
                                                <p class='girisimler-p'><span class='girisimler-span block girisimler-header'>Nemlilik:</span>" . $uyaranval . "</p>
                                                <p class='girisimler-p'><span class='girisimler-span block girisimler-header'>Önerilen Girişimler:</span>" . $girisim . "</p>
                                            </div>
                                            <div class='girisimler'>
                                            <p class='girisimler-p'><span class='girisimler-span block girisimler-header'>Hareket:</span>" . $uyaranval . "</p>
                                            <p class='girisimler-p'><span class='girisimler-span block girisimler-header'>Önerilen Girişimler:</span>" . $girisim . "</p>
                                            </div>
                                            <div class='girisimler'>
                                            <p class='girisimler-p'><span class='girisimler-span block girisimler-header'>Beslenme:</span>" . $uyaranval . "</p>
                                            <p class='girisimler-p'><span class='girisimler-span block girisimler-header'>Önerilen Girişimler:</span>" . $girisim . "</p>
                                            </div>
                                        </div>

                                    </div>
                                </tr>
                                
                                <script>
                            var modal" . $value['patient_id'] . " = document.getElementById('myModal" . $value['patient_id'] . "');

                                // Get the button that opens the modal
                                var btn" . $value['patient_id'] . " = document.getElementById('" . $value['patient_id'] . "');
                        
                                // Get the <span> element that closes the modal
                                var span" . $value['patient_id'] . " = document.getElementById('close" . $value['patient_id'] . "');
                               
                                
                                // When the user clicks on the button, open the modal
                                btn" . $value['patient_id'] . ".onclick = function() {
                                    modal" . $value['patient_id'] . ".classList.remove('none');
                                    modal" . $value['patient_id'] . ".classList.add('block');
                                 

                                span" . $value['patient_id'] . ".onclick = function() {
                                    modal" . $value['patient_id'] . ".classList.remove('block');
                                    modal" . $value['patient_id'] . ".classList.add('none');
                                }
                    
                                
                                window.onclick = function(event) {
                                    if (event.target == modal" . $value['patient_id'] . ") {
                                        modal" . $value['patient_id'] . ".classList.remove('block');
                                    
                                    }
                                }
                                }
                    
                                
                            </script>";
                            }
                            ?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <script>
        $(function() {
            $('#submit').click(function(e) {


                var valid = this.form.checkValidity();

                if (valid) {
                    var id = <?php

                                    $userid = $_SESSION['userlogin']['id'];
                                    echo $userid
                                    ?>;
                    var name = $('#name').val();
                    var surname = $('#surname').val();
                    var age = $('#age').val();
                    var not = $('#not').val();
                    var not = $('#not').val();



                    var ele = document.getElementsByName('uyaranradio');

                    for (i = 0; i < ele.length; i++) {
                        if (ele[i].checked)
                            var uyaran = ele[i].value;

                    }
                    console.log(uyaran);

                    var ele = document.getElementsByName('nemlilikradio');

                    for (i = 0; i < ele.length; i++) {
                        if (ele[i].checked)
                            var nemlilik = ele[i].value;

                    }
                    console.log(nemlilik);

                    var ele = document.getElementsByName('aktiviteradio');

                    for (i = 0; i < ele.length; i++) {
                        if (ele[i].checked)
                            var aktivite = ele[i].value;

                    }
                    console.log(aktivite);

                    var ele = document.getElementsByName('hareketradio');

                    for (i = 0; i < ele.length; i++) {
                        if (ele[i].checked)
                            var hareket = ele[i].value;

                    }
                    console.log(hareket);

                    var ele = document.getElementsByName('beslenmeradio');

                    for (i = 0; i < ele.length; i++) {
                        if (ele[i].checked)
                            var beslenme = ele[i].value;

                    }
                    console.log(beslenme);

                    var ele = document.getElementsByName('surtunmeradio');

                    for (i = 0; i < ele.length; i++) {
                        if (ele[i].checked)
                            var surtunme = ele[i].value;

                    }
                    console.log(surtunme);
                    e.preventDefault()

                    $.ajax({
                        type: 'POST',
                        url: 'student-patient.php',
                        data: {
                            id: id,
                            name: name,
                            surname: surname,
                            age: age,
                            not: not,
                            uyaran: uyaran,
                            nemlilik: nemlilik,
                            aktivite: aktivite,
                            hareket: hareket,
                            beslenme: beslenme,
                            surtunme: surtunme
                        },
                        success: function(data) {
                            alert("Success");
                            location.reload(true)
                        },
                        error: function(data) {
                            Swal.fire({
                                'title': 'Errors',
                                'text': 'There were errors',
                                'type': 'error'
                            })
                        }
                    })



                }
            })

        });
        </script>
        <script>
        $(window).on('load', function() {
            $("body").removeClass("preload");

        });
        </script>
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/chart/chart.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/tempusdominus/js/moment.min.js"></script>
        <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
        <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

        <!-- Template Javascript -->
        <script src="main.js"></script>
</body>

</html>