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
 <body bgcolor="blue" text="white" link="green" vlink="olive" alink="#FF0000">
<form>
<p>
Zadej počet:<input name="pocet" value="5"/>
Zadej slovo:<input name="info" value="Pes"/><br>
<input type="radio" name="style" value="li" checked> Odrážka<br>
<input type="radio" name="style" value="p"> Odstavec<br>
<p><input type="submit"/>
<p><textarea name="text" cols="70" rows="8">
Tady má být nějaká věta.
</textarea>

</p>
</form>



<?php

	print "<h1>Ahoj</h1>";
	print "<p>".$_REQUEST["text"]. "</p>";
	$pocet_znaku = strlen($_REQUEST["text"]);
	print $pocet_znaku ;
	
	
$pieces = explode(" ", $_REQUEST["text"]);
print "<p>".$pieces[0]."</p>";
print "<p>".$pieces[1]."</p>";
print "<p>".$pieces[2]."</p>";
 

	/*
	print $_REQUEST["pocet"];
	
	 print "Ahoj Karle tady máš odrážky:";
	
	for($i=0; $i<$_REQUEST["pocet"]; $i++) {
		 if ($_REQUEST["style"] == "li") {
		 print "<li>Odrážka č.".$i." ".$_REQUEST["info"]."</li>";
		} else {
			print "<p>Odstavec č.".$i." ".$_REQUEST["info"]."</p>";
		}
	}
*/
	
?>

</body>
</html>