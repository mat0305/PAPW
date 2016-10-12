<!DOCTYPE html>
<html dir="ltr" lang="">
  <head>  
   
    <title>PAW</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="robots" content="index, follow">
	<meta name="revisit-after" content="7 days">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		
</head>
<body>
<form>
<p>
Zadej počet:<input name="pocet" value="5"/>
Zadej slovo:<input name="info" value="Pes"/><br>
<input type="radio" name="style" value="li" checked> Odrážka<br>
<input type="radio" name="style" value="p"> Odstavec<br>
<input type="submit"/>
</p>
</form>



<?php
	
	print $_REQUEST["pocet"];
	
	print "Ahoj Karle tady máš odrážky:";
	
	for($i=0; $i<$_REQUEST["pocet"]; $i++) {
		 if ($_REQUEST["style"] == "li") {
		 print "<li>Odrážka č.".$i." ".$_REQUEST["info"]."</li>";
		} else {
			print "<p>Odstavec č.".$i." ".$_REQUEST["info"]."</p>";
		}
	}

	
?>

</body>
</html>