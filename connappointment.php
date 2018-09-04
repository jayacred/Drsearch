<html>
<title>CONN-APPOINTMENT</title>
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

$appno =0;
for($i=1;$i<=100;$i++)
{ 
   
	$i=$appno;
	break;
	$appno++;
}


$conn = mysqli_connect("localhost","root","","drsearch");
if(!$conn )
{
 die('Could not connect: ' . mysql_error());
}
else
{
$date=date("F j,Y,g:i a");
echo "Connected Successfully\n";
$result = mysqli_query($conn,"INSERT INTO appointments (name,gender,age,aadhaar,location,specialisation,doctorname,dapp,date) VALUES ('$name','$gender','$age','$aadhaar','$location','$specialisation','$doctorname','$dapp','$date')");

if($result == false)
		{
			echo mysqli_error($conn);
			echo "aadhaar no:  Already Taken, Please try again, <a href='http://localhost/Drsearch/html/appointment.html'> Click here </a>";
		}
		else
		{
			echo "appointment fixed with&nbsp&nbsp".$doctorname."&nbsp&nbspon".$dapp."at&nbsp&nbspapollo hospitals<br>";
			echo"your appointment number is DRS17APP".$appno." <a href='http://localhost/Drsearch/html/appointment.html'> Back </a>";
		}
}
?>
</body>
</html>