<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Üye Ol</title>
<style>
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
    	<form action="kayit.php" method="post">
         <table>
           <tr>
           <td>Kullanıcı Adı:</td>
           <td><input type="text" name="kadi" required="required" autofocus="autofocus" /></td>
           </tr><tr>
           <td>Şifre Oluşturun:</td>
           <td><input type="password" name="sifre" id="sifre" required="required"/></td>
           </tr><tr>
           <td>Şifrenizi Onaylayın:</td>
           <td><input type="password" name="sifre2" id="sifre2" required="required"/></td>
           </tr><tr>
           <td>Email:</td>
           <td><input type="email" name="mail" required="required"/></td>
           </tr><tr>
           <td></td>
           <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               <button type="submit" onclick="myFunction()"  >Kayıt Ol</button></td>
           </tr>
         </table>
 		</form>   
        
        <script>
		    function myFunction() {
                 var sifre,sifre2;
                 sifre = document.getElementById("sifre").value;
                 sifre2 = document.getElementById("sifre2").value;
                 if (sifre != sifre2 )
                 {
                    window.alert("Şifreler aynı değil.Lütfen tekrar deneyiniz.");
                  }
			 }
		
		</script>
        	
    </div>
</body>
</html>