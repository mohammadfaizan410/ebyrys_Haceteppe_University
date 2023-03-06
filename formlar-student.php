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


    <link href="style.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->

</head>
<script>
$(window).on('load', function() {
    $("body").removeClass("preload");
});
</script>

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
            <div class="pdf-section">
                <object data="Test_vakasi.pdf" width="800" height="500">
                </object>
            </div>
            <div class=" patients-save">
                <form action="" method="POST" class="patients-save-fields">
                    <div class="patient-info">
                        <div class="patient-info-left">
                            <p class="usernamelabel">Hasta Adı</p>
                            <input type="text" class="form-control" required name="name" id="name"
                                placeholder="Hasta Adı Giriniz">

                            <p class="usernamelabel">Hasta Soyadı</p>
                            <input type="text" class="form-control" required name="surname" id="surname"
                                placeholder="Hasta Soyadı Giriniz">

                            <p class="usernamelabel">Hasta Yaşı</p>
                            <input type="text" class="form-control" required name="age" id="age"
                                placeholder="Hasta Yaşı Giriniz">
                        </div>
                        <div class="patient-info-left">

                            <p class="usernamelabel">Notlar</p>
                            <input type="text" class="form-control not" required name="not" id="not"
                                placeholder="Not giriniz">
                        </div>
                    </div>
                    <h1 class="braden-header">Braden Parametreleri</h1>

                    <p class="braden-label">Uyaranın Algılanması</p>

                    <div class="checkbox-wrapper">
                        <div class="checkboxes">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="uyaranradio" id="uyaranradio"
                                    value="option1">
                                <label class="form-check-label" for="uyaranradio">
                                    <span class="checkbox-header"> Skor 1: Tamamen Yetersiz </span>
                                    Ağrılı uyaranlara yanıt vermiyor.
                                    Bilinçsizliğe bağlı olarak vücudunda ağrı odaklarını hissedemiyor.</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="uyaranradio" id="uyaranradio"
                                    value="option2">
                                <label class="form-check-label" for="uyaranradio">
                                    <span class="checkbox-header"> Skor 2: Çok Yetersiz </span>
                                    Yalnız ağrılı uyaranlara yanıt veriyor.
                                    Rahatsızlığını inleme ile belli edebiliyor.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="uyaranradio" id="uyaranradio"
                                    value="option3">
                                <label class="form-check-label" for="uyaranradio">
                                    <span class="checkbox-header"> Skor 3: Biraz Yeterli </span>
                                    Sözlü uyaranlara yanıt veriyor.
                                    Sürekli iletişim kurulamıyor.
                                    Hastanın yatak İçinde çevrilmesi gerekiyor.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="uyaranradio" id="uyaranradio"
                                    value="option4">
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
                                <input class="form-check-input" type="radio" name="nemlilikradio" id="nemlilikradio1"
                                    value="option1">
                                <label class="form-check-label" for="nemlilikradio1">
                                    <span class="checkbox-header"> Skor 1: Sürekli Islak </span>
                                    Deri, ter, İdrar, gaita ile sürekli ıslak. Her çevrildiğinde ıslaklık hissediliyor.
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="nemlilikradio" id="nemlilikradio2"
                                    value="option2">
                                <label class="form-check-label" for="nemlilikradio2">
                                    <span class="checkbox-header"> Skor 2: Çok Islak </span>
                                    Deri çoğu zaman ıslak.
                                    Her vardiyada çarşafların bir kez değiştirilmesi gerekiyor.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="nemlilikradio" id="nemlilikradio3"
                                    value="option3">
                                <label class="form-check-label" for="nemlilikradio3">
                                    <span class="checkbox-header"> Skor 3: Bazen Islak </span>
                                    Deri bazen ıslak.
                                    Çarşafların ıslandıkça değiştirilmesi gerekiyor.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="nemlilikradio" id="nemlilikradio4"
                                    value="option4">
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
                                <input class="form-check-input" type="radio" name="aktiviteradio" id="aktiviteradio1"
                                    value="option1">
                                <label class="form-check-label" for="aktiviteradio1">
                                    <span class="checkbox-header"> Skor 1: Yatağa Bağımlı </span>
                                    Her türlü bakım gereksinimi yatakta karşılanıyor.
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="aktiviteradio" id="aktiviteradio2"
                                    value="option2">
                                <label class="form-check-label" for="aktiviteradio2">
                                    <span class="checkbox-header"> Skor 2: Sandalyeye Bağımlı </span>
                                    Çok az yürüyebiliyor.
                                    Sandalyeye oturabilmesi için yardım gerekiyor.
                                    Kendi ağırlığını kaldırmakta güçlük çekiyor.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="aktiviteradio" id="aktiviteradio3"
                                    value="option3">
                                <label class="form-check-label" for="aktiviteradio3">
                                    <span class="checkbox-header"> Skor 3: Bazen Yürüyebiliyor </span>
                                    Yardımla veya yardımsız kısa mesafede yürüyebiliyor.
                                    Her vardiyada çoğu zaman yatakta veya sandalyede oturuyor.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="aktiviteradio" id="aktiviteradio4"
                                    value="option4">
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
                                <input class="form-check-input" type="radio" name="hareketradio" id="hareketradio1"
                                    value="option1">
                                <label class="form-check-label" for="hareketradio1">
                                    <span class="checkbox-header"> Skor 1: Tamamen Hareketsiz</span>
                                    Yardımsız pozisyon değiştiremiyor.
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="hareketradio" id="hareketradio2"
                                    value="option2">
                                <label class="form-check-label" for="hareketradio2">
                                    <span class="checkbox-header"> Skor 2: Çok Hareketsiz </span>
                                    Vücut ve ekstremite pozisyonunda hafif değişiklik yapabiliyor.
                                    Kendiliğinden pozisyonunu değiştiremiyor.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="hareketradio" id="hareketradio3"
                                    value="option3">
                                <label class="form-check-label" for="hareketradio3">
                                    <span class="checkbox-header"> Skor 3: Az Hareketli </span>
                                    Vücut ve ekstremitelerinde sık, ancak hafif değişiklik yapabiliyor.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="hareketradio" id="hareketradio4"
                                    value="option4">
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
                                <input class="form-check-input" type="radio" name="beslenmeradio" id="beslenmeradio1"
                                    value="option1">
                                <label class="form-check-label" for="beslenmeradio1">
                                    <span class="checkbox-header"> Skor 1: Çok Yetersiz</span>
                                    Asla öğününün tamamını yiyemiyor.
                                    Nadiren verilen yemeğin 1/3'ünü yiyebiliyor.
                                    İki öğün ya da daha az protein alabiliyor (Et ve süt ürünleri).
                                    Sıvı alımı az. Ağızdan sıvı desteği alamıyor.
                                    Beş günden fazla süredir IV ve berrak diyet alıyor.
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="beslenmeradio" id="beslenmeradio2"
                                    value="option2">
                                <label class="form-check-label" for="beslenmeradio2">
                                    <span class="checkbox-header"> Skor 2: Yetersiz </span>
                                    Verilen yemeğin yarısını, nadiren tamamını yiyebiliyor.
                                    Günde 3 defa protein, bazen destekleyici ek gıda alabiliyor.
                                    Uygun diyetin tüp ile verilen besinin birazını alabiliyor.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="beslenmeradio" id="beslenmeradio3"
                                    value="option3">
                                <label class="form-check-label" for="beslenmeradio3">
                                    <span class="checkbox-header"> Skor 3: Yeterli</span>
                                    Öğünün yarısından fazlasını yiyebiliyor.
                                    Günde 4 kez protein alabiliyor.
                                    Ara sıra öğünü reddediyor.
                                    Verilmişse ek diyet ya da total parenteral beslenme alıyor </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="beslenmeradio" id="beslenmeradio4"
                                    value="option4">
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
                                <input class="form-check-input" type="radio" name="surtunmeradio" id="surtunmeradio1"
                                    value="option1">
                                <label class="form-check-label" for="surtunmeradio1">
                                    <span class="checkbox-header"> Skor 1: Sorun </span>
                                    Hareket ederken çok fazla yardıma gereksinimi var.
                                    Çarşafta kaydırmaksızın tamamen kaldırılması olanaksız.
                                    Sıklıkla sandalyeden ya da yataktan aşağı kayıyor.
                                    Yeniden pozisyon vermede çok fazla yardıma gereksinimi var.
                                    Sertlik, kontraktür ya da huzursuzluk sürekli sürtünmeye yol açabiliyor.
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="surtunmeradio" id="surtunmeradio2"
                                    value="option2">
                                <label class="form-check-label" for="surtunmeradio2">
                                    <span class="checkbox-header"> Skor 2: Olası Sorun </span>
                                    Çok az yardımla az ve güçsüz hareket yapabiliyor.
                                    Hareket sırasında deri, çarşafa sandalyeye ya da diğer malzemelere sürtünüyor.
                                    Genellikle yatak ve sandalyede pozisyonunu sürdürüyor, fakat bazen kayıyor. </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="surtunmeradio" id="surtunmeradio3"
                                    value="option3">
                                <label class="form-check-label" for="surtunmeradio3">
                                    <span class="checkbox-header"> Skor 3: Sorun Yok</span>
                                    Yatak ve sandalyede bağımsız hareket edebiliyor.
                                    Kendini kaldırabilmek için, yeterli kas gücü var.
                                    Yatak ya da sandalyede her zaman uygun pozisyonda duruyor. </label>
                            </div>
                        </div>
                    </div>

                    <h1 class="braden-header">Cilt Değerlendirme</h1>

                    <p class="braden-label">Cilt Rengi</p>

                    <div class="checkbox-wrapper">
                        <div class="checkboxes">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="renkradio" id="renkradio"
                                    value="option1">
                                <label class="form-check-label" for="renkradio">
                                    <span class="checkbox-header"> 1. Cilt normal renklilikte </span>
                                    Ciltte herhangi bir renk değişimi yok.</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="renkradio" id="renkradio"
                                    value="option2">
                                <label class="form-check-label" for="renkradio">
                                    <span class="checkbox-header"> 2. Ciltte kızarıklıklar var </span>
                                    Ciltte pozisyon sonrası geçen kızarıklık oluşumu mevcut.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="renkradio" id="renkradio"
                                    value="option3">
                                <label class="form-check-label" for="renkradio">
                                    <span class="checkbox-header"> 3. Ciltte basmakla solmayan kızarıklıklar var </span>
                                    Ciltte, özellikle basınç altında kalan bölgelerde basmakla solmayan kızarıklık
                                    oluşumu mevcut.
                                </label>
                            </div>

                        </div>
                    </div>

                    <p class="braden-label">Cilt Sıcaklığı</p>

                    <div class="checkbox-wrapper">
                        <div class="checkboxes">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sicaklikradio" id="sicaklikradio"
                                    value="option1">
                                <label class="form-check-label" for="sicaklikradio">
                                    <span class="checkbox-header"> 1. Normal cilt sıcaklığı </span>
                                    Hastanın cilt sıcaklığı 33.5-36.9 °C aralığındadır. </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sicaklikradio" id="sicaklikradio"
                                    value="option2">
                                <label class="form-check-label" for="sicaklikradio">
                                    <span class="checkbox-header">2. Artmış cilt sıcaklığı </span>
                                    Hastanın cilt sıcaklığı 37 °C ve üzerindedir.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sicaklikradio" id="sicaklikradio"
                                    value="option3">
                                <label class="form-check-label" for="sicaklikradio">
                                    <span class="checkbox-header">3. Düşük cilt sıcaklığı </span>
                                    Hastanın cilt sıcaklığı 33.5 °C altındadır.
                                </label>
                            </div>

                        </div>
                    </div>

                    <p class="braden-label">Ödem</p>

                    <div class="checkbox-wrapper">
                        <div class="checkboxes">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="odemradio" id="odemradio"
                                    value="option1">
                                <label class="form-check-label" for="odemradio">
                                    <span class="checkbox-header"> 1. Ciltte ödem yok </span>
                                    Hastanın cilt sıcaklığı 33.5-36.9 °C aralığındadır. </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="odemradio" id="odemradio"
                                    value="option2">
                                <label class="form-check-label" for="odemradio">
                                    <span class="checkbox-header">2. Cilt hafif derecede ödemli </span>
                                    Gode derinliği 2 mm’dir ve basınçla oluşan çukur hızla kaybolur.

                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="odemradio" id="odemradio"
                                    value="option3">
                                <label class="form-check-label" for="odemradio">
                                    <span class="checkbox-header">3. Cilt orta derecede ödemli </span>
                                    Gode derinliği 4 mm’dir ve basınçla oluşan çukur 10-15 saniyede kaybolur.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="odemradio" id="odemradio"
                                    value="option4">
                                <label class="form-check-label" for="odemradio">
                                    <span class="checkbox-header">4. Cilt şiddetli derecede ödemli </span>
                                    Gode derinliği 6 mm’dir ve basınçla oluşan çukurun kaybolması 1 dakikadan uzun
                                    sürer.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="odemradio" id="odemradio"
                                    value="option5">
                                <label class="form-check-label" for="odemradio">
                                    <span class="checkbox-header">5. Cilt çok şiddetli derecede ödemli</span>
                                    Gode derinliği 8 mm’dir ve basınçla oluşan çukurun kaybolması 2 dakikadan uzun
                                    sürer.
                                </label>
                            </div>

                        </div>
                    </div>

                    <p class="braden-label">Cilt Bütünlüğü</p>

                    <div class="checkbox-wrapper">
                        <div class="checkboxes">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="butunlukradio" id="butunlukradio"
                                    value="option1">
                                <label class="form-check-label" for="butunlukradio">
                                    <span class="checkbox-header"> 1.Cilt bütünlüğü tam </span>
                                    Cilt bütünlüğünde bozulma yok. </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="butunlukradio" id="butunlukradio"
                                    value="option2">
                                <label class="form-check-label" for="butunlukradio">
                                    <span class="checkbox-header">2.Cilt bütünlüğü bozulmuş </span>
                                    Hastanın cildinde değişen evrelerde basınç yaralanması/ları bulunmakta.
                                </label>
                            </div>


                        </div>

                    </div>
                    <p class="usernamelabel">2.1. Mevcut basınç yaralanması/larının evresi ve bölgesini
                        tanımlayınız.</p>
                    <input type="text" class="form-control butunluknot not" required name="butunluknot" id="butunluknot"
                        placeholder="Not giriniz">


                    <h1 class="braden-header">NRS-2002 (Nütrisyonel Risk Tarama 2002)</h1>

                    <p class="braden-label">Bölüm 1</p>
                    <p class="braden-label">1.Vücut kitle indeksi 20,5 kg/m²'nin altında mı?</p>
                    <div class="checkbox-wrapper">
                        <div class="checkboxes">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="nrs1radio" id="nrs1radio"
                                    value="option1">
                                <label class="form-check-label" for="nrs1radio">
                                    <span class="checkbox-header"> Evet </span></label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="nrs1radio" id="nrs1radio"
                                    value="option2">
                                <label class="form-check-label" for="nrs1radio">
                                    <span class="checkbox-header"> Hayır </span></label>
                            </div>

                        </div>
                    </div>

                    <p class="braden-label">2. Son 3 ay içinde kilo kaybı var mı?</p>
                    <div class="checkbox-wrapper">
                        <div class="checkboxes">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="nrs2radio" id="nrs2radio"
                                    value="option1">
                                <label class="form-check-label" for="nrs2radio">
                                    <span class="checkbox-header"> Evet </span></label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="nrs2radio" id="nrs2radio"
                                    value="option2">
                                <label class="form-check-label" for="nrs2radio">
                                    <span class="checkbox-header"> Hayır </span></label>
                            </div>

                        </div>
                    </div>


                    <p class="braden-label">3. Geçen haftya içinde besin alımında azalma var mı?</p>
                    <div class="checkbox-wrapper">
                        <div class="checkboxes">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="nrs3radio" id="nrs3radio"
                                    value="option1">
                                <label class="form-check-label" for="nrs3radio">
                                    <span class="checkbox-header"> Evet </span></label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="nrs3radio" id="nrs3radio"
                                    value="option2">
                                <label class="form-check-label" for="nrs3radio">
                                    <span class="checkbox-header"> Hayır </span></label>
                            </div>

                        </div>
                    </div>

                    <p class="braden-label">4. Şiddetli bir hastalık var mı? (Yoğun bakım vb.)</p>
                    <div class="checkbox-wrapper">
                        <div class="checkboxes">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="nrs4radio" id="nrs4radio"
                                    value="option1">
                                <label class="form-check-label" for="nrs4radio">
                                    <span class="checkbox-header"> Evet </span></label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="nrs4radio" id="nrs4radio"
                                    value="option2">
                                <label class="form-check-label" for="nrs4radio">
                                    <span class="checkbox-header"> Hayır </span></label>
                            </div>

                        </div>
                    </div>

                    <p class="braden-label">Bölüm 2</p>
                    <p class="braden-label">Nutrisyon Durumundaki Bozulma</p>

                    <div class="checkbox-wrapper">
                        <div class="checkboxes">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="nutrisyonradio" id="nutrisyonradio"
                                    value="option1">
                                <label class="form-check-label" for="nutrisyonradio">
                                    <span class="checkbox-header"> Skor 0: </span>
                                    Normal nutrisyon durumu </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="nutrisyonradio" id="nutrisyonradio"
                                    value="option2">
                                <label class="form-check-label" for="nutrisyonradio">
                                    <span class="checkbox-header">Skor 1: </span>
                                    Üç ayda %5'in üzerinde kilo kaybı ya da geçen haftaki besin alımı normal
                                    gereksinimlerin %50-75'inin altında.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="nutrisyonradio" id="nutrisyonradio"
                                    value="option3">
                                <label class="form-check-label" for="nutrisyonradio">
                                    <span class="checkbox-header">Skor 3: </span>
                                    Bir ayda %5'in üzerinde kilo kaybı (3 ayda %15'in üzerinde) ya da BKİ 18,5'in
                                    altında ve genel durum bozukluğu var ya da geçen haftaki besin alımı normal
                                    gereksinimlerin %0-25'i kadar.
                                </label>
                            </div>

                        </div>
                    </div>

                    <p class="braden-label">Yaş</p>

                    <div class="checkbox-wrapper">
                        <div class="checkboxes">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="nrsyasradio" id="nrsyasradio"
                                    value="option1">
                                <label class="form-check-label" for="nrsyasradio">
                                    <span class="checkbox-header"> Skor 0: </span>
                                    Hasta 70 yaşından küçük</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="nrsyasradio" id="nrsyasradio"
                                    value="option2">
                                <label class="form-check-label" for="nrsyasradio">
                                    <span class="checkbox-header">Skor 1: </span>
                                    Hasta 70 yaşından büyük
                                </label>
                            </div>


                        </div>
                    </div>

                    <p class="braden-label">Hastalığın Şiddeti (Gereksinimlerde Artış)</p>

                    <div class="checkbox-wrapper">
                        <div class="checkboxes">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="siddetradio" id="siddetradio"
                                    value="option1">
                                <label class="form-check-label" for="siddetradio">
                                    <span class="checkbox-header"> Skor 0: </span>
                                    Normal besinsel gereksinimler</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="siddetradio" id="siddetradio"
                                    value="option2">
                                <label class="form-check-label" for="siddetradio">
                                    <span class="checkbox-header">Skor 1: </span>
                                    Kalça kemiğinde kırık, Özellikle akut komplikasyonları olan kronik hastalıklar:
                                    Siroz, KOAH, kronik hemodiyaliz, diyabet, onkoloji
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="siddetradio" id="siddetradio"
                                    value="option2">
                                <label class="form-check-label" for="siddetradio">
                                    <span class="checkbox-header">Skor 2: </span>
                                    Major abdominal cerrahi, Şiddetli pnömoni, Hematolojik malignite
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="siddetradio" id="siddetradio"
                                    value="option2">
                                <label class="form-check-label" for="siddetradio">
                                    <span class="checkbox-header">Skor 3: </span>
                                    Kafa Travması, Kemik iliği transplantasyonu, APACHE skoru 10'dan büyük yoğun bakım
                                    hastaları
                                </label>
                            </div>

                        </div>
                    </div>

                    <input type="submit" class="form-control butunluknot submit" name="submit" id="submit"
                        value="Kaydet">

                </form>
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

                    var ele = document.getElementsByName('renkradio');

                    for (i = 0; i < ele.length; i++) {
                        if (ele[i].checked)
                            var renk = ele[i].value;

                    }
                    console.log(renk);

                    var ele = document.getElementsByName('sicaklikradio');

                    for (i = 0; i < ele.length; i++) {
                        if (ele[i].checked)
                            var sicaklik = ele[i].value;

                    }
                    console.log(sicaklik);

                    var ele = document.getElementsByName('odemradio');

                    for (i = 0; i < ele.length; i++) {
                        if (ele[i].checked)
                            var odem = ele[i].value;

                    }
                    console.log(odem);

                    var ele = document.getElementsByName('butunlukradio');

                    for (i = 0; i < ele.length; i++) {
                        if (ele[i].checked)
                            var butunluk = ele[i].value;

                    }
                    console.log(butunluk);

                    var butunluknot = $('#butunluknot').val();

                    var ele = document.getElementsByName('nrs1radio');

                    for (i = 0; i < ele.length; i++) {
                        if (ele[i].checked)
                            var nrs1 = ele[i].value;

                    }
                    console.log(nrs1);

                    var ele = document.getElementsByName('nrs2radio');

                    for (i = 0; i < ele.length; i++) {
                        if (ele[i].checked)
                            var nrs2 = ele[i].value;

                    }
                    console.log(nrs2);

                    var ele = document.getElementsByName('nrs3radio');

                    for (i = 0; i < ele.length; i++) {
                        if (ele[i].checked)
                            var nrs3 = ele[i].value;

                    }
                    console.log(nrs3);

                    var ele = document.getElementsByName('nrs4radio');

                    for (i = 0; i < ele.length; i++) {
                        if (ele[i].checked)
                            var nrs4 = ele[i].value;

                    }
                    console.log(nrs4);

                    var ele = document.getElementsByName('nutrisyonradio');

                    for (i = 0; i < ele.length; i++) {
                        if (ele[i].checked)
                            var nutrisyon = ele[i].value;

                    }
                    console.log(nutrisyon);

                    var ele = document.getElementsByName('nrsyasradio');

                    for (i = 0; i < ele.length; i++) {
                        if (ele[i].checked)
                            var nrsyas = ele[i].value;

                    }
                    console.log(nrsyas);

                    var ele = document.getElementsByName('siddetradio');

                    for (i = 0; i < ele.length; i++) {
                        if (ele[i].checked)
                            var siddet = ele[i].value;

                    }
                    console.log(siddet);

                    e.preventDefault()

                    if (uyaran == undefined || nemlilik == undefined || aktivite == undefined ||
                        hareket ==
                        undefined || beslenme == undefined || surtunme == undefined || renk ==
                        undefined || sicaklik == undefined || odem == undefined || butunluk ==
                        undefined || nrs1 == undefined || nrs2 == undefined || nrs3 == undefined ||
                        nrs4 == undefined || nutrisyon == undefined || nrsyas == undefined || siddet ==
                        undefined
                    ) {

                        alert("Lütfen tüm alanları doldurunuz !");

                    } else {
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
                                surtunme: surtunme,
                                renk: renk,
                                sicaklik: sicaklik,
                                odem: odem,
                                butunluk: butunluk,
                                butunluknot: butunluknot,
                                nrs1: nrs1,
                                nrs2: nrs2,
                                nrs3: nrs3,
                                nrs4: nrs4,
                                nutrisyon: nutrisyon,
                                nrsyas: nrsyas,
                                siddet: siddet
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