<div class="maintext">
	<img src="../images/nyheter.png" alt="Nyheter" /><br />
	<hr /><p class='mainhead'>
	
	<?php 
	
	$con = mysqli_connect("localhost","webmysql","LagenD101het","blommans");
				
	if(mysqli_connect_errno($con)) {
		die('Could not connect to MySQL: ' . mysqli_connect_error());
	}
	
	if(isset($_GET["id"]))
	{
		$id = $_GET["id"];
		$query = "SELECT topic, text, date, user, id FROM news WHERE id = $id ORDER by ID DESC LIMIT 1";
	}
	else 
	{
		$query = "SELECT topic, text, date, user, id FROM news ORDER by ID DESC LIMIT 1";
	}
	
	if($result = mysqli_query($con, $query))
	{
		$row = mysqli_fetch_assoc($result);
		
		echo $row["topic"];
		echo "<p />";
		echo $row["text"];
		echo "<p /><hr />";
			
		echo "Av: ";
		echo $row["user"];
		echo " - ";
		echo $row["date"];
		
		echo "<p />";
		
		$id = $row["id"];
		$nextid = $id - 1;
		$previd = $id + 1;
		
		$prevquery = "SELECT id FROM news WHERE id = '$previd'";
		$prevresult = mysqli_query($con, $prevquery);
		if($prevrow = mysqli_fetch_assoc($prevresult))
		{
			echo " <a href='index.php?p=home&id=$previd'><< Föregående </a>";
		}
		
		$nextquery = "SELECT id FROM news WHERE id = $nextid";
		$nextresult = mysqli_query($con, $nextquery);
		if($nextrow = mysqli_fetch_assoc($nextresult))
		{
			echo " <a href='index.php?p=home&id=$nextid'>Nästa >> </a>";
		}
		
		echo "</div>
			<div class='mainmenu'>
			<img class='leftpic' src='../images/newsleft.jpg' alt='Nyheter' /><br />";
		
		
		
		$query2 = "SELECT topic, id FROM news ORDER by ID DESC LIMIT 5";
		$result2 = mysqli_query($con, $query2);
		while($row2 = mysqli_fetch_assoc($result2))
		{
			$id2 = $row2["id"];
			echo "<a href='index.php?p=home&id=$id2'>";
			echo $row2["topic"];
			echo "</a><br />";
		}
			
	}
	
	
	
	?>
	
</div>