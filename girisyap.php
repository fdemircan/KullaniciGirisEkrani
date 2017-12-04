<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>

<body>
<?php
	include "baglan.php";
	
	$kadi=$_POST['kadi'];
	$sifre=$_POST['sifre'];
	$parola=md5($sifre);

	if($kadi && $sifre)
	{
	    $_SESSION['kadi']=$kadi;
		$sorgu="select * from uyeler where kullanici_adi='$kadi' and sifre='$parola'";
		$cagir=	mysqli_query($baglan,$sorgu);
		$verisay=mysqli_num_rows($cagir);
		if($verisay>0)
		{
	       echo "Hoşgeldiniz " . $_SESSION['kadi'];
		   echo "<br/>";
		   echo "<a href='cikis.php'>Çıkış Yap</a>";		
		}
		else
		{
		   echo "Kullanıcı adı veya şifre yanlış.Lütfen tekrar deneyiniz.";
		   header('Refresh:10; url=giris.php');	
		}
	}

?>

</body>
</html>