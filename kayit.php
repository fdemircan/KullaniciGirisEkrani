<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
	include "baglan.php";
	
	$kadi=$_POST["kadi"];
	$sifre=$_POST["sifre"];
	$sifre2=$_POST["sifre2"];
	$mail=$_POST["mail"];
	$parola=md5($sifre);
	
	$kayit="INSERT INTO uyeler(kullanici_adi,sifre,mail) VALUES('$kadi','$parola', 'mail');";
	$sonuc=mysqli_query($baglan,$kayit);
	if($sonuc==0)
	{
		echo "Bir sorun oluştu.Lütfen tekrar deneyiniz.";
		header('Refresh:3; url=index.php');	
	}
	else
	{
		echo "Kayıt başarıyla tamamlandı.";
		header('Refresh:3; url=giris.php');	
	}
	
?>
</body>
</html>