<?php
addrestaurant();

echo "<form action='../index.php?p=admin&s=addrestaurant' method='post'>
	Namn<br />
	<input class='input5' type='text' name='addname' /></p><p>
	idname<br />
	<input class='input5' type='text' name='addidname' /></p><p>
	Adress<br />
	<input class='input5' type='text' name='addaddress' /></p><p>
	Telefon<br />
	<input class='input5' type='text' name='addnumber' /></p><p>
	Hemsida<br />
	<input class='input5' type='text' name='addurl' /></p><p>
	Info<br />
	<textarea class='input3' name='addextra'></textarea></p><p>
		
	<input type='checkbox' name='addstandard' value='true' />Har fast meny</p><p>
	<input type='checkbox' name='adddaily' value='true' />Har dagens</p><p>
	<input class='input2' type='submit' value='Lägg Till' />";
?>