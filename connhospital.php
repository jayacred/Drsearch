<html>
<title>CONN-HOSPITAL</title>
<body>
<?php

$hosID = $_POST['hosID'];

$hosname = $_POST['hosname'];
	
$hoslocal = $_POST['hoslocal'];
	
$hosspecial = $_POST['hosspecial'];
	
$popfor = $_POST['popfor'];
	
$facility = $_POST['facility'];

$drate = $_POST['drate'];

$prate= $_POST['prate'];

$hcontact= $_POST['hcontact'];

$hosimage= $_POST['hosimage'];


$conn = mysqli_connect("localhost","root","","drsearch");
if(!$conn )
{
 die('Could not connect: ' . mysql_error());
}
else
{
echo "Connected Successfully\n";
$result = mysqli_query($conn,"INSERT INTO addhospital (hosID,hosname,hoslocal,hosspecial,popfor,facility,drate,prate,hcontact,hosimage) VALUES ('$hosID','$hosname','$hoslocal','$hosspecial','$popfor','$facility','$drate','$prate','$hcontact','$hosimage')");
if($result == false)
		{
			echo mysqli_error($conn);
			echo "Username Already Taken, Please try again, <a href='http://localhost/drsearch/html/hospitaladmin.html'> Click here </a>";
		}
		else
		{
			echo "data entered into database";
		}
}
?>
</body>
</html>