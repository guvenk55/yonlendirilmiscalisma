<?php defined( '_ERISIM' ) or die( 'Erisim engellendi!' );?>
<?php 
	//açılacak sayfayı belirlemek
	$url='_sayfalar/_ana.php';
	
	switch ($link) {
		case 'anasayfa':$url='_sayfalar/_ana.php';break;
		case 'iletisim':$url='_sayfalar/_iletisim.php';break;
		case 'yorum-ekle':$url='_sayfalar/_yorum-ekle.php';break;
		case '_yorum-guncelle':$url='_sayfalar/_admin/_yorum-guncelle.php';break;
		case 'unuttum':$url='_sayfalar/_uye/_unuttum.php';break;
		case 'yeniUye':$url='_sayfalar/_uye/_yeniUye.php';break;
		case 'aktivasyon':$url='_sayfalar/_uye/_aktivasyon.php';break;
		case 'profilim':$url='_sayfalar/_uye/_profilim.php';break;
		case 'ayarlar':$url='_sayfalar/_admin/_ayarlar.php';break;
		case '_uyeler':$url='_sayfalar/_admin/_uyeler.php';break;
		case '_admin':$url='_sayfalar/_admin/_admin.php';break;
		case '_slider':$url='_sayfalar/_admin/_slider.php';break;
		case '_slider-ekle':$url='_sayfalar/_admin/_slider-ekle.php';break;
		case '_devamedenprojeekle':$url='_sayfalar/_admin/_devamedenprojeekle.php';break;
		case '_tamamlananprojeekle':$url='_sayfalar/_admin/_tamamlananprojeekle.php';break;
		case '_ayorumlar':$url='_sayfalar/_admin/_ayorumlar.php';break;
		case '_slider-guncelle':$url='_sayfalar/_admin/_slider-guncelle.php';break;
		case '_slider-detay':$url='_sayfalar/_slider-detay.php';break;
		case '_kategoriler':$url='_sayfalar/_admin/_kategoriler.php';break;
		case '_yorumekle':$url='_yorum-ekle.php';break;
		case '_yorumlar':$url='_sayfalar/_yorumlar.php';break;
		case '_dvmednprj':$url='_sayfalar/devamedenprojeler.php';break;
		case '_tmprj':$url='_sayfalar/tamamlananprojeler.php';break;
		case '_uyeduzenle':$url='_sayfalar/_admin/_uyedznl.php';break;
		case '_projeler':$url='_sayfalar/_admin/_projeler.php';break;
		case '_proje-ekle':$url='_sayfalar/_admin/_proje_ekle.php';break;
		case '_projegncl':$url='_sayfalar/_admin/_projegncl.php';break;
		case '_kullanılanmlzm':$url='_sayfalar/_admin/_kullanılanmlzm.php';break;
		case '_kullanılanmlzmgncl':$url='_sayfalar/_admin/_kullanılanmalzemegncl.php';break;
		case '_kullanılanmlzmekle':$url='_sayfalar/_admin/_kullanılanmalzemekle.php';break;
		case '_hakkimda':$url='_sayfalar/_hakkimizda.php';break;
		default:$url='_sayfalar/_icerik.php';break;
	}
	@include($url);

?>