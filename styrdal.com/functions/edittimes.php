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
			if(0 < $_POST["mondayopenhour"] && $_POST["mondayopenhour"] < 10)
			{
				$mondayopenhour = "0" . $_POST["mondayopenhour"];
			}
			else
			{
				$mondayopenhour = $_POST["mondayopenhour"];
			}
			
			if(0 < $_POST["mondayopenminute"] && $_POST["mondayopenminute"] < 10)
			{
				$mondayopenminute = "0" . $_POST["mondayopenminute"];
			}
			else
			{
				$mondayopenminute = $_POST["mondayopenminute"];
			}
			
			if(0 < $_POST["mondayclosehour"] && $_POST["mondayclosehour"] < 10)
			{
				$mondayclosehour = "0" . $_POST["mondayclosehour"];
			}
			else
			{
				$mondayclosehour = $_POST["mondayclosehour"];
			}
			
			if(0 < $_POST["mondaycloseminute"] && $_POST["mondaycloseminute"] < 10)
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
			if(0 < $_POST["tuesdayopenhour"] && $_POST["tuesdayopenhour"] < 10)
			{
				$tuesdayopenhour = "0" . $_POST["tuesdayopenhour"];
			}
			else
			{
				$tuesdayopenhour = $_POST["tuesdayopenhour"];
			}
		
			if(0 < $_POST["tuesdayopenminute"] && $_POST["tuesdayopenminute"] < 10)
			{
				$tuesdayopenminute = "0" . $_POST["tuesdayopenminute"];
			}
			else
			{
				$tuesdayopenminute = $_POST["tuesdayopenminute"];
			}
		
			if(0 < $_POST["tuesdayclosehour"] && $_POST["tuesdayclosehour"] < 10)
			{
				$tuesdayclosehour = "0" . $_POST["tuesdayclosehour"];
			}
			else
			{
				$tuesdayclosehour = $_POST["tuesdayclosehour"];
			}
		
			if(0 < $_POST["tuesdaycloseminute"] && $_POST["tuesdaycloseminute"] < 10)
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
			if(0 < $_POST["wednesdayopenhour"] && $_POST["wednesdayopenhour"] < 10)
			{
				$wednesdayopenhour = "0" . $_POST["wednesdayopenhour"];
			}
			else
			{
				$wednesdayopenhour = $_POST["wednesdayopenhour"];
			}
		
			if(0 < $_POST["wednesdayopenminute"] && $_POST["wednesdayopenminute"] < 10)
			{
				$wednesdayopenminute = "0" . $_POST["wednesdayopenminute"];
			}
			else
			{
				$wednesdayopenminute = $_POST["wednesdayopenminute"];
			}
		
			if(0 < $_POST["wednesdayclosehour"] && $_POST["wednesdayclosehour"] < 10)
			{
				$wednesdayclosehour = "0" . $_POST["wednesdayclosehour"];
			}
			else
			{
				$wednesdayclosehour = $_POST["wednesdayclosehour"];
			}
		
			if(0 < $_POST["wednesdaycloseminute"] && $_POST["wednesdaycloseminute"] < 10)
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
			if(0 < $_POST["thursdayopenhour"] && $_POST["thursdayopenhour"] < 10)
			{
				$thursdayopenhour = "0" . $_POST["thursdayopenhour"];
			}
			else
			{
				$thursdayopenhour = $_POST["thursdayopenhour"];
			}
		
			if(0 < $_POST["thursdayopenminute"] && $_POST["thursdayopenminute"] < 10)
			{
				$thursdayopenminute = "0" . $_POST["thursdayopenminute"];
			}
			else
			{
				$thursdayopenminute = $_POST["thursdayopenminute"];
			}
		
			if(0 < $_POST["thursdayclosehour"] && $_POST["thursdayclosehour"] < 10)
			{
				$thursdayclosehour = "0" . $_POST["thursdayclosehour"];
			}
			else
			{
				$thursdayclosehour = $_POST["thursdayclosehour"];
			}
		
			if(0 < $_POST["thursdaycloseminute"] && $_POST["thursdaycloseminute"] < 10)
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
			if(0 < $_POST["fridayopenhour"] && $_POST["fridayopenhour"] < 10)
			{
				$fridayopenhour = "0" . $_POST["fridayopenhour"];
			}
			else
			{
				$fridayopenhour = $_POST["fridayopenhour"];
			}
		
			if(0 < $_POST["fridayopenminute"] && $_POST["fridayopenminute"] < 10)
			{
				$fridayopenminute = "0" . $_POST["fridayopenminute"];
			}
			else
			{
				$fridayopenminute = $_POST["fridayopenminute"];
			}
		
			if(0 < $_POST["fridayclosehour"] && $_POST["fridayclosehour"] < 10)
			{
				$fridayclosehour = "0" . $_POST["fridayclosehour"];
			}
			else
			{
				$fridayclosehour = $_POST["fridayclosehour"];
			}
		
			if(0 < $_POST["fridaycloseminute"] && $_POST["fridaycloseminute"] < 10)
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
			if(0 < $_POST["saturdayopenhour"] && $_POST["saturdayopenhour"] < 10)
			{
				$saturdayopenhour = "0" . $_POST["saturdayopenhour"];
			}
			else
			{
				$saturdayopenhour = $_POST["saturdayopenhour"];
			}
		
			if(0 < $_POST["saturdayopenminute"] && $_POST["saturdayopenminute"] < 10)
			{
				$saturdayopenminute = "0" . $_POST["saturdayopenminute"];
			}
			else
			{
				$saturdayopenminute = $_POST["saturdayopenminute"];
			}
		
			if(0 < $_POST["saturdayclosehour"] && $_POST["saturdayclosehour"] < 10)
			{
				$saturdayclosehour = "0" . $_POST["saturdayclosehour"];
			}
			else
			{
				$saturdayclosehour = $_POST["saturdayclosehour"];
			}
		
			if(0 < $_POST["saturdaycloseminute"] && $_POST["saturdaycloseminute"] < 10)
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
			if(0 < $_POST["sundayopenhour"] && $_POST["sundayopenhour"] < 10)
			{
				$sundayopenhour = "0" . $_POST["sundayopenhour"];
			}
			else
			{
				$sundayopenhour = $_POST["sundayopenhour"];
			}
		
			if(0 < $_POST["sundayopenminute"] && $_POST["sundayopenminute"] < 10)
			{
				$sundayopenminute = "0" . $_POST["sundayopenminute"];
			}
			else
			{
				$sundayopenminute = $_POST["sundayopenminute"];
			}
		
			if(0 < $_POST["sundayclosehour"] && $_POST["sundayclosehour"] < 10)
			{
				$sundayclosehour = "0" . $_POST["sundayclosehour"];
			}
			else
			{
				$sundayclosehour = $_POST["sundayclosehour"];
			}
		
			if(0 < $_POST["sundaycloseminute"] && $_POST["sundaycloseminute"] < 10)
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
			monday_open = '" . utf8_encode($mondayopen) . "', 
			monday_close='" . utf8_encode($mondayclose) . "', 
			tuesday_open='" . utf8_encode($tuesdayopen) . "', 
			tuesday_close='" . utf8_encode($tuesdayclose) . "', 
			wednesday_open='" . utf8_encode($wednesdayopen) . "', 
			wednesday_close='" . utf8_encode($wednesdayclose) . "',
			thursday_open='" . utf8_encode($thursdayopen) . "', 
			thursday_close='" . utf8_encode($thursdayclose) . "', 
			friday_open='" . utf8_encode($fridayopen) . "', 
			friday_close='" . utf8_encode($fridayclose) . "', 
			saturday_open='" . utf8_encode($saturdayopen) . "', 
			saturday_close='" . utf8_encode($saturdayclose) . "', 
			sunday_open='" . utf8_encode($sundayopen) . "', 
			sunday_close='" . utf8_encode($sundayclose) . "'
			WHERE idname = '" . utf8_encode($idname) . "'";
		
		$sqlitecon->query($timessql);
		updateVersion($sqlitecon);
		
		echo "Öppettider uppdaterade!";
	}
}
?>