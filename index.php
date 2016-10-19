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
<body  bgcolor="fuchsia">
<form>
<p>Číslo: <input name="pocet" value="10" /></p>
<p>Text: <input name="pismeno" value="Žůůůžová"/></p>
<p>Co chceš?</p>
<p>
	<select name="typSeznamu">
		<option value="odr">odrážky</option>
		<option value="cs" selected="selected">číselný</option>
	</select>
</p>	
<p><input type="submit" /></p>
<textarea name="text1" rows="5" cols="15">
ostrava je pěkná 
</textarea>
</form>
	
<?php
	/*echo "<p>".$_REQUEST["text1"]."</p>";*/
	$pizza = ($_REQUEST["text1"]);
	$pieces = explode(" ",$pizza);

	/*echo "<b>"."<p>".$pieces[0]."</p>"."</b>"; // piece1
	echo "<p>".$pieces[1]."</p>"; // piece2	*/
	
	foreach ($pieces as &$value) {
		echo "<p>"."$value"."</p>";
}
	/*$array = array("ostrava","ostravě");
	if (in_array ("ostrava", $array)) {
		echo "<b>ostrava";
	}*/

	/*echo "Zadane cislo: " . $cislo . "<br />Zadany text: " . $text . "<br />";	//cteni z formulare
	
	if($_REQUEST["typSeznamu"] == "cs"){
		echo "<ol>";	
		for ($i = 0; $i < $cislo; $i++){
			echo "<li>" . $text . "</li>";
		}
		echo "</ol>";
	}else{
		echo "<ul>";
		for ($i = 0; $i < $cislo; $i++){
			echo "<li>" . $text . "</li>";
		}
		echo "</ul>";
	}*/
	?>
</body>
</html>