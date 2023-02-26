<?php
foreach ($values as &$value) {

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

    //Cilt / Skin Care

    $renk = $value['renk'];
    if ($renk == '') {
        $renkval = 'Veri Bulunamadı';
        $renkgirisim = 'Veri Bulunamadı';
    }
    if ($renk == 'option1') {
        $renkval = '<span class="girisimler-score bold block"> 1. Cilt normal renklilikte </span>
                                    <span class="girisimler-span">Ciltte herhangi bir renk değişimi yok.</span>';
        $renkgirisim = '<span class="girisimler-span"><span class="bold"> ÖG6- </span>Hasta teslimini takip eden 4 saat içinde hastanın tüm cildini değerlendirme</span>
                                    ';
    }
    if ($renk == 'option2') {
        $renkval = '<span class="girisimler-score bold block"> 2. Ciltte kızarıklıklar var </span>
        Ciltte pozisyon sonrası geçen kızarıklık oluşumu mevcut. ';
        $renkgirisim = '<span class="girisimler-span"><span class="bold"> ÖG6- </span>Hasta teslimini takip eden 4 saat içinde hastanın tüm cildini değerlendirme</span>
        <span class="girisimler-span"><span class="bold"> ÖG17- </span>Hastaya rutin pozisyon verme sıklığının dışında daha sık aralıklarla pozisyon verme</span>
        <span class="girisimler-span"><span class="bold"> ÖG18- </span>Kızarıklık oluşan cilt bölümleri üzerine pozisyon vermemeye özen gösterme</span>
        <span class="girisimler-span"><span class="bold"> ÖG19- </span>Kızarıklık oluşan cilt bölümleri üzerine bariyer krem uygulama </span>
        <span class="girisimler-span"><span class="bold"> ÖG20- </span>Mevcut kızarıklıkları bir sonraki pozisyon sırasında yeniden değerlendirme</span>
        ';
    }
    if ($renk == 'option3') {
        $renkval = '<span class="girisimler-score bold block"> 3. Ciltte basmakla solmayan kızarıklıklar var </span>
        Ciltte, özellikle basınç altında kalan bölgelerde basmakla solmayan kızarıklık oluşumu mevcut. ';
        $renkgirisim = '<span class="girisimler-span"><span class="bold"> ÖG6- </span>Hasta teslimini takip eden 4 saat içinde hastanın tüm cildini değerlendirme</span>
        <span class="girisimler-span"><span class="bold"> ÖG17- </span>Hastaya rutin pozisyon verme sıklığının dışında daha sık aralıklarla pozisyon verme</span>
        <span class="girisimler-span"><span class="bold"> ÖG18- </span>Kızarıklık oluşan cilt bölümleri üzerine pozisyon vermemeye özen gösterme</span>
        <span class="girisimler-span"><span class="bold"> ÖG19- </span>Kızarıklık oluşan cilt bölümleri üzerine bariyer krem uygulama </span>
        <span class="girisimler-span"><span class="bold"> ÖG20- </span>Mevcut kızarıklıkları bir sonraki pozisyon sırasında yeniden değerlendirme</span>';
    }

    $sicaklik = $value['sicaklik'];
    if ($sicaklik == '') {
        $sicaklikval = 'Veri Bulunamadı';
        $sicaklikgirisim = 'Veri Bulunamadı';
    }
    if ($sicaklik == 'option1') {
        $sicaklikval = '<span class="girisimler-score bold block"> 1. Normal cilt sıcaklığı </span>
                                    <span class="girisimler-span">Hastanın cilt sıcaklığı 33.5-36.9 °C aralığındadır. </span>';
        $sicaklikgirisim = '<span class="girisimler-span">Önerilen Girişim Yok</span>
                                    ';
    }
    if ($sicaklik == 'option2') {
        $sicaklikval = '<span class="girisimler-score bold block">2. Artmış cilt sıcaklığı </span>
        Hastanın cilt sıcaklığı 37 °C ve üzerindedir. ';
        $sicaklikgirisim = '<span class="girisimler-span"><span class="bold"> ÖG21- </span>Hastanın artmış cilt sıcaklığının düşürülmesi</span>';
    }
    if ($sicaklik == 'option3') {
        $sicaklikval = '<span class="girisimler-score bold block"> 3. Düşük cilt sıcaklığı</span>
        Hastanın cilt sıcaklığı 33.5 °C altındadır. ';
        $sicaklikgirisim = '<span class="girisimler-span"><span class="bold"> ÖG22- </span>Hastanın ısıtılmasını sağlama </span>';
    }

    $odem = $value['odem'];
    if ($odem == '') {
        $odemval = 'Veri Bulunamadı';
        $odemgirisim = 'Veri Bulunamadı';
    }
    if ($odem == 'option1') {
        $odemval = '<span class="girisimler-score bold block"> 1. Ciltte ödem yok </span>';
        $odemgirisim = '<span class="girisimler-span"><span class="bold"> ÖG23- </span>Hastanın Her 24 saatte bir ödem değerlendirmesini yapmaya devam etme </span>';
    }
    if ($odem == 'option2') {
        $odemval = '<span class="girisimler-score bold block">2. Cilt hafif derecede ödemli </span>
        Gode derinliği 2 mm’dir ve basınçla oluşan çukur hızla kaybolur.';
        $odemgirisim = '<span class="girisimler-span"><span class="bold"> ÖG23- </span>Hastanın Her 24 saatte bir ödem değerlendirmesini yapmaya devam etme </span>
        <span class="girisimler-span"><span class="bold"> ÖG24- </span>Ödemin şiddeti hakkında hekimi bilgilendirme</span>
        <span class="girisimler-span"><span class="bold"> ÖG25- </span>Ödemli olan vücut bölümünün dolaşımını destekleyecek şekilde pozisyon vermeye özen gösterme</span>';
    }
    if ($odem == 'option3') {
        $odemval = '<span class="girisimler-score bold block">3. Cilt orta derecede ödemli</span>
        Gode derinliği 4 mm’dir ve basınçla oluşan çukur 10-15 saniyede kaybolur.';
        $odemgirisim = '<span class="girisimler-span"><span class="bold"> ÖG23- </span>Hastanın Her 24 saatte bir ödem değerlendirmesini yapmaya devam etme </span>
        <span class="girisimler-span"><span class="bold"> ÖG24- </span>Ödemin şiddeti hakkında hekimi bilgilendirme</span>
        <span class="girisimler-span"><span class="bold"> ÖG25- </span>Ödemli olan vücut bölümünün dolaşımını destekleyecek şekilde pozisyon vermeye özen gösterme</span>';
    }
    if ($odem == 'option4') {
        $odemkval = '<span class="girisimler-score bold block">4. Cilt şiddetli derecede ödemli </span>
        Gode derinliği 6 mm’dir ve basınçla oluşan çukurun kaybolması 1 dakikadan uzun sürer.';
        $odemgirisim = '<span class="girisimler-span"><span class="bold"> ÖG23- </span>Hastanın Her 24 saatte bir ödem değerlendirmesini yapmaya devam etme </span>
        <span class="girisimler-span"><span class="bold"> ÖG24- </span>Ödemin şiddeti hakkında hekimi bilgilendirme</span>
        <span class="girisimler-span"><span class="bold"> ÖG25- </span>Ödemli olan vücut bölümünün dolaşımını destekleyecek şekilde pozisyon vermeye özen gösterme</span>';
    }
    if ($odem == 'option5') {
        $odemval = '<span class="girisimler-score bold block">5. Cilt çok şiddetli derecede ödemli</span>
        Gode derinliği 8 mm’dir ve basınçla oluşan çukurun kaybolması 2 dakikadan uzun sürer.';
        $odemgirisim = '<span class="girisimler-span"><span class="bold"> ÖG23- </span>Hastanın Her 24 saatte bir ödem değerlendirmesini yapmaya devam etme </span>
        <span class="girisimler-span"><span class="bold"> ÖG24- </span>Ödemin şiddeti hakkında hekimi bilgilendirme</span>
        <span class="girisimler-span"><span class="bold"> ÖG25- </span>Ödemli olan vücut bölümünün dolaşımını destekleyecek şekilde pozisyon vermeye özen gösterme</span>';
    }

    $butunluk = $value['butunluk'];
    if ($butunluk == '') {
        $butunlukval = 'Veri Bulunamadı';
        $butunlukgirisim = 'Veri Bulunamadı';
    }
    if ($butunluk == 'option1') {
        $butunlukval = '<span class="girisimler-score bold block">1.Cilt bütünlüğü tam </span>
                                    <span class="girisimler-span">Cilt bütünlüğünde bozulma yok. </span>';
        $butunlukgirisim = '<span class="girisimler-span">Önerilen Girişim Yok</span>
                                    ';
    }
    if ($odem == 'option2') {
        $odemval = '<span class="girisimler-score bold block">2.Cilt bütünlüğü bozulmuş </span>
        Hastanın cildinde değişen evrelerde basınç yaralanması/ları bulunmakta. ';
        $odemgirisim = '<span class="girisimler-span"><span class="bold"> ÖG26- </span>Basınç yaralanmasının bakımına yönelik yara bakım hemşiresine ve hekime danışma</span>
        <span class="girisimler-span"><span class="bold"> ÖG27- </span>Verilen isteme uygun yara bakımını sağlama</span>
        <span class="girisimler-span"><span class="bold"> ÖG28- </span>Yaralanma olan vücut bölümü üzerine pozisyon vermemeye özen gösterme</span>
        <span class="girisimler-span"><span class="bold"> ÖG29- </span>Yarayı iyileşme/kötüleşme açısından değerlendirme</span>
        <span class="girisimler-span"><span class="bold"> ÖG30- </span>Teslim sırasında yaranın evresi, bölgesi ve gerçekleştirilen uygulamalar hakkında bilgi verme </span>';
    }

    $nrsscore = 0;
    $nrs1 = $value['nrs1'];
    if ($nrs1 == '') {
        $nrs1val = 'Veri Bulunamadı';
        $nrs1girisim = 'Veri Bulunamadı';
    }
    if ($nrs1 == 'option1') {
        $nrs1val = '<span class="girisimler-score bold block">1.Vücut kitle indeksi 20,5 kg/m²nin altında mı? </span>
                                    <span class="girisimler-span">Evet </span>';
        $nrs1girisim = '<span class="girisimler-span">Skor 1</span>
                                    ';
        $nrsscore += 1;
    }
    if ($nrs1 == 'option2') {
        $nrs1val = '<span class="girisimler-score bold block">1.Vücut kitle indeksi 20,5 kg/m²nin altında mı? </span>
                                    <span class="girisimler-span">Hayır </span>';
        $nrs1girisim = '<span class="girisimler-span">Skor 0</span>
                                    ';
        $nrsscore += 0;
    }

    $nrs2 = $value['nrs2'];
    if ($nrs2 == '') {
        $nrs2val = 'Veri Bulunamadı';
        $nrs2girisim = 'Veri Bulunamadı';
    }
    if ($nrs2 == 'option1') {
        $nrs2val = '<span class="girisimler-score bold block">2. Son 3 ay içinde kilo kaybı var mı? </span>
                                    <span class="girisimler-span">Evet </span>';
        $nrs2girisim = '<span class="girisimler-span">Skor 1</span>
                                    ';
        $nrsscore += 1;
    }
    if ($nrs2 == 'option2') {
        $nrs2val = '<span class="girisimler-score bold block">2. Son 3 ay içinde kilo kaybı var mı? </span>
                                    <span class="girisimler-span">Hayır </span>';
        $nrs2girisim = '<span class="girisimler-span">Skor 0</span>
                                    ';
        $nrsscore += 0;
    }

    $nrs3 = $value['nrs3'];
    if ($nrs3 == '') {
        $nrs3val = 'Veri Bulunamadı';
        $nrs3girisim = 'Veri Bulunamadı';
    }
    if ($nrs3 == 'option1') {
        $nrs3val = '<span class="girisimler-score bold block">3. Geçen haftya içinde besin alımında azalma var mı?</span>
                                    <span class="girisimler-span">Evet </span>';
        $nrs3girisim = '<span class="girisimler-span">Skor 1</span>
                                    ';
        $nrsscore += 1;
    }
    if ($nrs3 == 'option2') {
        $nrs3val = '<span class="girisimler-score bold block">3. Geçen haftya içinde besin alımında azalma var mı? </span>
                                    <span class="girisimler-span">Hayır </span>';
        $nrs3girisim = '<span class="girisimler-span">Skor 0</span>
                                    ';
        $nrsscore += 0;
    }

    $nrs4 = $value['nrs4'];
    if ($nrs4 == '') {
        $nrs4val = 'Veri Bulunamadı';
        $nrs4girisim = 'Veri Bulunamadı';
    }
    if ($nrs4 == 'option1') {
        $nrs4val = '<span class="girisimler-score bold block">4. Şiddetli bir hastalık var mı? (Yoğun bakım vb.)</span>
                                    <span class="girisimler-span">Evet </span>';
        $nrs4girisim = '<span class="girisimler-span">Skor 1</span>
                                    ';
        $nrsscore += 1;
    }
    if ($nrs4 == 'option2') {
        $nrs4val = '<span class="girisimler-score bold block">4. Şiddetli bir hastalık var mı? (Yoğun bakım vb.) </span>
                                    <span class="girisimler-span">Hayır </span>';
        $nrs4girisim = '<span class="girisimler-span">Skor 0</span>
                                    ';
        $nrsscore += 0;
    }
    $nutrisyon = $value['nutrisyon'];
    if ($nutrisyon == '') {
        $nutrisyonval = 'Veri Bulunamadı';
        $nutrisyongirisim = 'Veri Bulunamadı';
    }
    if ($nutrisyon == 'option1') {
        $nutrisyonval = '<span class="girisimler-score bold block">Nutrisyon Durumundaki Bozulma(Yoğun bakım vb.)</span>
        <span class="girisimler-span">Normal nutrisyon durumu </span>      ';
        $nutrisyongirisim = '<span class="girisimler-span">Skor 0</span>
        ';
        $nrsscore += 0;
    }
    if ($nutrisyon == 'option2') {
        $nutrisyonval = '<span class="girisimler-score bold block">Nutrisyon Durumundaki Bozulma(Yoğun bakım vb.)</span>
        <span class="girisimler-span">Üç ayda %5in üzerinde kilo kaybı ya da geçen haftaki besin alımı normal gereksinimlerin %50-75inin altında. </span>      ';
        $nutrisyongirisim = '<span class="girisimler-span">Skor 1</span>';

        $nrsscore += 1;
    }
    if ($nutrisyon == 'option3') {
        $nutrisyonval = '<span class="girisimler-score bold block">Nutrisyon Durumundaki Bozulma(Yoğun bakım vb.)</span>
        <span class="girisimler-span">İki ayda %5in üzerinde kilo kaybı ya da BKİ 18,5-20,5 ve genel durum bozukluğu var ya da geçen haftaki besin alımı normal gereksinimlerin %25-60ı kadar.  </span>      ';
        $nutrisyongirisim = '<span class="girisimler-span">Skor 2</span>';

        $nrsscore += 2;
    }
    if ($nutrisyon == 'option4') {
        $nutrisyonval = '<span class="girisimler-score bold block">Nutrisyon Durumundaki Bozulma(Yoğun bakım vb.)</span>
        <span class="girisimler-span">Bir ayda %5in üzerinde kilo kaybı (3 ayda %15in üzerinde) ya da BKİ 18,5in altında ve genel durum bozukluğu var ya da geçen haftaki besin alımı normal gereksinimlerin %0-25i kadar.   </span>      ';
        $nutrisyongirisim = '<span class="girisimler-span">Skor 3</span>';

        $nrsscore += 3;
    }

    $nrsyas = $value['nrsyas'];
    if ($nrsyas == '') {
        $nrsyasval = 'Veri Bulunamadı';
        $nrsyasgirisim = 'Veri Bulunamadı';
    }
    if ($nrsyas == 'option1') {
        $nrsyasval = '<span class="girisimler-score bold block">Yaş</span>
        <span class="girisimler-span">Hasta 70 yaşından küçük </span>      ';
        $nrsyasgirisim = '<span class="girisimler-span">Skor 0</span>
        ';
        $nrsscore += 0;
    }
    if ($nrsyas == 'option2') {
        $nrsyasval = '<span class="girisimler-score bold block">Yaş</span>
        <span class="girisimler-span">Hasta 70 yaşından büyük </span>      ';
        $nrsyasgirisim = '<span class="girisimler-span">Skor 1</span>';

        $nrsscore += 1;
    }

    $siddet = $value['siddet'];
    if ($siddet == '') {
        $siddetval = 'Veri Bulunamadı';
        $siddetgirisim = 'Veri Bulunamadı';
    }
    if ($siddet == 'option1') {
        $siddetval = '<span class="girisimler-score bold block">Hastalığın Şiddeti (Gereksinimlerde Artış)</span>
        <span class="girisimler-span">Normal besinsel gereksinimler </span>      ';
        $siddetgirisim = '<span class="girisimler-span">Skor 0</span>
        ';
        $nrsscore += 0;
    }
    if ($siddet == 'option2') {
        $siddetval = '<span class="girisimler-score bold block">Hastalığın Şiddeti (Gereksinimlerde Artış)</span>
        <span class="girisimler-span">Kalça kemiğinde kırık, Özellikle akut komplikasyonları olan kronik hastalıklar: Siroz, KOAH, kronik hemodiyaliz, diyabet, onkoloji </span>      ';
        $siddetgirisim = '<span class="girisimler-span">Skor 1</span>
        ';
        $nrsscore += 1;
    }
    if ($siddet == 'option3') {
        $siddetval = '<span class="girisimler-score bold block">Hastalığın Şiddeti (Gereksinimlerde Artış)</span>
        <span class="girisimler-span">Major abdominal cerrahi, Şiddetli pnömoni, Hematolojik malignite</span>      ';
        $siddetgirisim = '<span class="girisimler-span">Skor 2</span>
        ';
        $nrsscore += 2;
    }
    if ($siddet == 'option4') {
        $siddetval = '<span class="girisimler-score bold block">Hastalığın Şiddeti (Gereksinimlerde Artış)</span>
        <span class="girisimler-span">Kafa Travması, Kemik iliği transplantasyonu, APACHE skoru 10dan büyük yoğun bakım hastaları</span>      ';
        $siddetgirisim = '<span class="girisimler-span">Skor 3</span>
        ';
        $nrsscore += 3;
    }
    if ($nrsscore >= 3) {
        $nrsgirisimtotal = '<span class="girisimler-span"><span class="bold"> ÖG32- </span>Hasta nütrisyon riski altındadır. Hasta için bir nütrisyon planı hazırlanmadır (Toplam puanı 3ten büyük). </span>';
    }
    if ($nrsscore < 3) {

        $nrsgirisimtotal = '<span class="girisimler-span"><span class="bold"> ÖG31- </span>Hastanızı NRS-2002 ile haftalık olarak değerlendiriniz (Toplam puanı 3ten küçük). </span>';
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
                                            <h1 class='braden-header'>Braden Parametreleri</h1>
                                            <div class='girisimler'>
                                                <p class='girisimler-p'><span class='girisimler-span block girisimler-header'>Uyaranın Algılanması:</span>" . $uyaranval . "</p>
                                                <p class='girisimler-p'><span class='girisimler-span block girisimler-header'>Önerilen Girişimler:</span>" . $girisim . "</p>
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

                                            <h1 class='braden-header'>Cilt Değerlendirme</h1>
                                            <div class='girisimler'>
                                            <p class='girisimler-p'><span class='girisimler-span block girisimler-header'>Cilt Rengi:</span>" . $renkval . "</p>
                                            <p class='girisimler-p'><span class='girisimler-span block girisimler-header'>Önerilen Girişimler:</span>" . $renkgirisim . "</p>
                                            </div>

                                            <div class='girisimler'>
                                            <p class='girisimler-p'><span class='girisimler-span block girisimler-header'>Cilt Sıcaklığı:</span>" . $sicaklikval . "</p>
                                            <p class='girisimler-p'><span class='girisimler-span block girisimler-header'>Önerilen Girişimler:</span>" . $sicaklikgirisim . "</p>
                                            </div>

                                            <div class='girisimler'>
                                            <p class='girisimler-p'><span class='girisimler-span block girisimler-header'>Ödem:</span>" . $odemval . "</p>
                                            <p class='girisimler-p'><span class='girisimler-span block girisimler-header'>Önerilen Girişimler:</span>" . $odemgirisim . "</p>
                                            </div>

                                            <div class='girisimler'>
                                            <p class='girisimler-p'><span class='girisimler-span block girisimler-header'>Cilt Bütünlüğü:</span>" . $butunlukval . "</p>
                                            <p class='girisimler-p'><span class='girisimler-span block girisimler-header'>Önerilen Girişimler:</span>" . $butunlukgirisim . "</p>
                                            </div>

                                            <p class='girisimler-p'><span class='girisimler-span block girisimler-header'>2.1. Mevcut basınç yaralanması/larının evresi ve bölgesini tanımlayınız.
                                            :</span>" . $value['butunluknot'] . "</p>

                                            <h1 class='braden-header'>NRS-2002</h1>
                                            <div class='girisimler'>
                                            <p class='girisimler-p'><span class='girisimler-span block girisimler-header'>" . $nrs1val . "</span></p>
                                            <p class='girisimler-p'><span class='girisimler-span block girisimler-header'>Cevap:</span>" . $nrs1girisim . "</p>
                                            </div>

                                            <div class='girisimler'>
                                            <p class='girisimler-p'><span class='girisimler-span block girisimler-header'>" . $nrs2val . "</span></p>
                                            <p class='girisimler-p'><span class='girisimler-span block girisimler-header'>Cevap:</span>" . $nrs2girisim . "</p>
                                            </div>

                                            <div class='girisimler'>
                                            <p class='girisimler-p'><span class='girisimler-span block girisimler-header'>" . $nrs3val . "</span></p>
                                            <p class='girisimler-p'><span class='girisimler-span block girisimler-header'>Cevap:</span>" . $nrs3girisim . "</p>
                                            </div>

                                            <div class='girisimler'>
                                            <p class='girisimler-p'><span class='girisimler-span block girisimler-header'>" . $nrs4val . "</span></p>
                                            <p class='girisimler-p'><span class='girisimler-span block girisimler-header'>Cevap:</span>" . $nrs4girisim . "</p>
                                            </div>

                                            <div class='girisimler'>
                                            <p class='girisimler-p'><span class='girisimler-span block girisimler-header'>" . $nutrisyonval . "</span></p>
                                            <p class='girisimler-p'><span class='girisimler-span block girisimler-header'>Cevap:</span>" . $nutrisyongirisim . "</p>
                                            </div>

                                            <div class='girisimler'>
                                            <p class='girisimler-p'><span class='girisimler-span block girisimler-header'>" . $nrsyasval . "</span></p>
                                            <p class='girisimler-p'><span class='girisimler-span block girisimler-header'>Cevap:</span>" . $nrsyasgirisim . "</p>
                                            </div>
                                            
                                            <div class='girisimler'>
                                            <p class='girisimler-p'><span class='girisimler-span block girisimler-header'>" . $siddetval . "</span></p>
                                            <p class='girisimler-p'><span class='girisimler-span block girisimler-header'>Cevap:</span>" . $siddetgirisim . "</p>
                                            </div>

                                            <div class='girisimler'>
                                            <p class='girisimler-p'><span class='girisimler-span block girisimler-header'>Toplam Skor</span></p>

                                            <p class='girisimler-p'><span class='girisimler-span block girisimler-header'>" . $nrsscore . "</span></p>
                                            </div>

                                            
                                            <p class='girisimler-p'><span class='girisimler-span block girisimler-header'>Önerilen Girişim</span></p>

                                            <p class='girisimler-p'><span class='girisimler-span block girisimler-header'>" . $nrsgirisimtotal . "</span></p>
                                            
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