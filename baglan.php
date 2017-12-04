<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
   session_start();
   ob_start();

   $host = "localhost";
   $kadi = "root";
   $sifre = "";
   $db   = "odev";
   
   $baglan=mysqli_connect("localhost","root","","odev"); 
   mysqli_set_charset($baglan, "utf8");
   


?>
</body>
</html>