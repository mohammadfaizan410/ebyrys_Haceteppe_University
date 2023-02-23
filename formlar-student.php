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

    <!-- Customized Bootstrap Stylesheet -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="style.css" rel="stylesheet">

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
        }

        ?>
        <div class="send-patient">

            <div class=" patients-save">
                <form action="" method="POST" class="patients-save-fields">
                    <p class="usernamelabel">Hasta Adı</p>
                    <input type="text" class="form-control" required name="name" id="name" placeholder="Hasta Adı Giriniz">

                    <p class="usernamelabel">Hasta Soyadı</p>
                    <input type="text" class="form-control" required name="surname" id="surname" placeholder="Hasta Soyadı Giriniz">

                    <p class="usernamelabel">Hasta Yaşı</p>
                    <input type="text" class="form-control" required name="age" id="age" placeholder="Hasta Yaşı Giriniz">

                    <p class="usernamelabel">Notlar</p>
                    <input type="text" class="form-control not" required name="not" id="not" placeholder="Not giriniz">

                    <h1 class="braden-header">Braden Parametreleri</h1>

                    <p class="braden-label">Uyaranın Algılanması</p>

                    <div class="checkbox-wrapper">
                        <div class="checkboxes">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="uyaranradio" id="uyaranradio" value="option1">
                                <label class="form-check-label" for="uyaranradio">
                                    <span class="checkbox-header"> Skor 1: Tamamen Yetersiz </span>
                                    Ağrılı uyaranlara yanıt vermiyor.
                                    Bilinçsizliğe bağlı olarak vücudunda ağrı odaklarını hissedemiyor.</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="uyaranradio" id="uyaranradio" value="option2">
                                <label class="form-check-label" for="uyaranradio">
                                    <span class="checkbox-header"> Skor 2: Çok Yetersiz </span>
                                    Yalnız ağrılı uyaranlara yanıt veriyor.
                                    Rahatsızlığını inleme ile belli edebiliyor.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="uyaranradio" id="uyaranradio" value="option3">
                                <label class="form-check-label" for="uyaranradio">
                                    <span class="checkbox-header"> Skor 3: Biraz Yeterli </span>
                                    Sözlü uyaranlara yanıt veriyor.
                                    Sürekli iletişim kurulamıyor.
                                    Hastanın yatak İçinde çevrilmesi gerekiyor.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="uyaranradio" id="uyaranradio" value="option4">
                                <label class="form-check-label" for="uyaranradio">
                                    <span class="checkbox-header"> Skor 4: Tamamen Yeterli </span>
                                    Sözlü uyaranlara yanıt veriyor.
                                    Duyu kusuru yok.
                                </label>
                            </div>
                        </div>
                    </div>
                    <p class="braden-label">Nemlilik</p>

                    <div class="checkbox-wrapper">

                        <div class="checkboxes">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="nemlilikradio" id="nemlilikradio1" value="option1">
                                <label class="form-check-label" for="nemlilikradio1">
                                    <span class="checkbox-header"> Skor 1: Sürekli Islak </span>
                                    Deri, ter, İdrar, gaita ile sürekli ıslak. Her çevrildiğinde ıslaklık hissediliyor.
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="nemlilikradio" id="nemlilikradio2" value="option2">
                                <label class="form-check-label" for="nemlilikradio2">
                                    <span class="checkbox-header"> Skor 2: Çok Islak </span>
                                    Deri çoğu zaman ıslak.
                                    Her vardiyada çarşafların bir kez değiştirilmesi gerekiyor.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="nemlilikradio" id="nemlilikradio3" value="option3">
                                <label class="form-check-label" for="nemlilikradio3">
                                    <span class="checkbox-header"> Skor 3: Bazen Islak </span>
                                    Deri bazen ıslak.
                                    Çarşafların ıslandıkça değiştirilmesi gerekiyor.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="nemlilikradio" id="nemlilikradio4" value="option4">
                                <label class="form-check-label" for="nemlilikradio4">
                                    <span class="checkbox-header"> Skor 4: Nadiren Islak</span>
                                    Deri genellikle kuru.
                                    Çarşafların rutin olarak değiştirilmesi gerekiyor
                                </label>
                            </div>
                        </div>
                    </div>

                    <p class="braden-label">Aktivite</p>

                    <div class="checkbox-wrapper">

                        <div class="checkboxes">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="aktiviteradio" id="aktiviteradio1" value="option1">
                                <label class="form-check-label" for="aktiviteradio1">
                                    <span class="checkbox-header"> Skor 1: Yatağa Bağımlı </span>
                                    Her türlü bakım gereksinimi yatakta karşılanıyor.
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="aktiviteradio" id="aktiviteradio2" value="option2">
                                <label class="form-check-label" for="aktiviteradio2">
                                    <span class="checkbox-header"> Skor 2: Sandalyeye Bağımlı </span>
                                    Çok az yürüyebiliyor.
                                    Sandalyeye oturabilmesi için yardım gerekiyor.
                                    Kendi ağırlığını kaldırmakta güçlük çekiyor.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="aktiviteradio" id="aktiviteradio3" value="option3">
                                <label class="form-check-label" for="aktiviteradio3">
                                    <span class="checkbox-header"> Skor 3: Bazen Yürüyebiliyor </span>
                                    Yardımla veya yardımsız kısa mesafede yürüyebiliyor.
                                    Her vardiyada çoğu zaman yatakta veya sandalyede oturuyor.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="aktiviteradio" id="aktiviteradio4" value="option4">
                                <label class="form-check-label" for="aktiviteradio4">
                                    <span class="checkbox-header"> Skor 4: Sık Sık Yürüyebiliyor</span>
                                    Günde en az iki defa oda dışına çıkabiliyor.
                                    Oda içinde 2 saatte bir yürüyebiliyor.
                                </label>
                            </div>
                        </div>
                    </div>


                    <p class="braden-label">Hareket</p>

                    <div class="checkbox-wrapper">

                        <div class="checkboxes">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="hareketradio" id="hareketradio1" value="option1">
                                <label class="form-check-label" for="hareketradio1">
                                    <span class="checkbox-header"> Skor 1: Tamamen Hareketsiz</span>
                                    Yardımsız pozisyon değiştiremiyor.
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="hareketradio" id="hareketradio2" value="option2">
                                <label class="form-check-label" for="hareketradio2">
                                    <span class="checkbox-header"> Skor 2: Çok Hareketsiz </span>
                                    Vücut ve ekstremite pozisyonunda hafif değişiklik yapabiliyor.
                                    Kendiliğinden pozisyonunu değiştiremiyor.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="hareketradio" id="hareketradio3" value="option3">
                                <label class="form-check-label" for="hareketradio3">
                                    <span class="checkbox-header"> Skor 3: Az Hareketli </span>
                                    Vücut ve ekstremitelerinde sık, ancak hafif değişiklik yapabiliyor.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="hareketradio" id="hareketradio4" value="option4">
                                <label class="form-check-label" for="hareketradio4">
                                    <span class="checkbox-header"> Skor 4: Hareketli</span>
                                    Pozisyonunu yardımsız sıklıkla değiştirebiliyor.
                                </label>
                            </div>
                        </div>
                    </div>

                    <p class="braden-label">Beslenme</p>

                    <div class="checkbox-wrapper">

                        <div class="checkboxes">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="beslenmeradio" id="beslenmeradio1" value="option1">
                                <label class="form-check-label" for="beslenmeradio1">
                                    <span class="checkbox-header"> Skor 1: Çok Yetersiz</span>
                                    Asla öğününün tamamını yiyemiyor.
                                    Nadiren verilen yemeğin 1/3'ünü yiyebiliyor.
                                    İki öğün ya da daha az protein alabiliyor (Et ve süt ürünleri).
                                    Sıvı alımı az. Ağızdan sıvı desteği alamıyor.
                                    Beş günden fazla süredir IV ve berrak diyet alıyor.
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="beslenmeradio" id="beslenmeradio2" value="option2">
                                <label class="form-check-label" for="beslenmeradio2">
                                    <span class="checkbox-header"> Skor 2: Yetersiz </span>
                                    Verilen yemeğin yarısını, nadiren tamamını yiyebiliyor.
                                    Günde 3 defa protein, bazen destekleyici ek gıda alabiliyor.
                                    Uygun diyetin tüp ile verilen besinin birazını alabiliyor.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="beslenmeradio" id="beslenmeradio3" value="option3">
                                <label class="form-check-label" for="beslenmeradio3">
                                    <span class="checkbox-header"> Skor 3: Yeterli</span>
                                    Öğünün yarısından fazlasını yiyebiliyor.
                                    Günde 4 kez protein alabiliyor.
                                    Ara sıra öğünü reddediyor.
                                    Verilmişse ek diyet ya da total parenteral beslenme alıyor </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="beslenmeradio" id="beslenmeradio4" value="option4">
                                <label class="form-check-label" for="beslenmeradio4">
                                    <span class="checkbox-header"> Skor 4: Çok İyi</span>
                                    Her öğünü çoğunlukla yiyor, öğünleri reddetmiyor.
                                    Günde 4 defa protein alabiliyor.
                                    Genellikle öğün aralarında yiyor.
                                    Ek gıda gerekmiyor. </label>
                            </div>
                        </div>
                    </div>

                    <p class="braden-label">Sürtünme Ve Tahriş</p>

                    <div class="checkbox-wrapper">

                        <div class="checkboxes">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="surtunmeradio" id="surtunmeradio1" value="option1">
                                <label class="form-check-label" for="surtunmeradio1">
                                    <span class="checkbox-header"> Skor 1: Sorun </span>
                                    Hareket ederken çok fazla yardıma gereksinimi var.
                                    Çarşafta kaydırmaksızın tamamen kaldırılması olanaksız.
                                    Sıklıkla sandalyeden ya da yataktan aşağı kayıyor.
                                    Yeniden pozisyon vermede çok fazla yardıma gereksinimi var.
                                    Sertlik, kontraktür ya da huzursuzluk sürekli sürtünmeye yol açabiliyor.
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="surtunmeradio" id="surtunmeradio2" value="option2">
                                <label class="form-check-label" for="surtunmeradio2">
                                    <span class="checkbox-header"> Skor 2: Olası Sorun </span>
                                    Çok az yardımla az ve güçsüz hareket yapabiliyor.
                                    Hareket sırasında deri, çarşafa sandalyeye ya da diğer malzemelere sürtünüyor.
                                    Genellikle yatak ve sandalyede pozisyonunu sürdürüyor, fakat bazen kayıyor. </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="surtunmeradio" id="surtunmeradio3" value="option3">
                                <label class="form-check-label" for="surtunmeradio3">
                                    <span class="checkbox-header"> Skor 3: Sorun Yok</span>
                                    Yatak ve sandalyede bağımsız hareket edebiliyor.
                                    Kendini kaldırabilmek için, yeterli kas gücü var.
                                    Yatak ya da sandalyede her zaman uygun pozisyonda duruyor. </label>
                            </div>
                        </div>
                    </div>

                    <input type="submit" class="form-control submit" name="submit" id="submit" value="Kaydet">

                </form>
            </div>
            <div class="patients-table dark-blue text-center rounded p-4" id="patients-table">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0">Hastalar</h6>

                </div>

                <div class="table-responsive">
                    <table class="table text-start align-middle table-bordered table-hover mb-0">
                        <thead>
                            <tr class="text-white">

                                <th scope="col">İsim</th>
                                <th scope="col">Soyisim</th>
                                <th scope="col">Yaş</th>
                                <th scope="col">Notlar</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($values as &$value)
                                echo "
                                <tr>
                                   
                                    <td style='
                                    color: white;'>" . $value["name"] . "</td>
                                    <td style='
                                    color: white;'>" . $value["surname"] . "</td>
                                    <td style='
                                    color: white;'>" . $value["age"] . "</td>
                                    <td style='
                                    color: white;'> " . $value["notlar"] . " </td>
                                </tr>"

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