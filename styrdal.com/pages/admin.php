<div class="maintext">
	
	<?php
	
	$lvl = checklevel();
	if($lvl < 1)
	{
		echo "Obehörig åtkomst.";
	}
	else
	{
		echo "
		<img src='../images/nyheter.png' alt='Nyheter' /><br />
		<hr /><p>";
		
		$con = mysqli_connect("localhost","webmysql","LagenD101het","blommans");
			
		if(mysqli_connect_errno($con)) {
			die('Could not connect to MySQL: ' . mysqli_connect_error());
		}
		
		/* Lägg till nyhet */
		if (isset($_GET['s']) && $_GET['s'] == "news" && ($lvl == 1 || $lvl == 3 || $lvl == 4)) {
			include("addnews.php");
		}
		
		
		//Ändra Dagensmeny
		elseif(isset($_GET['s']) && $_GET['s'] == "daily" && ($lvl == 2 || $lvl == 3 || $lvl == 4))
		{
			include("editdaily.php");
		}

		
		/* Lägg till användare */
		elseif(isset($_GET['s']) && $_GET['s'] == "adduser" && ($lvl == 4)) 
		{
			include("adduser.php");
		}
		
		/* Lägg till restaurang */
		elseif(isset($_GET['s']) && $_GET['s'] == "addrestaurant" && ($lvl == 4))
		{
			include("addrestaurant.php");
		}
		
		/* Ta bort till restaurang */
		elseif(isset($_GET['s']) && $_GET['s'] == "remrestaurant" && ($lvl == 4))
		{
			include("remrestaurant.php");
		}
		
		//Ändra restauranginfo
		elseif(isset($_GET['s']) && $_GET['s'] == "info" && ($lvl == 2 || $lvl == 3 || $lvl == 4))
		{
			include("editinfo.php");
		}
		
		//Ändra restauranginfo
		elseif(isset($_GET['s']) && $_GET['s'] == "times" && ($lvl == 2 || $lvl == 3 || $lvl == 4))
		{
			include("edittimes.php");
		}
		
		//Ändra meny
		elseif(isset($_GET['s']) && $_GET['s'] == "meny" && ($lvl == 2 || $lvl == 3 || $lvl == 4))
		{
			include("editmenu.php");
		}
		
		//Ändra inställningar
		elseif(isset($_GET['s']) && $_GET['s'] == "edit" && $lvl > 0)
		{
			include("edituser.php");
		}
			
		else {
			echo "
			Du är nu inloggad! </p>";
		}
		
		
		
		echo "</div>
			<div class='mainmenu'>
			<img class='leftpic' src='../images/newsleft.jpg' alt='Nyheter' /><br />";
		
		if($lvl == 1 || $lvl == 3 || $lvl == 4)
		{
			echo "<a href='../index.php?p=admin&s=news'>Lägg till Nyhet</a><br />
				<a href='../index.php?p=admin&s=event'>Lägg till Event</a><br />
				<a href='../index.php?p=admin&s=pics'>Lägg till Bilder</a><p />
				
				";
		}
		
		if($lvl == 2 || $lvl == 3 || $lvl == 4)
		{
			echo "<a href='../index.php?p=admin&s=daily'>Ändra Dagensmeny</a><br />
				<a href='../index.php?p=admin&s=meny'>Ändra Meny</a><br />
				<a href='../index.php?p=admin&s=info'>Ändra Information</a><br />
				<a href='../index.php?p=admin&s=times'>Ändra Öppettider</a><p />";
		}
		
		if($lvl > 0)
		{
			echo "<a href='../index.php?p=admin&s=edit'>Ändra inställningar</a><p />";
		}
		
		if($lvl == 4)
		{
			echo "<a href='../index.php?p=admin&s=addrestaurant'>Lägg till Restaurang</a><br />
				<a href='../index.php?p=admin&s=remrestaurant'>Ta bort restaurang</a><br />
				<a href='../index.php?p=admin&s=adduser'>Lägg till Användare</a><p />";
		}
		echo "</div>";
	}

	?>

