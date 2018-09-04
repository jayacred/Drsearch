<html>
<title>CONN-DONOR</title>
<body>
<?php

$donorID= $_POST['donorID'];

$dname = $_POST['dname'];
	
$dgender = $_POST['dgender'];

$dage = $_POST['dage'];
	
$daadhar = $_POST['daadhar'];
	
$dbloodtype = $_POST['dbloodtype'];

$dplace= $_POST['dplace'];

$dcontact= $_POST['dcontact'];


$conn = mysqli_connect("localhost","root","","drsearch");
if(!$conn )
{
 die('Could not connect: ' . mysql_error());
}
else
{
echo "Connected Successfully\n";
$date=date("F j,Y,g:i a");
$result = mysqli_query($conn,"INSERT INTO donors (donorID,dname,dgender,dage,daadhar,dbloodtype,dplace,dcontact,date) VALUES ('$donorID','$dname','$dgender','$dage','$daadhar','$dbloodtype','$dplace','$dcontact','$date')");

if($result == false)
		{
			echo mysqli_error($conn);
			echo "donor name or donor ID  Already Taken or INVALID aadhaar number Please try again, <a href='http://localhost/drsearch/html/donor.html'> Click here </a>";
		}
		else
		{
			echo "data entered into database<a href='http://localhost/drsearch/html/donor.html'> Click here </a>";
		}
}
?>
</body>
</html>