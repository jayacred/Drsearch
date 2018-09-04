<html>
<head>
<title>DIAGONISTICS.RETREIVE</title>
<link rel="stylesheet" href="http://localhost/Drsearch/html/RegisterUser.css"></link>
<table border="0" background="img/banner.jpg" width=100% height=20%></tbody><tr>
<td><h1 style="font:90px footlight MT light; text-align:center; color:black"</h1> DR SEARCH
</td></tr>
<table border="1"cellpadding="1"cellspacing="0"bgcolor="#82caff" height=10% width=100%  align=center ><tbody>
<tr>
<td onclick="location.href='../html/home.html'"align=center style="cursor:pointer;font:20px footlight MT light;">HOME</td>
<td onclick="location.href='../html/enquiry.html'"align=center style="cursor:pointer;font:20px footlight MT light;">ENQUIRY</td>
<td onclick="location.href='../html/doctors.html'"align=center style="cursor:pointer;font:20px footlight MT light;">DOCTORS</td>
<td onclick="location.href='../html/emergency dials.html'"align=center style="cursor:pointer;font:20px footlight MT light;">EMERGENCY DIALS</td>
<td onclick="location.href='../html/bloodbank.html'"align=center style="cursor:pointer;font:20px footlight MT light;">BLOODBANK</td>
<td onclick="location.href='../html/appointment.html'"align=center style="cursor:pointer;font:20px footlight MT light;">APPOINTMENT</td>
<td onclick="location.href='../html/diagonistics.html'"align=center style="cursor:pointer;font:20px footlight MT light;background-color:cyan;">DIAGONISTICS</td>
<td onclick="location.href='../html/about us.html'"align=center style="cursor:pointer;font:20px footlight MT light;">ABOUT US</td>
<td onclick="location.href='../html/help.php'"align=center style="cursor:pointer;font:20px footlight MT light;">HELP</td>
</tr>
</tbody>
</table>
</head>
<div style="position: relative; left: 90px; top: 50px;">
<body>
<style>
.hslider table
{
	box-shadow: 0 4px 8px rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);color:black;font-size:19px;background-color:#e0ffff;
	text-align:left; border-radius: .25em;
}
</style>
<?php

	$diafacility = $_POST['diafacility'];
echo'<link rel="stylesheet"type="text/css" href="http://localhost/drsearch/html/registeruser.css">'.'</link>';
	
$db = mysqli_connect("localhost","root","","drsearch");
if(mysqli_connect_errno())
	
{

echo "Operation Cannot be Completed!";
		
die('');
	
}

