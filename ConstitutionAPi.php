<?php
if ($_GET['location'])
{
	////////////////////////////Get Request parameters from the request Array\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
	$location=$_GET['location'];
	$statecode=$_GET['statecode'];
	//////////////////////////// Execute the python shell script and get the output to display as json \\\\\\\\\\\\\\\\\
	//echo " python HtRealTimeScrapper.py $statecode $location";
	$command=escapeshellcmd("python /users/nipunarora/Desktop/PHP/HtRealTimeScrapper.py $location $statecode");
	$output=shell_exec("/usr/bin/python 1.py $statecode $location");
	//$output=shell_exec("python ");
	echo $output;
}
else 
{
	echo "No location was sent";
}
?>