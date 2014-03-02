<?php
function checklevel()
{
	if(!isset($_SESSION["admin"]))
	{
		return 0;
	}
	elseif($_SESSION["admin"] == 1)
	{
		return 1;
	}
	elseif($_SESSION["admin"] == 2)
	{
		return 2;
	}
	elseif($_SESSION["admin"] == 3)
	{
		return 3;
	}
	elseif($_SESSION["admin"] == 4)
	{
		return 4;
	}
	else
	{
		return 0;
	}
}
?>