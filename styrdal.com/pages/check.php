<?php
session_start();

$con = mysqli_connect("localhost","webmysql","LagenD101het","blommans");
if(mysqli_connect_errno($con)) {
	die('Could not connect to MySQL: ' . mysqli_connect_error());
}


$uname = $_POST["uname"];
$passw = $_POST['passw'];

if (empty($uname) || empty($passw)) {
	header('Location: ../index.php?p=login&f=y');
}


$result = mysqli_query($con, "SELECT uname, pword, lvl FROM admin WHERE uname='$uname'");

$rad = mysqli_fetch_array($result, MYSQLI_ASSOC);
$hash = $rad['pword'];

if (empty($rad['uname']) || empty($rad['pword'])) {
	header('Location: ../index.php?p=login&f=y');
}

elseif (password_verify($passw, $hash)) {
	$_SESSION['admin'] = $rad["lvl"];
	$_SESSION['uname'] = $rad["uname"];
	header('Location: ../index.php?p=admin');
}
else {
	echo $passw;
	echo "<br />";
	echo $rad['pword'];
	//header('Location: ../index.php?p=login&f=y');
}

mysqli_free_result($result);
?>