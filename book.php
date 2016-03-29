<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>
<body>

<?php 
 session_start(); 
 $newYear = $_POST['year'];
 $newMonth = $_POST['month'];
 $newDay = $_POST['day'];
 $newTime = $_POST['time'];


$host="localhost"; // Host name 
$username="user`"; // Mysql username 
$password="pass"; // Mysql password 
$db_name="database"; // Database name 
$tbl_name="appointments"; // Table name 



// Connect to server and select databse.
 mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
 mysql_select_db("$db_name")or die("cannot select DB");

$sql="INSERT INTO database.appointments (year, month, day, time) VALUES ('$newYear', '$newMonth', '$newDay', '$newTime');";
 $result=mysql_query($sql);
 echo "<center><table bgcolor=fcf4e3 valign=top><tr><td><font color=#800020>Appointment booked for $newTime on $newMonth $newDay, $newYear</font></td></tr></table></center>";
readfile("index.html");
?>

</body>
</html>