<html>
<title>CONN-DOCTOR</title>
<body>
<?php

$docID = $_POST['docID'];

$name = $_POST['name'];
	
$specialisation = $_POST['specialisation'];
	
$qualify = $_POST['qualify'];
	
$yearexp = $_POST['yearexp'];
	
$success = $_POST['success'];

$fail = $_POST['fail'];

$dtime1 = $_POST['dtime1'];

$dam = $_POST['dam'];

$dtime2 = $_POST['dtime2'];

$dpm = $_POST['dpm'];

$dfee = $_POST['dfee'];

$dcontact = $_POST['dcontact'];

$hospital = $_POST['hospital'];

$hoslocation = $_POST['hoslocation'];


$conn = mysqli_connect("localhost","root","","drsearch");
if(!$conn )
{
 die('Could not connect: ' . mysql_error());
}
else
{
echo "Connected Successfully\n";
$result = mysqli_query($conn,"INSERT INTO adddoctor (docID,name,specialisation,qualify,yearexp,success,fail,dtime1,dam,dtime2,dpm,dfee,dcontact,hospital,hoslocation) VALUES ('$docID','$name','$specialisation','$qualify','$yearexp','$success','$fail','$dtime1','$dam','$dtime2','$dpm','$dfee','$dcontact','$hospital','$hoslocation')");

if($result == false)
		{
			echo mysqli_error($conn);
			echo "Username Already Taken, Please try again, <a href='http://localhost/drsearch/html/doctoradmin.html'> Click here </a>";
		}
		else
		{
			echo "data entered into database to enter another doctor please... <a href='http://localhost/drsearch/html/doctoradmin.html'>click here</a>";
		}
}
?>
</body>
</html>