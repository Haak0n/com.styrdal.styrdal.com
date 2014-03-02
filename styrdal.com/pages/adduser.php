<?php
echo adduser($con);
	
echo "<form action='../index.php?p=admin&s=adduser' method='post'>
	Inloggningsnamn<br />
	<input class='input1' type='text' name='auname' /></p><p>
	Lösenord<br />
	<input class='input1' type='password' name='aupassword' /></p><p>
	idname<br />
	<input class='input1' type='text' name='auidname' /></p><p>
	Behörighet<br />
	<input class='input4' list='lvl' name='aulevel' value='1' /></p><p>
	<datalist id='lvl'>
		<option value='1' />
		<option value='2' />
		<option value='3' />
		<option value='4' />
	</datalist>
	<input class='input2' type='submit' value='Lägg Till' /></p>

	</form>";
?>