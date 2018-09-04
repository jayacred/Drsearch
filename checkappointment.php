<html>
<head>
<script lang="text/javascript" src="http://localhost/ExpenseManager/RegisterUser.js"></script>
<!--<link rel="stylesheet" href="http://localhost/ExpenseManager/RegisterUser.css"></link>-->
<link rel="stylesheet" href="../css/dataretrive.css"></link>
<title>CHECK.APPOINTMENT</title>
<table border="0" background="./img/tback.jpg" width=100% height=20%></tbody><tr>
<td><h1 style="font:90px footlight MT light; text-align:center; color:black"</h1> DR SEARCH
</td></tr>
</head>
<body>
<table border="1"cellpadding="1"cellspacing="0"bgcolor="#82caff" height=10% width=100%  align=center ><tbody>
<tr>
<td onclick="location.href='../html/home.html'"align=center style="cursor:pointer;font:20px footlight MT light;">HOME</td>
<td onclick="location.href='../html/enquiry.html'"align=center style="cursor:pointer;font:20px footlight MT light;">ENQUIRY</td>
<td onclick="location.href='../html/doctors.html'"align=center style="cursor:pointer;font:20px footlight MT light;">DOCTORS</td>
<td onclick="location.href='../html/emergency dials.html'"align=center style="cursor:pointer;font:20px footlight MT light;">EMERGENCY DIALS</td>
<td onclick="location.href='../html/appointment.html'"align=center style="cursor:pointer;font:20px footlight MT light;background-color:cyan;">APPOINTMENT</td>
<td onclick="location.href='../html/bloodbank.html'"align=center style="cursor:pointer;font:20px footlight MT light;">BLOODBANK</td>
<td onclick="location.href='../html/diagonistics.html'"align=center style="cursor:pointer;font:20px footlight MT light;">DIAGONISTICS</td>
<td onclick="location.href='../html/about us.html'"align=center style="cursor:pointer;font:20px footlight MT light;">ABOUT US</td>
<td onclick="location.href='../html/help.html'"align=center style="cursor:pointer;font:20px footlight MT light;">HELP</td>
</tr>

<body>
<div style="position: relative; center: 90px; top: 50px;">
<style>
.hslider table
{
	box-shadow: 0 4px 8px rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);color:black;font-size:19px;background-color:#e0ffff;
	text-align:left; border-radius: .25em;
}
</style>

<?php

echo'<link rel="stylesheet"type="text/css" href="http://localhost/drsearch/html/registeruser.css">'.'</link>';	
$name =  $_GET['name'];

$aadhaar =  $_GET['aadhaar'];
	
$db = mysqli_connect("localhost","root","","drsearch");
if(mysqli_connect_errno())
	
{
dBug("Error Connecting to DB.");
		
echo "Operation Cannot be Completed!";
		
die('');
	
}
$result = mysqli_query($db , "SELECT * FROM appointments WHERE name='$name'AND aadhaar='$aadhaar' ");
	
//var_dump($result);

$count = 0;
	
if($result != null)
	
{
while($row = mysqli_fetch_array($result))
{ 

 echo'<table border="0" class="hslider" cellpadding="10"cellspacing="0"width=40% height=50% align=left>'.'<tr>'.'<td >'.
 '<table>'.'<tr>'.'<td>'.
 '<tr>'.'<td>'.'<b>'."name:".'</b>'."{$row['name']}<br>".'</tr>'. 
 '<tr>'.'<td>'.'<b>'."Gender:".'</b>'. "{$row['gender']}<br>".'</tr>'. 
 '<tr>'.'<td>'.'<b>'."Age:".'</b>'. "{$row['age']}<br>".'</tr>'. 
 '<tr>'.'<td>'.'<b>'."Aaadhaar no:".'</b>'."{$row['aadhaar']}<br>".'</tr>'. 
 '<tr>'.'<td>'.'<b>'."location:".'</b>'. "{$row['location']}<br>".'</tr>'. 
 '<tr>'.'<td>'.'<b>'."Doctorname:".'</b>'. "{$row['doctorname']}<br>".'</tr>'. 
 '<tr>'.'<td>'.'<b>'."specialisation:".'</b>'. "{$row['specialisation']}<br>".'</tr>'. 
 '<tr>'.'<td>'.'<b>'."Date of Appointment:".'</b>'."{$row['dapp']}<br>".'</tr>'
 .'</td>'.'</tr>'.'</tbody>'.'</table>'.'</tr>'.'</td>'.'</tbody>'.'</table>';
}
}
else
{
		
echo "<p>Invalid details entered</p>";
		
header("Location :http://localhost/doctors.html");

}
/*echo "Fetched data successfully\n";*/


?>
</div>
<table  width=100% border="0"  cellpadding=10px cellspacing="0">
<tr class="layout4">
<td  align="center" width="100%" colspan="3"> 
  Privacy policy | Terms
  <center> 
    <small>Copyright © 2017  DrSearch  All Rights Reserved. | English| Hindi | conditions Apply. </small>  </br>
	<small>DUPLICATION or illegal use of use of the website are strictly prosecuted..... </small> 
	
	
  </center>
</br>  
  </td> 
  </tr>
</table>
</body>
</html>

