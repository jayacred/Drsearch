<html>
<title>CONN-DIAGONISTICS</title>
<body>
<?php

$diaogID = $_POST['diaogID'];

$dianame = $_POST['dianame'];

$diafacility = $_POST['diafacility'];
	
$diaservice = $_POST['diaservice'];
	
$diaprice = $_POST['diaprice'];
	
$dialocation = $_POST['dialocation'];

$drate = $_POST['drate'];

$prate= $_POST['prate'];

$conn = mysqli_connect("localhost","root","","drsearch");
if(!$conn )
{
 die('Could not connect: ' . mysql_error());
}
else
{
echo "Connected Successfully\n";
$result = mysqli_query($conn,"INSERT INTO adddiagonistics (diaogID,dianame,diafacility,diaservice,diaprice,dialocation,drate,prate) VALUES ('$diaogID','$dianame','$diafacility','$diaservice','$diaprice','$dialocation','$drate','$prate')");
if($result == false)
		{
			echo mysqli_error($conn);
			echo "Username Already Taken, Please try again, <a href='http://localhost/Drsearch/html/hospitaladmin.html'> Click here </a>";
		}
		else
		{
			echo "data entered into database&nbsp&nbsp&nbsp&nbspto add more diagonistic centers<a href='http://localhost/drsearch/html/diagonisticsadmin.html'> Click here </a>";
		}
}
?>
</body>
</html>