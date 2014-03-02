<?php
function edittimes()
{	
	$sqlitecon = new SQLIte3("database/restauranger.db");
	
	if(isset($_POST["mondayopenhour"]) && isset($_POST["mondayopenminute"]) && isset($_POST["mondayclosehour"]) && isset($_POST["mondaycloseminute"]) && isset($_POST["tuesdayopenhour"]) && isset($_POST["tuesdayopenminute"]) && isset($_POST["tuesdayclosehour"]) && isset($_POST["tuesdaycloseminute"]) && isset($_POST["wednesdayopenhour"]) && isset($_POST["wednesdayopenminute"]) && isset($_POST["wednesdayclosehour"]) && isset($_POST["wednesdaycloseminute"]) && isset($_POST["thursdayopenhour"]) && isset($_POST["thursdayopenminute"]) && isset($_POST["thursdayclosehour"]) && isset($_POST["thursdaycloseminute"]) && isset($_POST["fridayopenhour"]) && isset($_POST["fridayopenminute"]) && isset($_POST["fridayclosehour"]) && isset($_POST["fridaycloseminute"]) && isset($_POST["saturdayopenhour"]) && isset($_POST["saturdayopenminute"]) && isset($_POST["saturdayclosehour"]) && isset($_POST["saturdaycloseminute"]) && isset($_POST["sundayopenhour"]) && isset($_POST["sundayopenminute"]) && isset($_POST["sundayclosehour"]) && isset($_POST["sundaycloseminute"]))
	{
				
		//Monday variables
		if($_POST["mondayopenhour"] == "Stängt" || $_POST["mondayopenminute"] == "Stängt" || $_POST["mondayclosehour"] == "Stängt" || $_POST["mondaycloseminute"] == "Stängt")
		{
			$mondayopen = "Stängt";
			$mondayclose = "Stängt";
		}
		else
		{
			if($_POST["mondayopenhour"] < 10)
			{
				$mondayopenhour = "0" . $_POST["mondayopenhour"];
			}
			else
			{
				$mondayopenhour = $_POST["mondayopenhour"];
			}
			
			if($_POST["mondayopenminute"] < 10)
			{
				$mondayopenminute = "0" . $_POST["mondayopenminute"];
			}
			else
			{
				$mondayopenminute = $_POST["mondayopenminute"];
			}
			
			if($_POST["mondayclosehour"] < 10)
			{
				$mondayclosehour = "0" . $_POST["mondayclosehour"];
			}
			else
			{
				$mondayclosehour = $_POST["mondayclosehour"];
			}
			
			if($_POST["mondaycloseminute"] < 10)
			{
				$mondaycloseminute = "0" . $_POST["mondaycloseminute"];
			}
			else
			{
				$mondaycloseminute = $_POST["mondaycloseminute"];
			}
			
			$mondayopen = $mondayopenhour . ":" . $mondayopenminute;
			$mondayclose = $mondayclosehour . ":" . $mondaycloseminute;
		}
		
		//Tuesday variables
		if($_POST["tuesdayopenhour"] == "Stängt" || $_POST["tuesdayopenminute"] == "Stängt" || $_POST["tuesdayclosehour"] == "Stängt" || $_POST["tuesdaycloseminute"] == "Stängt")
		{
			$tuesdayopen = "Stängt";
			$tuesdayclose = "Stängt";
		}
		else
		{
			if($_POST["tuesdayopenhour"] < 10)
			{
				$tuesdayopenhour = "0" . $_POST["tuesdayopenhour"];
			}
			else
			{
				$tuesdayopenhour = $_POST["tuesdayopenhour"];
			}
		
			if($_POST["tuesdayopenminute"] < 10)
			{
				$tuesdayopenminute = "0" . $_POST["tuesdayopenminute"];
			}
			else
			{
				$tuesdayopenminute = $_POST["tuesdayopenminute"];
			}
		
			if($_POST["tuesdayclosehour"] < 10)
			{
				$tuesdayclosehour = "0" . $_POST["tuesdayclosehour"];
			}
			else
			{
				$tuesdayclosehour = $_POST["tuesdayclosehour"];
			}
		
			if($_POST["tuesdaycloseminute"] < 10)
			{
				$tuesdaycloseminute = "0" . $_POST["tuesdaycloseminute"];
			}
			else
			{
				$tuesdaycloseminute = $_POST["tuesdaycloseminute"];
			}
			
			$tuesdayopen = $tuesdayopenhour . ":" . $tuesdayopenminute;
			$tuesdayclose = $tuesdayclosehour . ":" . $tuesdaycloseminute;
		}
		
		
		//Wednesday variables
		if($_POST["wednesdayopenhour"] == "Stängt" || $_POST["wednesdayopenminute"] == "Stängt" || $_POST["wednesdayclosehour"] == "Stängt" || $_POST["wednesdaycloseminute"] == "Stängt")
		{
			$wednesdayopen = "Stängt";
			$wednesdayclose = "Stängt";
		}
		else
		{
			if($_POST["wednesdayopenhour"] < 10)
			{
				$wednesdayopenhour = "0" . $_POST["wednesdayopenhour"];
			}
			else
			{
				$wednesdayopenhour = $_POST["wednesdayopenhour"];
			}
		
			if($_POST["wednesdayopenminute"] < 10)
			{
				$wednesdayopenminute = "0" . $_POST["wednesdayopenminute"];
			}
			else
			{
				$wednesdayopenminute = $_POST["wednesdayopenminute"];
			}
		
			if($_POST["wednesdayclosehour"] < 10)
			{
				$wednesdayclosehour = "0" . $_POST["wednesdayclosehour"];
			}
			else
			{
				$wednesdayclosehour = $_POST["wednesdayclosehour"];
			}
		
			if($_POST["wednesdaycloseminute"] < 10)
			{
				$wednesdaycloseminute = "0" . $_POST["wednesdaycloseminute"];
			}
			else
			{
				$wednesdaycloseminute = $_POST["wednesdaycloseminute"];
			}
			
			$wednesdayopen = $wednesdayopenhour . ":" . $wednesdayopenminute;
			$wednesdayclose = $wednesdayclosehour . ":" . $wednesdaycloseminute;
		}
		
		//Thursday variables
		if($_POST["thursdayopenhour"] == "Stängt" || $_POST["thursdayopenminute"] == "Stängt" || $_POST["thursdayclosehour"] == "Stängt" || $_POST["thursdaycloseminute"] == "Stängt")
		{
			$thursdayopen = "Stängt";
			$thursdayclose = "Stängt";
		}
		else
		{
			if($_POST["thursdayopenhour"] < 10)
			{
				$thursdayopenhour = "0" . $_POST["thursdayopenhour"];
			}
			else
			{
				$thursdayopenhour = $_POST["thursdayopenhour"];
			}
		
			if($_POST["thursdayopenminute"] < 10)
			{
				$thursdayopenminute = "0" . $_POST["thursdayopenminute"];
			}
			else
			{
				$thursdayopenminute = $_POST["thursdayopenminute"];
			}
		
			if($_POST["thursdayclosehour"] < 10)
			{
				$thursdayclosehour = "0" . $_POST["thursdayclosehour"];
			}
			else
			{
				$thursdayclosehour = $_POST["thursdayclosehour"];
			}
		
			if($_POST["thursdaycloseminute"] < 10)
			{
				$thursdaycloseminute = "0" . $_POST["thursdaycloseminute"];
			}
			else
			{
				$thursdaycloseminute = $_POST["thursdaycloseminute"];
			}
			
			$thursdayopen = $thursdayopenhour . ":" . $thursdayopenminute;
			$thursdayclose = $thursdayclosehour . ":" . $thursdaycloseminute;
		}
		
		
		//Friday variables
		if($_POST["fridayopenhour"] == "Stängt" || $_POST["fridayopenminute"] == "Stängt" || $_POST["fridayclosehour"] == "Stängt" || $_POST["fridaycloseminute"] == "Stängt")
		{
			$fridayopen = "Stängt";
			$fridayclose = "Stängt";
		}
		else
		{
			if($_POST["fridayopenhour"] < 10)
			{
				$fridayopenhour = "0" . $_POST["fridayopenhour"];
			}
			else
			{
				$fridayopenhour = $_POST["fridayopenhour"];
			}
		
			if($_POST["fridayopenminute"] < 10)
			{
				$fridayopenminute = "0" . $_POST["fridayopenminute"];
			}
			else
			{
				$fridayopenminute = $_POST["fridayopenminute"];
			}
		
			if($_POST["fridayclosehour"] < 10)
			{
				$fridayclosehour = "0" . $_POST["fridayclosehour"];
			}
			else
			{
				$fridayclosehour = $_POST["fridayclosehour"];
			}
		
			if($_POST["fridaycloseminute"] < 10)
			{
				$fridaycloseminute = "0" . $_POST["fridaycloseminute"];
			}
			else
			{
				$fridaycloseminute = $_POST["fridaycloseminute"];
			}
			
			$fridayopen = $fridayopenhour . ":" . $fridayopenminute;
			$fridayclose = $fridayclosehour . ":" . $fridaycloseminute;
		}
		
		
		//Saturday variables
		if($_POST["saturdayopenhour"] == "Stängt" || $_POST["saturdayopenminute"] == "Stängt" || $_POST["saturdayclosehour"] == "Stängt" || $_POST["saturdaycloseminute"] == "Stängt")
		{
			$saturdayopen = "Stängt";
			$saturdayclose = "Stängt";
		}
		else
		{
			if($_POST["saturdayopenhour"] < 10)
			{
				$saturdayopenhour = "0" . $_POST["saturdayopenhour"];
			}
			else
			{
				$saturdayopenhour = $_POST["saturdayopenhour"];
			}
		
			if($_POST["saturdayopenminute"] < 10)
			{
				$saturdayopenminute = "0" . $_POST["saturdayopenminute"];
			}
			else
			{
				$saturdayopenminute = $_POST["saturdayopenminute"];
			}
		
			if($_POST["saturdayclosehour"] < 10)
			{
				$saturdayclosehour = "0" . $_POST["saturdayclosehour"];
			}
			else
			{
				$saturdayclosehour = $_POST["saturdayclosehour"];
			}
		
			if($_POST["saturdaycloseminute"] < 10)
			{
				$saturdaycloseminute = "0" . $_POST["saturdaycloseminute"];
			}
			else
			{
				$saturdaycloseminute = $_POST["saturdaycloseminute"];
			}
			
			$saturdayopen = $saturdayopenhour . ":" . $saturdayopenminute;
			$saturdayclose = $saturdayclosehour . ":" . $saturdaycloseminute;
		}
		
		
		//Sunday variables
		if($_POST["sundayopenhour"] == "Stängt" || $_POST["sundayopenminute"] == "Stängt" || $_POST["sundayclosehour"] == "Stängt" || $_POST["sundaycloseminute"] == "Stängt")
		{
			$sundayopen = "Stängt";
			$sundayclose = "Stängt";
		}
		else
		{
			if($_POST["sundayopenhour"] < 10)
			{
				$sundayopenhour = "0" . $_POST["sundayopenhour"];
			}
			else
			{
				$sundayopenhour = $_POST["sundayopenhour"];
			}
		
			if($_POST["sundayopenminute"] < 10)
			{
				$sundayopenminute = "0" . $_POST["sundayopenminute"];
			}
			else
			{
				$sundayopenminute = $_POST["sundayopenminute"];
			}
		
			if($_POST["sundayclosehour"] < 10)
			{
				$sundayclosehour = "0" . $_POST["sundayclosehour"];
			}
			else
			{
				$sundayclosehour = $_POST["sundayclosehour"];
			}
		
			if($_POST["sundaycloseminute"] < 10)
			{
				$sundaycloseminute = "0" . $_POST["sundaycloseminute"];
			}
			else
			{
				$sundaycloseminute = $_POST["sundaycloseminute"];
			}
			
			$sundayopen = $sundayopenhour . ":" . $sundayopenminute;
			$sundayclose = $sundayclosehour . ":" . $sundaycloseminute;
		}
		
		$idname = $_POST["idname"];
		
		$timessql = "UPDATE restaurants SET 
			monday_open = '" . $mondayopen . "', 
			monday_close='" . $mondayclose . "', 
			tuesday_open='" . $tuesdayopen . "', 
			tuesday_close='" . $tuesdayclose . "', 
			wednesday_open='" . $wednesdayopen . "', 
			wednesday_close='" . $wednesdayclose . "',
			thursday_open='" . $thursdayopen . "', 
			thursday_close='" . $thursdayclose . "', 
			friday_open='" . $fridayopen . "', 
			friday_close='" . $fridayclose . "', 
			saturday_open='" . $saturdayopen . "', 
			saturday_close='" . $saturdayclose . "', 
			sunday_open='" . $sundayopen . "', 
			sunday_close='" . $sundayclose . "'
			WHERE idname = '" . $idname . "'";
		
		$sqlitecon->query($timessql);
		
		echo "Öppettider uppdaterade!";
	}
}
?>