<?php

include("functions/checklevel.php");
include("functions/adduser.php");
include("functions/addnews.php");
include("functions/adddaily.php");
include("functions/editinfo.php");
include("functions/edittimes.php");
include("functions/editmenu.php");
include("functions/edituser.php");
include("functions/addrestaurant.php");

if (isset($_GET["p"]) == true)
{
	$page = $_GET['p'];
}
else
{
	$page = "home";
}

if ($page == "bbrcam")
{
	header('Location: cam.php');
}

session_start();
if (isset($_GET['logout']) && $_GET['logout'] == "yes" && isset($_SESSION['admin'])) {
	unset($_SESSION['admin']);
}

elseif (isset($_SESSION['admin']) && $_SESSION['admin'] == "yes" && isset($_GET['p']) && $_GET['p'] == "login"){
	header('Location: index.php?p=admin');
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<link rel="stylesheet" type="text/css" href="main.css" />
		<title>styrdal.com</title>
	</head>

	<body>
	<div class="main">
		<div class="leftshad"></div>
		<div class="mid">
		  	<div class="top"></div>
			<div class="menu">

				<?php
				echo "<a href='index.php?p=home' class='menulnk'>Nyheter</a> | <a href='index.php?p=calendar' class='menulnk'>Kalender</a> | <a href='index.php?p=pics' class='menulnk'>Bilder</a> | ";
				if (isset($_SESSION['admin'])) {
					if (checklevel() > 0) {
						echo "<a href='index.php?p=admin' class='menulnk'>Admin</a>";
						echo " | <a href='index.php?p=home&logout=yes' class='menulnk'>Logga Ut</a>";
					}
					else {
						echo "<a href='index.php?p=login' class='menulnk'>Logga In</a>";
					}
				}
				else {	
					echo "<a href='index.php?p=login' class='menulnk'>Logga In</a>";
				}
				?>
			</div>
			<div class="center">
				
				<?php

				include("pages/" . $page . ".php");

				?>
				<div class="mainafter"></div>
			</div>
			<div class="bot"></div>
		</div>
		<div class="rightshad"></div>
	</div>
	</body>

</html> 