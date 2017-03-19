<?php
if ($_GET['location'])
{
	////////////////////////////Get Request parameters from the request Array\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
	$location=$_GET['location'];
	$statecode=$_GET['statecode'];
	//////////////////////////// Execute the python shell script and get the output to display as json \\\\\\\\\\\\\\\\\
	$output['Constituency']=shell_exec("/usr/bin/python 1.py $statecode $location");
	$json_response=json_encode($output,JSON_PRETTY_PRINT);
	header('Content-Type: application/json');
	echo $json_response;
}
else 
{
	echo "No location was sent";
}
?>