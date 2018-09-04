<html>
<title>CONN-APPOINTMENT</title>
<body>
<?php

$name = $_POST['name'];
	
$aadhaar = $_POST['aadhaar'];
	

$conn = mysqli_connect("localhost","root","","drsearch");
if(!$conn )
{
 die('Could not connect: ' . mysql_error());
}
else
{
$date=date("F j,Y,g:i a");
echo "Connected Successfully\n";
$result = mysqli_query($conn,"DELETE FROM appointments WHERE name='$name'AND aadhaar='$aadhaar'");

if($result == false)
		{
			echo mysqli_error($conn);
			echo "sorry!! you are denied to cancel your appointment, Please try again, <a href='http://localhost/drsearch/html/deleteappointment.html'> Click here </a>";
		}
		else
		{
			echo "Your Appointment is Cancelled Successfully";
	
		}
}
?>
</body>
</html>