<html>
<head>
<script lang="text/javascript" src="http://localhost/ExpenseManager/RegisterUser.js"></script>
<!--<link rel="stylesheet" href="http://localhost/ExpenseManager/RegisterUser.css"></link>-->
<link rel="stylesheet" href="../css/dataretrive.css"></link>
<title>BLOODBANK.RETRIVE</title>
<table border="0" background="img/banner.jpg" width=100% height=20%></tbody><tr>
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
<td onclick="location.href='../html/appointment.html'"align=center style="cursor:pointer;font:20px footlight MT light;">APPOINTMENT</td>
<td onclick="location.href='../html/bloodbank.html'"align=center style="cursor:pointer;font:20px footlight MT light;background-color:cyan;">BLOODBANK</td>
<td onclick="location.href='../html/diagonistics.html'"align=center style="cursor:pointer;font:20px footlight MT light;">DIAGONISTICS</td>
<td onclick="location.href='../html/about us.html'"align=center style="cursor:pointer;font:20px footlight MT light;">ABOUT US</td>
<td onclick="location.href='../html/help.html'"align=center style="cursor:pointer;font:20px footlight MT light;">HELP</td>
</tr>
<style>
.hslider table
{
	box-shadow: 0 4px 8px rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);color:black;font-size:19px;background-color:#e0ffff;
	text-align:left; border-radius: .25em;
}
</style>
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
$result = mysqli_query($db , "SELECT * FROM addbloodbank");
	
//var_dump($result);

$count = 0;
	
if($result != null)
	
{
while($row = mysqli_fetch_array($result))
{ 
 echo'<table border="0" class="hslider" cellpadding="10"cellspacing="0"width=50% height=50% align=left>'.'<tr>'.'<td >'.
 '<table>'.'<tr>'.'<td>'.
 '<tr>'.'<td>'.'<b>'."BloodBank ID:".'</b>'." {$row['bloodbankID']} <br>".'</tr>'.    
 '<tr>'.'<td>'.'<b>'."name:".'</b>'." {$row['name']}<br>".'</tr>'.
 '<tr>'.'<td>'.'<b>'."address:".'</b>'." {$row['address']}<br>".'</tr>'.
 '<tr>'.'<td>'.'<b>'."A+ve:".'</b>'." {$row['ave']}<br>".'</tr>'.
 '<tr>'.'<td>'.'<b>'."B+ve:".'</b>'."{$row['bve']}<br>".'</tr>'.
 '<tr>'.'<td>'.'<b>'."O+ve:".'</b>'." {$row['ove']}<br>".'</tr>'.
 '<tr>'.'<td>'.'<b>'."AB+ve:".'</b>'." {$row['abve']}<br>".'</tr>'.
 '<tr>'.'<td>'.'<b>'."A-ve:".'</b>'." {$row['a1ve']}<br>".'</tr>'.
 '<tr>'.'<td>'.'<b>'."B-ve:".'</b>'." {$row['b1ve']}<br>".'</tr>'.
 '<tr>'.'<td>'.'<b>'."O-ve:".'</b>'." {$row['o1ve']}<br>".'</tr>'.
 '<tr>'.'<td>'.'<b>'."AB-VE:".'</b>'." {$row['ab1ve']}<br>".'</tr>'.
 '<tr>'.'<td>'.'<b>'."Bombay Bloodgroup:".'</b>'." {$row['bbg']}<br>".'</tr>'.
 '<tr>'.'<td>'.'<b>'."contact No:".'</b>'." {$row['contact']}<br>".'</tr>'.
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

