<div class="maintext">
	
	<?php
	
	$lvl = checklevel();
	if($lvl < 1)
	{
		echo "Obeh�rig �tkomst.";
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
		
		/* L�gg till nyhet */
		if (isset($_GET['s']) && $_GET['s'] == "news" && ($lvl == 1 || $lvl == 3 || $lvl == 4)) {
			include("addnews.php");
		}
		
		
		//�ndra Dagensmeny
		elseif(isset($_GET['s']) && $_GET['s'] == "daily" && ($lvl == 2 || $lvl == 3 || $lvl == 4))
		{
			include("editdaily.php");
		}

		
		/* L�gg till anv�ndare */
		elseif(isset($_GET['s']) && $_GET['s'] == "adduser" && ($lvl == 4)) 
		{
			include("adduser.php");
		}
		
		/* L�gg till restaurang */
		elseif(isset($_GET['s']) && $_GET['s'] == "addrestaurant" && ($lvl == 4))
		{
			include("addrestaurant.php");
		}
		
		/* Ta bort till restaurang */
		elseif(isset($_GET['s']) && $_GET['s'] == "remrestaurant" && ($lvl == 4))
		{
			include("remrestaurant.php");
		}
		
		//�ndra restauranginfo
		elseif(isset($_GET['s']) && $_GET['s'] == "info" && ($lvl == 2 || $lvl == 3 || $lvl == 4))
		{
			include("editinfo.php");
		}
		
		//�ndra restauranginfo
		elseif(isset($_GET['s']) && $_GET['s'] == "times" && ($lvl == 2 || $lvl == 3 || $lvl == 4))
		{
			include("edittimes.php");
		}
		
		//�ndra meny
		elseif(isset($_GET['s']) && $_GET['s'] == "meny" && ($lvl == 2 || $lvl == 3 || $lvl == 4))
		{
			include("editmenu.php");
		}
		
		//�ndra inst�llningar
		elseif(isset($_GET['s']) && $_GET['s'] == "edit" && $lvl > 0)
		{
			include("edituser.php");
		}
			
		else {
			echo "
			Du �r nu inloggad! </p>";
		}
		
		
		
		echo "</div>
			<div class='mainmenu'>
			<img class='leftpic' src='../images/newsleft.jpg' alt='Nyheter' /><br />";
		
		if($lvl == 1 || $lvl == 3 || $lvl == 4)
		{
			echo "<a href='../index.php?p=admin&s=news'>L�gg till Nyhet</a><br />
				<a href='../index.php?p=admin&s=event'>L�gg till Event</a><br />
				<a href='../index.php?p=admin&s=pics'>L�gg till Bilder</a><p />
				
				";
		}
		
		if($lvl == 2 || $lvl == 3 || $lvl == 4)
		{
			echo "<a href='../index.php?p=admin&s=daily'>�ndra Dagensmeny</a><br />
				<a href='../index.php?p=admin&s=meny'>�ndra Meny</a><br />
				<a href='../index.php?p=admin&s=info'>�ndra Information</a><br />
				<a href='../index.php?p=admin&s=times'>�ndra �ppettider</a><p />";
		}
		
		if($lvl > 0)
		{
			echo "<a href='../index.php?p=admin&s=edit'>�ndra inst�llningar</a><p />";
		}
		
		if($lvl == 4)
		{
			echo "<a href='../index.php?p=admin&s=addrestaurant'>L�gg till Restaurang</a><br />
				<a href='../index.php?p=admin&s=remrestaurant'>Ta bort restaurang</a><br />
				<a href='../index.php?p=admin&s=adduser'>L�gg till Anv�ndare</a><p />";
		}
		echo "</div>";
	}

	?>

