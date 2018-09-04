<html>
<title>CONN-RECIPIENT</title>
<body>
<?php

$recipientID= $_POST['recipientID'];

$rname = $_POST['rname'];
	
$rgender = $_POST['rgender'];
	
$raadhar = $_POST['raadhar'];
	
$rbloodtype = $_POST['rbloodtype'];

$units= $_POST['units'];

$rplace= $_POST['rplace'];



$conn = mysqli_connect("localhost","root","","drsearch");
if(!$conn )
{
 die('Could not connect: ' . mysql_error());
}
else
{
echo "Connected Successfully\n";
$date=date("F j,Y,g:i a");
$result = mysqli_query($conn,"INSERT INTO recipients (recipientID,rname,rgender,raadhar,rbloodtype,units,rplace,date) VALUES ('$recipientID','$rname','$rgender','$raadhar','$rbloodtype','$units','$rplace','$date')");

if($result == false)
		{
			echo mysqli_error($conn);
			echo "Username Already Taken, Please try again, <a href='http://localhost/admin.html'> Click here </a>";
		}
		else
		{
			echo "data entered into database";
		}
}
?>
</body>
</html>