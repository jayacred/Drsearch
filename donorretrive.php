<html>
<head>
<script lang="text/javascript" src="http://localhost/ExpenseManager/RegisterUser.js"></script>
<!--<link rel="stylesheet" href="http://localhost/ExpenseManager/RegisterUser.css"></link>-->
<link rel="stylesheet" href="../css/dataretrive.css"></link>
<title>DONORS.RETRIVE</title>
<table border="0" background="img/table2.jpg" width=100% height=20%></tbody><tr>
<td><h1 style="font:90px footlight MT light; text-align:center; color:white"</h1> DR SEARCH:admin
</td></tr>
<body>
<table border="1"cellpadding="1"cellspacing="0"bgcolor="#82caff" height=10% width=100%  align=center ><tbody>
<tr>
<td onclick="location.href='../html/hospitaladmin.html'"align=center style="cursor:pointer;font:20px footlight MT light;">HOSPITALS</td>
<td onclick="location.href='../html/doctoradmin.html'"align=center style="cursor:pointer;font:20px footlight MT light">DOCTORS</td>
<td onclick="location.href='../html/bloodbankadmin.html'"align=center style="cursor:pointer;font:20px footlight MT light;background-color:cyan;">BLOODBANK</td>
<td onclick="location.href='../emergency dials.html'"align=center style="cursor:pointer;font:20px footlight MT light;">APPOINTMENTS</td>
<td onclick="location.href='../appointment.html'"align=center style="cursor:pointer;font:20px footlight MT light;">DIAGONASTIC CENTERS</td>
</tr>

<body>
<div style="position: relative; center: 90px; top: 50px;">

<?php

echo'<link rel="stylesheet"type="text/css" href="http://localhost/drsearch/html/registeruser.css">'.'</link>';	
$debug = false;
	
function dBug($msg)

{
		
global $debug;

if($debug)
echo "<p>Debug : $msg</p>";
	
}
	
$db = mysqli_connect("localhost","root","","drsearch");
if(mysqli_connect_errno())
	
{
dBug("Error Connecting to DB.");
		
echo "Operation Cannot be Completed!";
		
die('');
	
}
$result = mysqli_query($db , "SELECT * FROM donors");
	
//var_dump($result);

$count = 0;
	
if($result != null)
	
{
while($row = mysqli_fetch_array($result))
{ 

 echo'<table border="0"class="slider" cellpadding="0"cellspacing="10"width=33.3% height=50% align=left>'.'<tr>'.'<td>'.
 '<table>'.'<tr>'.'<td>'.
 '<tr>'.'<td>'.'<b>'."DONOR ID:".'</b>'."{$row['donorID']} <br>". '</tr>'.    
 '<tr>'.'<td>'.'<b>'."Name:".'</b>'."{$row['dname']}<br>". '</tr>'.
 '<tr>'.'<td>'.'<b>'."Gender:".'</b>'."{$row['dgender']}<br>". '</tr>'.
 '<tr>'.'<td>'.'<b>'."Donor aadhaar:".'</b>'."{$row['daadhar']}<br>". '</tr>'.
 '<tr>'.'<td>'.'<b>'."Donor blood type:".'</b>'."{$row['dbloodtype']}<br>". '</tr>'.
 '<tr>'.'<td>'.'<b>'."Place to deliver:".'</b>'."{$row['dplace']}<br>". '</tr>'.
 '<tr>'.'<td>'.'<b>'."Contact No:".'</b>'."{$row['dcontact']}<br>". '</tr>'.
 '<tr>'.'<td>'.'<b>'."Date:".'</b>'."{$row['date']}<br>". '</tr>'.
 '</td>'.'</tr>'.'</tbody>'.'</table>'.'</tr>'.'</td>'.'</tbody>'.'</table>';
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

