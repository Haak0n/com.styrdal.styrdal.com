<div class="maintext">
	<img src="../images/login.png" alt="Kalender" /><br />
	<hr /><p>
	<?php
	if (isset($_GET['f']) && $_GET['f'] == "y") {
		echo "<a class='redfail'>Felaktigt anv�ndarnamn eller l�senord</a></p><p>";
	}
	?>
	<form action="pages/check.php" method="post">
	Anv�ndarnamn<br />
	<input class="input1" type="text" name="uname" /></p><p>
	L�senord<br />
	<input class="input1" type="password" name="passw" /></p><p>
	<input class="input2" type="submit" value="Logga In" />
	</form>
	</p>
</div>
<div class="mainmenu">
	<img class="leftpic" src="../images/loginleft.jpg" /><br />
	asd<br />
	asd<br />
	asd<br />
	asd<br />
	asd<br />
</div>