<html>
<head>
<script lang="text/javascript" src="http://localhost/ExpenseManager/RegisterUser.js"></script>
<!--<link rel="stylesheet" href="http://localhost/ExpenseManager/RegisterUser.css"></link>-->
<link rel="stylesheet" href="../css/dataretrive.css"></link>
<title>APPOINTMENT.RETRIVE</title>
<table border="0" background="img/banner.jpg" width=100% height=20%></tbody><tr>
<td><h1 style="font:90px footlight MT light; text-align:center; color:black"</h1> DR SEARCH
</td></tr>
</head>
<body>
<table border="1"cellpadding="1"cellspacing="0"bgcolor="#82caff" height=10% width=100%  align=center ><tbody>
<tr>
<td onclick="location.href='../html/hospitaladmin.html'"align=center style="cursor:pointer;font:20px footlight MT light;">HOSPITALS</td>
<td onclick="location.href='../html/doctoradmin.html'"align=center style="cursor:pointer;font:20px footlight MT light">DOCTORS</td>
<td onclick="location.href='../html/bloodbankadmin.html'"align=center style="cursor:pointer;font:20px footlight MT light;">BLOODBANK</td>
<td onclick="location.href='http://localhost/drsearch/html/appointmentretrive.php'"align=center style="cursor:pointer;font:20px footlight MT light;background-color:cyan;">APPOINTMENTS</td>
<td onclick="location.href='http://localhost/drsearch/html/diagonisticadmin.html'"align=center style="cursor:pointer;font:20px footlight MT light;">DIAGONASTIC CENTERS</td>
</tr>
<body>
<div style="position: relative; center: 90px; top: 50px;">

<?php

echo'<link rel="stylesheet"type="text/css" href="http://localhost/drsearch/html/registeruser.css">'.'</link>';	
	
$db = mysqli_connect("localhost","root","","drsearch");
if(mysqli_connect_errno())
	
{
		
echo "Operation Cannot be Completed!";
		
die('');
	
}
$result = mysqli_query($db , "SELECT * FROM appointments");
	
//var_dump($result);

$count = 0;
	
if($result != null)
	
{
while($row = mysqli_fetch_array($result))
{ 

 echo'<table border="0"class="slider" cellpadding="0"cellspacing="5"  width=50% height=50% align=left>'.'<tr>'.'<td>'.
 '<table>'.'<tr >'.'<td>'.
  '<tr>'.'<td>'.'<b>'."Name:".'</b>'." {$row['name']} <br>". '</tr>'.      
  '<tr>'.'<td>'.'<b>'."Gender:".'</b>'." {$row['gender']}<br>".'</tr>'.
  '<tr>'.'<td>'.'<b>'."Aadhaaar no:".'</b>'." {$row['aadhaar']}<br>".'</tr>'.
  '<tr>'.'<td>'.'<b>'."Location:".'</b>'." {$row['location']}<br>".'</tr>'.
  '<tr>'.'<td>'.'<b>'."Specialisation:".'</b>'."{$row['specialisation']}<br>".'</tr>'.
  '<tr>'.'<td>'.'<b>'."doctorname:".'</b>'." {$row['doctorname']}<br>".'</tr>'.
  '<tr>'.'<td>'.'<b>'."Date of appointment:".'</b>'." {$row['dapp']}<br>".'</tr>'.
  '<tr>'.'<td>'.'<b>'."fixed on:".'</b>'." {$row['date']}<br>".'</tr>'.
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

