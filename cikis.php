<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
    session_start();
	session_destroy();
	echo "Başarıyla çıkış yaptınız. Yönlendiriliyorsunuz...";
	header('Refresh:3; url=giris.php');

?>

</body>
</html>