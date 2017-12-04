<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Giriş Yap</title>
<style type="text/css">
   #form input, button {border:1px solid #ddd; padding:5px; border-radius:10px;}
   body{background:#CCC;}
   button{background:#FFF;}
</style>
</head>

<body>
	<div id="form" align="center">
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
	  <form action="girisyap.php" method="post">
	    <table>
          <tr>
        	<td>Kullanıcı Adı:</td>
            <td><input type="text" name="kadi" required="required" autofocus="autofocus" /></td>
            </tr><tr>
            <td>Şifre:</td>
            <td><input type="password" name="sifre" required="required" /></td>
            </tr><tr>
            <td></td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button type="submit">Giriş Yap</button></td> 
            </tr>
        </table>
        </form>  
    </div>


<?php

?>
</body>
</html>