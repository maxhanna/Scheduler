<?php
	session_start(); 
	$newYear = htmlspecialchars($_GET["theYear"]);
	$newMonth = htmlspecialchars($_GET["theMonth"]);
	$newDay = htmlspecialchars($_GET["theDay"]);


	$host="localhost"; // Host name 
	$username="user"; // Mysql username 
	$password="pass"; // Mysql password 
	$db_name="database"; // Database name 
	$tbl_name="appointments"; // Table name 



	// Connect to server and select databse.
	mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
	mysql_select_db("$db_name")or die("cannot select DB");

	$sql="SELECT * FROM database.appointments WHERE year='$newYear' AND month='$newMonth' AND day='$newDay' ORDER BY time";
	$result=mysql_query($sql);
	$num=mysql_num_rows($result);
	if ($num > 0)
	{
		echo "<TABLE>";
		while($rs=mysql_fetch_array($result))
		{
			
			echo '<tr><td>'.$rs["time"].'</td></tr>';
		}
		echo '</table>';	
	}
	else
	{
		echo 'No Appointments';	
	}
	mysql_close();

?>

<html>
<head>

</head>
<body bgcolor=fcf4e3>
<div id=content></div>

</body>
</html>
