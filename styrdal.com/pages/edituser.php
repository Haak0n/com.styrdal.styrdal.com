<?php
edituser($con);

$eusql = "SELECT email FROM admin WHERE uname = '" . $_SESSION["uname"] . "'";
$euresult = mysqli_query($con, $eusql);
if($eurow = mysqli_fetch_assoc($euresult))
{
	$email = $eurow["email"];
}
else
{
	$email = null;
}

echo "<form action='../index.php?p=admin&s=edit' method='post'>
	Nuvarande l�senord<br />
	<input class='input1' type='password' name='euoldpass' /></p><p>
	Nytt l�senord<br />
	<input class='input1' type='password' name='eunewpass' /></p><p>
	Upprepa l�enord<br />
	<input class='input1' type='password' name='eunewrepeat' /></p><p>
	<input class='input2' type='submit' value='�ndra' /></p><hr /><p>
	</form>
		
	<form action='../index.php?p=admin&s=edit' method='post'>
	Epost<br />
	<input class='input1' type='text' name='eumail' value='" . $email . "' /></p><p>
	<input class='input2' type='submit' value='�ndra' /></p>
	</form>";

?>