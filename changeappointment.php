<html>
<title>CHANGE-APPOINTMENT</title>
<body>
<?php

$name = $_POST['name'];
	
$gender = $_POST['gender'];

$age = $_POST['age'];

$aadhaar = $_POST['aadhaar'];
	
$location = $_POST['location'];
	
$specialisation = $_POST['specialisation'];
	
$doctorname = $_POST['doctorname'];

$dapp = $_POST['dapp'];

$appno = 0001;

while($appno!=0)
{
	$appno++;
	break;
}
$appno++;

$conn = mysqli_connect("localhost","root","","drsearch");
if(!$conn )
{
 die('Could not connect: ' . mysql_error());
}
else 
{
$date=date("F j,Y,g:i a");
echo "Connected Successfully\n";
$result = mysqli_query($conn,"UPDATE appointments SET name='$name',gender='$gender',age='$age',aadhaar='$aadhaar',location='$location',specialisation='$specialisation',doctorname='$doctorname',dapp='$dapp',date='$date'WHERE name='$name'");

if($result == false)
		{
			echo mysqli_error($conn);
			echo " Already Taken, Please try again, <a href='http://localhost/admin.html'> Click here </a>";
		}
		else
		{
			echo "your appointment is updated successfully";
		}
}
?>
</body>
</html>