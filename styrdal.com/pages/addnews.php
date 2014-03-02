<?php

echo addnews($con);
	
echo "
			<form action='../index.php?p=admin&s=news' method='post'>
			Titel<br />
			<input class='input1' type='text' name='ntopic' /></p><p>
			Text<br />
			<textarea class='input3' name='ntext'></textarea></p><p>
			Skribent<br />
			<input class='input1' type='text' name='nuser' /></p><p>
			<input class='input2' type='submit' value='Lägg Till' />
			</form>
			";
?>