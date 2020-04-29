<?php


include 'baglan.php';
$baglanti = new BasicDB('localhost', 'hash', 'root', '123456789');

$hash=$_POST['hash'];

	try{//hata varmı diye kontrol mekanizması.

		//bağlantı yaptık

		//echo "Mysql Bağlantısı Başarıyla Sağlandı. <br />";//bağlantı varsa ekrana yaz.

		

		$ara=$baglanti->query("select sifre from hash where hash ='$hash' ");//isim sütununda a harfi geçenleri çektik.

		$miktar=$ara->rowCount();//verilerin hepsini saydırdık.

		

		if($ara){//eğer veri çekildiyse

			//echo "veri çekildi <br />";

			if($miktar>0){

				foreach($ara as $al){//foreach $arada ki tüm verileri tek tek $al değişkenine aktaracak

					header("Location:index.php?sifre=".$al["sifre"]."&durum=ok&hash=".$_POST['hash']);

					}

			}else{

				header("Location:index.php?islem=no");

			}

		}else{

			echo "veri çekilemedi";

		}

		

		

	}catch (PDOException $h) {

		$hata=$h->getMessage();

		echo "<b>HATA VAR :</b> ".$hata;//bağlantı hatası olursa.hata var yaz.

	}

 ?>
