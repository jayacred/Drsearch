<html>
<title>CONN-BLOODBANK</title>
<body>
<?php

$bloodbankID = $_POST['bloodbankID'];

$name = $_POST['name'];
	
$address = $_POST['address'];
	
$ave = $_POST['ave'];
	
$bve = $_POST['bve'];

$ove= $_POST['ave'];

$abve= $_POST['abve'];

$a1ve= $_POST['a1ve'];

$b1ve= $_POST['b1ve'];

$o1ve= $_POST['o1ve'];

$ab1ve= $_POST['ab1ve'];

$bbg= $_POST['bbg'];

$contact= $_POST['contact'];

$conn = mysqli_connect("localhost","root","","drsearch");
if(!$conn )
{
 die('Could not connect: ' . mysql_error());
}
else
{
echo "Connected Successfully\n";
$result = mysqli_query($conn,"INSERT INTO addbloodbank (bloodbankID,name,address,ave,bve,ove,abve,a1ve,b1ve,o1ve,ab1ve,bbg,contact) VALUES ('$bloodbankID','$name','$address','$ave','$bve','$ove','$abve','$a1ve','$b1ve','$o1ve','$ab1ve','$bbg','$contact')");

if($result == false)
		{
			echo mysqli_error($conn);
			echo "bloodbankID Already Taken, Please try again, <a href='http://localhost/drsearch/html/addbloodbank.html'> Click here </a>";
		}
		else
		{
			echo "data entered into database,<a href='http://localhost/drsearch/html/addbloodbank.html'> Click here </a>to add a new bloodbank";
		}
}
?>
</body>
</html>