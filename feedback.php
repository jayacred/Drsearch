<?php
$name = $_POST['name'];

$emailaddress = $_POST['emailaddress'];
	
$message = $_POST['message'];

$conn = mysqli_connect("localhost","root","","drsearch");
if(!$conn )
{
 die('Could not connect: ' . mysql_error());
}
else
{
echo "Connected Successfully\n";
$date=date("F j,Y,g:i a");
$result = mysqli_query($conn,"INSERT INTO feedback(name,emailaddress,message,date) VALUES ('$name','$emailaddress','$message','$date')");

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