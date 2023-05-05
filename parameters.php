<?php
foreach ($values as $value) {

    //Braden
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

    $nemlilik = $value['nemlilik'];
    if ($nemlilik == '') {
        $nemlilikval = 'Veri Bulunamadı';
        $girisimnemlilik = 'Veri Bulunamadı';
    }
    if ($nemlilik == 'option1') {
        $nemlilikval = '<span class="girisimler-score bold block"> Skor 1: Sürekli Islak
                                </span>
                                <span class="girisimler-span">Deri, ter, İdrar, gaita ile sürekli ıslak. Her
                                    çevrildiğinde ıslaklık hissediliyor.</span>';
        $girisimnemlilik = '
                                <span class="girisimler-span"><span class="bold">ÖG6-</span> Hasta teslimini takip eden
                                    4 saat içinde hastanın tüm cildini değerlendirme</span>
                                <span class="girisimler-span"><span class="bold">ÖG7-</span>HCilt pH’ına uygun ürünler
                                    ile cilt temizliğini sağlama</span>
                                <span class="girisimler-span"><span class="bold">ÖG8-</span>Cildi aşırı nemden korumak
                                    için bariyer krem uygulama</span>;
                                <span class="girisimler-span"><span class="bold">ÖG9-</span>Kuruluk olan cilt
                                    bölümlerini uygun ürünler ile nemlendirme </span>';
    }
    if ($nemlilik == 'option2') {
        $nemlilikval = '<span class="girisimler-score bold block"> Skor 2: Çok Islak </span>
                                Deri çoğu zaman ıslak.
                                Her vardiyada çarşafların bir kez değiştirilmesi gerekiyor.';
        $girisimnemlilik = '
                                <span class="girisimler-span"><span class="bold">ÖG6-</span> Hasta teslimini takip eden
                                    4 saat içinde hastanın tüm cildini değerlendirme</span>
                                <span class="girisimler-span"><span class="bold">ÖG7-</span>HCilt pH’ına uygun ürünler
                                    ile cilt temizliğini sağlama</span>
                                <span class="girisimler-span"><span class="bold">ÖG8-</span>Cildi aşırı nemden korumak
                                    için bariyer krem uygulama</span>;
                                <span class="girisimler-span"><span class="bold">ÖG9-</span>Kuruluk olan cilt
                                    bölümlerini uygun ürünler ile nemlendirme </span>';
    }
    if ($nemlilik == 'option3') {
        $nemlilikval = '<span class="girisimler-score bold block">Skor 3: Bazen Islak </span>
                                Deri bazen ıslak.
                                Çarşafların ıslandıkça değiştirilmesi gerekiyor. ';
        $girisimnemlilik = '
                                <span class="girisimler-span"><span class="bold">ÖG6-</span> Hasta teslimini takip eden
                                    4 saat içinde hastanın tüm cildini değerlendirme</span>
                                <span class="girisimler-span"><span class="bold">ÖG7-</span>HCilt pH’ına uygun ürünler
                                    ile cilt temizliğini sağlama</span>
                                <span class="girisimler-span"><span class="bold">ÖG8-</span>Cildi aşırı nemden korumak
                                    için bariyer krem uygulama</span>
                                <span class="girisimler-span"><span class="bold">ÖG9-</span>Kuruluk olan cilt
                                    bölümlerini uygun ürünler ile nemlendirme </span>';
    }
    if ($nemlilik == 'option4') {
        $nemlilikval = '<span class="girisimler-score bold block"> Skor 4: Nadiren Islak
                                </span>
                                Deri genellikle kuru.
                                Çarşafların rutin olarak değiştirilmesi gerekiyor';
        $girisimnemlilik = '
                                <span class="girisimler-span"><span class="bold">ÖG6-</span> Hasta teslimini takip eden
                                    4 saat içinde hastanın tüm cildini değerlendirme</span>
                                <span class="girisimler-span"><span class="bold">ÖG7-</span>HCilt pH’ına uygun ürünler
                                    ile cilt temizliğini sağlama</span>
                                <span class="girisimler-span"><span class="bold">ÖG9-</span>Kuruluk olan cilt
                                    bölümlerini uygun ürünler ile nemlendirme </span>';
    }

    $aktivite = $value['aktivite'];
    if ($aktivite == '') {
        $aktiviteval = 'Veri Bulunamadı';
        $girisimaktivite = 'Veri Bulunamadı';
    }
    if ($aktivite == 'option1') {
        $aktiviteval = '<span class="girisimler-score bold block"> Skor 1: Yatağa Bağımlı
                                </span>
                                <span class="girisimler-span">Her türlü bakım gereksinimi yatakta karşılanıyor.</span>';
        $girisimaktivite = '
                                <span class="girisimler-span"><span class="bold">ÖG1-</span>En az 2 saatte 1 pozisyon
                                    verme</span>
                                <span class="girisimler-span"><span class="bold">ÖG10-</span>En fazla 30 dakika süreler
                                    ile hastayı tekerlekli sandalyeye alma</span>
                                <span class="girisimler-span"><span class="bold">ÖG2-</span>Vücut pozisyonunda sık
                                    aralıklarla küçük değişimler yapma</span>;
                                <span class="girisimler-span"><span class="bold">ÖG3-</span>Havalı yatak vb. destek
                                    yüzey kullanma</span>;
                                <span class="girisimler-span"><span class="bold">ÖG4-</span>Basınç altında kalan vücut
                                    bölümlerine koruyucu yara örtüsü uygulama</span>';
    }
    if ($aktivite == 'option2') {
        $aktiviteval = '<span class="girisimler-score bold block"> Skor 2: Sandalyeye Bağımlı
                                </span>
                                Çok az yürüyebiliyor.
                                Sandalyeye oturabilmesi için yardım gerekiyor.
                                Kendi ağırlığını kaldırmakta güçlük çekiyor.';
        $girisimaktivite = '
                                <span class="girisimler-span"><span class="bold">ÖG1-</span>En az 2 saatte 1 pozisyon
                                    verme</span>
                                <span class="girisimler-span"><span class="bold">ÖG10-</span>En fazla 30 dakika süreler
                                    ile hastayı tekerlekli sandalyeye alma</span>
                                <span class="girisimler-span"><span class="bold">ÖG2-</span>Vücut pozisyonunda sık
                                    aralıklarla küçük değişimler yapma</span>;
                                <span class="girisimler-span"><span class="bold">ÖG3-</span>Havalı yatak vb. destek
                                    yüzey kullanma</span>;
                                <span class="girisimler-span"><span class="bold">ÖG4-</span>Basınç altında kalan vücut
                                    bölümlerine koruyucu yara örtüsü uygulama</span>';
    }
    if ($aktivite == 'option3') {
        $aktiviteval = '<span class="girisimler-score bold block">Skor 3: Bazen Yürüyebiliyor
                                </span>
                                Yardımla veya yardımsız kısa mesafede yürüyebiliyor.
                                Her vardiyada çoğu zaman yatakta veya sandalyede oturuyor.';
        $girisimaktivite = '
                                <span class="girisimler-span"><span class="bold">ÖG5-</span> Kademeli olarak
                                    mobilizasyonun sağlanması</span>';
    }
    if ($aktivite == 'option4') {
        $aktiviteval = '<span class="girisimler-score bold block"> Skor 4: Sık Sık Yürüyebiliyor
                                </span>
                                Günde en az iki defa oda dışına çıkabiliyor.
                                Oda içinde 2 saatte bir yürüyebiliyor.';
        $girisimaktivite = '
                                <span class="girisimler-span"> Önerilen girişim yok</span>';
    }


    $hareket = $value['hareket'];
    if ($hareket == '') {
        $hareketval = 'Veri Bulunamadı';
        $girisimhareket = 'Veri Bulunamadı';
    }
    if ($hareket == 'option1') {
        $hareketval = '<span class="girisimler-score bold block"> Skor 1: Tamamen Hareketsiz
                                </span>
                                <span class="girisimler-span">Yardımsız pozisyon değiştiremiyor.</span>';
        $girisimhareket = '
                                <span class="girisimler-span"><span class="bold">ÖG1-</span>En az 2 saatte 1 pozisyon
                                    verme</span>
                                <span class="girisimler-span"><span class="bold">ÖG10-</span>En fazla 30 dakika süreler
                                    ile hastayı tekerlekli sandalyeye alma</span>
                                <span class="girisimler-span"><span class="bold">ÖG2-</span>Vücut pozisyonunda sık
                                    aralıklarla küçük değişimler yapma</span>
                                <span class="girisimler-span"><span class="bold">ÖG3-</span>Havalı yatak vb. destek
                                    yüzey kullanma</span>
                                <span class="girisimler-span"><span class="bold">ÖG4-</span>Basınç altında kalan vücut
                                    bölümlerine koruyucu yara örtüsü uygulama</span>';
    }
    if ($hareket == 'option2') {
        $hareketval = '<span class="girisimler-score bold block"> Skor 2: Çok Hareketsiz
                                </span>
                                Vücut ve ekstremite pozisyonunda hafif değişiklik yapabiliyor.
                                Kendiliğinden pozisyonunu değiştiremiyor.';
        $girisimhareket = '
                                <span class="girisimler-span"><span class="bold">ÖG1-</span>En az 2 saatte 1 pozisyon
                                    verme</span>
                                <span class="girisimler-span"><span class="bold">ÖG10-</span>En fazla 30 dakika süreler
                                    ile hastayı tekerlekli sandalyeye alma</span>
                                <span class="girisimler-span"><span class="bold">ÖG2-</span>Vücut pozisyonunda sık
                                    aralıklarla küçük değişimler yapma</span>
                                <span class="girisimler-span"><span class="bold">ÖG3-</span>Havalı yatak vb. destek
                                    yüzey kullanma</span>
                                <span class="girisimler-span"><span class="bold">ÖG4-</span>Basınç altında kalan vücut
                                    bölümlerine koruyucu yara örtüsü uygulama</span>';
    }
    if ($hareket == 'option3') {
        $hareketval = '<span class="girisimler-score bold block">Skor 3: Az Hareketli
                                </span>
                                Vücut ve ekstremitelerinde sık, ancak hafif değişiklik yapabiliyor.';
        $girisimhareket = '
                                <span class="girisimler-span"><span class="bold">ÖG1-</span>En az 2 saatte 1 pozisyon
                                    verme</span>
                                <span class="girisimler-span"><span class="bold">ÖG10-</span>En fazla 30 dakika süreler
                                    ile hastayı tekerlekli sandalyeye alma</span>
                                <span class="girisimler-span"><span class="bold">ÖG2-</span>Vücut pozisyonunda sık
                                    aralıklarla küçük değişimler yapma</span>
                                <span class="girisimler-span"><span class="bold">ÖG3-</span>Havalı yatak vb. destek
                                    yüzey kullanma</span>
                                <span class="girisimler-span"><span class="bold">ÖG4-</span>Basınç altında kalan vücut
                                    bölümlerine koruyucu yara örtüsü uygulama</span>';
    }
    if ($hareket == 'option4') {
        $hareketval = '<span class="girisimler-score bold block"> Skor 4: Hareketli
                                </span>
                                Pozisyonunu yardımsız sıklıkla değiştirebiliyor.';
        $girisimhareket = '
                                <span class="girisimler-span"> Önerilen girişim yok</span>';
    }


    $beslenme = $value['beslenme'];
    if ($beslenme == '') {
        $beslenmeval = 'Veri Bulunamadı';
        $girisimbeslenme = 'Veri Bulunamadı';
    }
    if ($beslenme == 'option1') {
        $beslenmeval = '<span class="girisimler-score bold block"> Skor 1: Çok Yetersiz
                                </span>
                                <span class="girisimler-span">Asla öğününün tamamını yiyemiyor.
                                    Nadiren verilen yemeğin 1/3ünü yiyebiliyor.
                                    İki öğün ya da daha az protein alabiliyor (Et ve süt ürünleri).
                                    Sıvı alımı az. Ağızdan sıvı desteği alamıyor.
                                    Beş günden fazla süredir IV ve berrak diyet alıyor.</span>';
        $girisimbeslenme = '
                                <span class="girisimler-span"><span class="bold">ÖG11-</span>NRS-2002 ile hastanın beslenme risk değerlendirmesinin
                                    yapılması</span>
                                <span class="girisimler-span"><span class="bold">ÖG12-</span>Hastanın basınç yaralanması riskine özel diyet isteminin
                                    verilmesi</span>
                                <span class="girisimler-span"><span class="bold">ÖG13-</span>Hastanın yeterli besin alımın sağlanması</span>';
    }
    if ($beslenme == 'option2') {
        $beslenmeval = '<span class="girisimler-score bold block">Skor 2: Yetersiz
                                </span>
                                Verilen yemeğin yarısını, nadiren tamamını yiyebiliyor.
                                Günde 3 defa protein, bazen destekleyici ek gıda alabiliyor.
                                Uygun diyetin tüp ile verilen besinin birazını alabiliyor.';
        $girisimbeslenme = '
                                <span class="girisimler-span"><span class="bold">ÖG11-</span>NRS-2002 ile hastanın beslenme risk değerlendirmesinin
                                    yapılması</span>
                                <span class="girisimler-span"><span class="bold">ÖG12-</span>Hastanın basınç yaralanması riskine özel diyet isteminin
                                    verilmesi</span>
                                <span class="girisimler-span"><span class="bold">ÖG13-</span>Hastanın yeterli besin alımın sağlanması</span>';
    }
    if ($beslenme == 'option3') {
        $beslenmeval = '<span class="girisimler-score bold block">Skor 3: Yeterli
                                </span>
                                Öğünün yarısından fazlasını yiyebiliyor.
                                Günde 4 kez protein alabiliyor.
                                Ara sıra öğünü reddediyor.
                                Verilmişse ek diyet ya da total parenteral beslenme alıyor';
        $girisimbeslenme = '
                                <span class="girisimler-span"><span class="bold">ÖG11-</span>NRS-2002 ile hastanın beslenme risk değerlendirmesinin
                                    yapılması</span>
                                ';
    }
    if ($beslenme == 'option4') {
        $beslenmeval = '<span class="girisimler-score bold block">Skor 4: Çok İyi
                                </span>
                                Her öğünü çoğunlukla yiyor, öğünleri reddetmiyor.
                                Günde 4 defa protein alabiliyor.
                                Genellikle öğün aralarında yiyor.
                                Ek gıda gerekmiyor.';
        $girisimbeslenme = '
                                <span class="girisimler-span"><span class="bold">ÖG11-</span>NRS-2002 ile hastanın beslenme risk değerlendirmesinin
                                    yapılması</span>
                                ';
    }


    $surtunme = $value['surtunme'];
    if ($surtunme == '') {
        $surtunmeval = 'Veri Bulunamadı';
        $girisimsurtunme = 'Veri Bulunamadı';
    }
    if ($surtunme == 'option1') {
        $surtunmeval = '<span class="girisimler-score bold block"> Skor 1: Sorun
                                </span>
                                <span class="girisimler-span">Hareket ederken çok fazla yardıma gereksinimi var.
                                    Çarşafta kaydırmaksızın tamamen kaldırılması olanaksız.
                                    Sıklıkla sandalyeden ya da yataktan aşağı kayıyor.
                                    Yeniden pozisyon vermede çok fazla yardıma gereksinimi var.
                                    Sertlik, kontraktür ya da huzursuzluk sürekli sürtünmeye yol açabiliyor.</span>';
        $girisimsurtunme = '
                                <span class="girisimler-span"><span class="bold">ÖG14-</span>Hastaya pozisyon verirken ara çarşaftan yararlanma</span>
                                <span class="girisimler-span"><span class="bold">ÖG15-</span>Hastanın yatak dışı transferinde roller vb. araçlardan
                                    yararlanma</span>
                                <span class="girisimler-span"><span class="bold">ÖG16-</span>Tıbbi olarak gerekli olmadıkça hastanın yatak başı
                                    yüksekliğini 30° ile sınırlama</span>';
    }
    if ($surtunme == 'option2') {
        $surtunmeval = '<span class="girisimler-score bold block">Skor 2: Olası Sorun
                                </span>
                                Çok az yardımla az ve güçsüz hareket yapabiliyor.
                                Hareket sırasında deri, çarşafa sandalyeye ya da diğer malzemelere sürtünüyor.
                                Genellikle yatak ve sandalyede pozisyonunu sürdürüyor, fakat bazen kayıyor.';
        $girisimsurtunme = '
                                <span class="girisimler-span"><span class="bold">ÖG14-</span>Hastaya pozisyon verirken ara çarşaftan yararlanma</span>
                                <span class="girisimler-span"><span class="bold">ÖG15-</span>Hastanın yatak dışı transferinde roller vb. araçlardan
                                    yararlanma</span>
                                <span class="girisimler-span"><span class="bold">ÖG16-</span>Tıbbi olarak gerekli olmadıkça hastanın yatak başı
                                    yüksekliğini 30° ile sınırlama</span>';
    }
    if ($surtunme == 'option3') {
        $surtunmeval = '<span class="girisimler-score bold block">Skor 3: Sorun Yok </span>
                                    Yatak ve sandalyede bağımsız hareket edebiliyor.
                                    Kendini kaldırabilmek için, yeterli kas gücü var.
                                    Yatak ya da sandalyede her zaman uygun pozisyonda duruyor.';
        $girisimsurtunme = '
                                    <span class="girisimler-span"> Önerilen girişim yok</span>';
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
                                            ";
    foreach ($vakalar as $vaka) {
        if ($vaka['id'] == $value['fileid']) {
            $vakapdf = $vaka["filename"];


            $basePath = $vakapdf;
            $fileLoc = strpos($basePath, 'vakalar');
            $filePath = substr($basePath, $fileLoc);
            if (file_exists($filePath)) {
                echo "                    <iframe id='iframepdf' class='iframepdf' runat='server' src=" . $filePath . " title=''></iframe>
                ";
            }
        }
    }
    echo "                                 
                                            <p>Not:" . $value['notlar'] . "</p>
                                            <h1 class='braden-header'>Braden Parametreleri</h1>
                                            <div class='girisimler'>
                                                <p class='girisimler-p'><span class='girisimler-span block girisimler-header'>Uyaranın Algılanması:</span>" . $uyaranval . "</p>
                                                <p class='girisimler-p'><span class='girisimler-span block girisimler-header'>Önerilen Girişimler:</span>" . $girisim . "</p>
                                            </div>
                                            <div class='checkbox-wrapper'>

                                            <div class='checkboxes'>
                                            <div class='form-check'>
                                                <input class='form-check-input' type='radio' name='hareketradio' id='hareketradio1'
                                                    value='option1' checked>
                                                <label class='form-check-label' for='hareketradio1'>
                                                    <span class='checkbox-header'> Skor 1: Tamamen Hareketsiz</span>
                                                    Yardımsız pozisyon değiştiremiyor.
                                            </div>
                                            <div class='form-check'>
                                                <input class='form-check-input' type='radio' name='hareketradio' id='hareketradio2'
                                                    value='option2'>
                                                <label class='form-check-label' for='hareketradio2'>
                                                    <span class='checkbox-header'> Skor 2: Çok Hareketsiz </span>
                                                    Vücut ve ekstremite pozisyonunda hafif değişiklik yapabiliyor.
                                                    Kendiliğinden pozisyonunu değiştiremiyor.
                                                </label>
                                            </div>
                                            <div class='form-check'>
                                                <input class='form-check-input' type='radio' name='hareketradio' id='hareketradio3'
                                                    value='option3'>
                                                <label class='form-check-label' for='hareketradio3'>
                                                    <span class='checkbox-header'> Skor 3: Az Hareketli </span>
                                                    Vücut ve ekstremitelerinde sık, ancak hafif değişiklik yapabiliyor.
                                                </label>
                                            </div>
                                            <div class='form-check'>
                                                <input class='form-check-input' type='radio' name='hareketradio' id='hareketradio4'
                                                    value='option4'>
                                                <label class='form-check-label' for='hareketradio4'>
                                                    <span class='checkbox-header'> Skor 4: Hareketli</span>
                                                    Pozisyonunu yardımsız sıklıkla değiştirebiliyor.
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                            <div class='girisimler'>
                                                <p class='girisimler-p'><span class='girisimler-span block girisimler-header'>Nemlilik:</span>" . $nemlilikval . "</p>
                                                <p class='girisimler-p'><span class='girisimler-span block girisimler-header'>Önerilen Girişimler:</span>" . $girisimnemlilik . "</p>
                                            </div>

                                            <div class='girisimler'>
                                            <p class='girisimler-p'><span class='girisimler-span block girisimler-header'>Aktivite:</span>" . $aktiviteval . "</p>
                                            <p class='girisimler-p'><span class='girisimler-span block girisimler-header'>Önerilen Girişimler:</span>" . $girisimaktivite . "</p>
                                            </div>

                                            <div class='girisimler'>
                                            <p class='girisimler-p'><span class='girisimler-span block girisimler-header'>Hareket:</span>" . $hareketval . "</p>
                                            <p class='girisimler-p'><span class='girisimler-span block girisimler-header'>Önerilen Girişimler:</span>" . $girisimhareket . "</p>
                                            </div>

                                            <div class='girisimler'>
                                            <p class='girisimler-p'><span class='girisimler-span block girisimler-header'>Beslenme:</span>" . $beslenmeval . "</p>
                                            <p class='girisimler-p'><span class='girisimler-span block girisimler-header'>Önerilen Girişimler:</span>" . $girisimbeslenme . "</p>
                                            </div>
                                            
                                            <div class='girisimler'>
                                            <p class='girisimler-p'><span class='girisimler-span block girisimler-header'>Sürtünme ve Tahriş:</span>" . $surtunmeval . "</p>
                                            <p class='girisimler-p'><span class='girisimler-span block girisimler-header'>Önerilen Girişimler:</span>" . $girisimsurtunme . "</p>
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