switch(0)
{
	case"affordable":
	$result = mysqli_query($db , "SELECT * FROM diagonistics WHERE diafacility='$diafacility'");

$count = 0;
	
if($result != null)
	
{
while($row = mysqli_fetch_array($result))
{ 

 echo'<table border="0" class="hslider" cellpadding="10"cellspacing="0"width=40% height=50% align=left>'.'<tr>'.'<td >'.
 '<table>'.'<tr>'.'<td>'.
 '<tr>'.'<td>'.'<b>'. "Hospital ID:".'</b>'."{$row['diaogID']} <br>". '</tr>'.  
 '<tr>'.'<td>'.'<b>'. "Hospital Name:".'</b>'." {$row['dianame']}<br>".'</tr>'.
   '<tr>'.'<td>'.'<b>'. "Hospital Name:".'</b>'." {$row['diafacility']}<br>".'</tr>'.
 '<tr>'.'<td>'.'<b>'. "Location:".'</b>'." {$row['diaservice']}<br>".'</tr>'.
 '<tr>'.'<td>'.'<b>'. "specialisations available:".'</b>'." {$row['diaprice']}<br>".'</tr>'.
 '<tr>'.'<td>'.'<b>'. "popular For:".'</b>'."{$row['dialocation']}<br>".'</tr>'.
 '<tr>'.'<td>'.'<b>'. "DR search rating".'</b>'." {$row['drate']}<br>".'</tr>'.
 '<tr>'.'<td>'.'<b>'. "AVG.Patient Rating:".'</b>'." {$row['prate']}<br>".'</tr>'.
 "<br>".'</td>'.'</tr>'.'</tbody>'.'</table>'.'</tr>'.'</td>'.'</tbody>'.'</table>';
}
}
else
{
		
echo "<p>Invalid details entered</p>";
		
header("Location :http://localhost/doctors.html");

}
/*echo "Fetched data successfully\n";*/
  break;
case"good":
	$result = mysqli_query($db , "SELECT * FROM adddiagonistics WHERE diafacility='$diafacility'");

$count = 0;
	
if($result != null)
	
{
while($row = mysqli_fetch_array($result))
{ 

echo'<table border="0" class="hslider" cellpadding="10"cellspacing="0"width=40% height=50% align=left>'.'<tr>'.'<td >'.
 '<table>'.'<tr>'.'<td>'.
 '<tr>'.'<td>'.'<b>'. "Hospital ID:".'</b>'."{$row['diaogID']} <br>". '</tr>'.  
 '<tr>'.'<td>'.'<b>'. "Hospital Name:".'</b>'." {$row['dianame']}<br>".'</tr>'.
  '<tr>'.'<td>'.'<b>'. "Hospital Name:".'</b>'." {$row['diafacility']}<br>".'</tr>'.
 '<tr>'.'<td>'.'<b>'. "Location:".'</b>'." {$row['diaservice']}<br>".'</tr>'.
 '<tr>'.'<td>'.'<b>'. "specialisations available:".'</b>'." {$row['diaprice']}<br>".'</tr>'.
 '<tr>'.'<td>'.'<b>'. "popular For:".'</b>'."{$row['dialocation']}<br>".'</tr>'.
 '<tr>'.'<td>'.'<b>'. "DR search rating".'</b>'." {$row['drate']}<br>".'</tr>'.
 '<tr>'.'<td>'.'<b>'. "AVG.Patient Rating:".'</b>'." {$row['prate']}<br>".'</tr>'.
 "<br>".'</td>'.'</tr>'.'</tbody>'.'</table>'.'</tr>'.'</td>'.'</tbody>'.'</table>';
}
}
else
{
		
echo "<p>Invalid details entered</p>";
		
header("Location :http://localhost/doctors.html");

}
  break;
case"high":
	$result = mysqli_query($db , "SELECT * FROM adddiagonistics WHERE diafacility='$diafacility'");

$count = 0;
	
if($result != null)
	
{
while($row = mysqli_fetch_array($result))
{ 

echo'<table border="0" class="hslider" cellpadding="10"cellspacing="0"width=40% height=50% align=left>'.'<tr>'.'<td >'.
 '<table>'.'<tr>'.'<td>'.
 '<tr>'.'<td>'.'<b>'. "Hospital ID:".'</b>'."{$row['diaogID']} <br>". '</tr>'.  
 '<tr>'.'<td>'.'<b>'. "Hospital Name:".'</b>'." {$row['dianame']}<br>".'</tr>'.
   '<tr>'.'<td>'.'<b>'. "Hospital Name:".'</b>'." {$row['diafacility']}<br>".'</tr>'.
 '<tr>'.'<td>'.'<b>'. "Location:".'</b>'." {$row['diaservice']}<br>".'</tr>'.
 '<tr>'.'<td>'.'<b>'. "specialisations available:".'</b>'." {$row['diaprice']}<br>".'</tr>'.
 '<tr>'.'<td>'.'<b>'. "popular For:".'</b>'."{$row['dialocation']}<br>".'</tr>'.
 '<tr>'.'<td>'.'<b>'. "DR search rating".'</b>'." {$row['drate']}<br>".'</tr>'.
 '<tr>'.'<td>'.'<b>'. "AVG.Patient Rating:".'</b>'." {$row['prate']}<br>".'</tr>'.
 "<br>".'</td>'.'</tr>'.'</tbody>'.'</table>'.'</tr>'.'</td>'.'</tbody>'.'</table>';
}
}
else
{
		
echo "<p>Invalid details entered</p>";
		
header("Location :http://localhost/doctors.html");
 break;
	
}
default:
	echo "select any valid selection";
	break;
}
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