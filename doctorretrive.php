<html>
<head>
<script lang="text/javascript" src="http://localhost/ExpenseManager/RegisterUser.js"></script>
<!--<link rel="stylesheet" href="http://localhost/ExpenseManager/RegisterUser.css"></link>-->
<link rel="stylesheet" href="../css/dataretrive.css"></link>
<title>DOCTOR.RETRIVE</title>
<table border="0" background="img/banner.jpg" width=100% height=20%></tbody><tr>
<td><h1 style="font:90px footlight MT light; text-align:center; color:black"</h1> DR SEARCH
</td></tr>
</head>
<body>
<table border="1"cellpadding="1"cellspacing="0"bgcolor="#82caff" height=10% width=100%  align=center ><tbody>
<tr>
<td onclick="location.href='../html/home.html'"align=center style="cursor:pointer;font:20px footlight MT light;">HOME</td>
<td onclick="location.href='../html/enquiry.html'"align=center style="cursor:pointer;font:20px footlight MT light;">ENQUIRY</td>
<td onclick="location.href='../html/doctors.html'"align=center style="cursor:pointer;font:20px footlight MT light;background-color:cyan;">DOCTORS</td>
<td onclick="location.href='../html/emergency dials.html'"align=center style="cursor:pointer;font:20px footlight MT light;">EMERGENCY DIALS</td>
<td onclick="location.href='../html/appointment.html'"align=center style="cursor:pointer;font:20px footlight MT light;">APPOINTMENT</td>
<td onclick="location.href='../html/bloodbank.html'"align=center style="cursor:pointer;font:20px footlight MT light;">BLOODBANK</td>
<td onclick="location.href='../html/diagonistics.html'"align=center style="cursor:pointer;font:20px footlight MT light;">DIAGONISTICS</td>
<td onclick="location.href='../html/about us.html'"align=center style="cursor:pointer;font:20px footlight MT light;">ABOUT US</td>
<td onclick="location.href='../html/help.php'"align=center style="cursor:pointer;font:20px footlight MT light;">HELP</td>
</tr>

<body>
<style>
.hslider table
{
	box-shadow: 0 4px 8px rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);color:black;font-size:19px;background-color:yellow;
	text-align:left; border-radius: .25em;
}
</style>
<div style="position: relative; center: 90px; top: 50px;">

<?php
$specialisation = $_POST['specialisation'];

echo'<link rel="stylesheet"type="text/css" href="http://localhost/drsearch/html/registeruser.css">'.'</link>';

$db = mysqli_connect("localhost","root","","drsearch");
if(mysqli_connect_errno())	
{
		
echo "Operation Cannot be Completed!";
		
die('');
	
}
switch(0)
{
	case"cardiologist":
	$result = mysqli_query($db , "SELECT * FROM adddoctor WHERE specialisation='$specialisation'");
	if($result != null)
	
{
while($row = mysqli_fetch_array($result))
{ 

 echo'<table border="0" class="hslider" cellpadding="10"cellspacing="0"width=50% height=50% align=left>'.'<tr>'.'<td >'.
 '<table>'.'<tr>'.'<td>'.
 '<td>'.'<b>'. "Doctor ID:".'</b>'."{$row['docID']} <br>".
 '<b>'. "DoctorName:".'</b>'." {$row['name']}<br>".
 '<b>'. "Specialisation:".'</b>'." {$row['specialisation']}<br>".
 '<b>'. "Doctor Qualification:".'</b>'." {$row['qualify']}<br>".
 '<b>'. "Doctor Experience:".'</b>'."{$row['yearexp']}<br>".
 '<b>'. "Doctor Successrate:".'</b>'."{$row['success']}<br>".
 '<b>'. "Doctor Failures".'</b>'." {$row['fail']}<br>".
 '<b>'. "Available Timings".'</b>'." {$row['dtime1']}"."{$row['dam']}"."{$row['dtime2']}"."{$row['dpm']}<br>".
 '<b>'. "Consultation Fee".'</b>'." {$row['dfee']}<br>".
 '<b>'. "Doctor Contact".'</b>'." {$row['dcontact']}<br>".
 '<b>'. "Hospital:".'</b>'." {$row['hospital']}<br>".
 '<b>'. "Hospital Location:".'</b>'." {$row['hoslocation']}<br>".'</td>'.
  "<br>".'</td>'.'</tr>'.'</tbody>'.'</table>'.'</tr>'.'</td>'.'</tbody>'.'</table>';
}
}
else
{
		
echo "<p>Invalid details entered</p>";
		
header("Location :http://localhost/doctors.html");

}
	break;
	case"pulmonologist":
	$result = mysqli_query($db , "SELECT * FROM adddoctor WHERE specialisation='$specialisation'");
	if($result != null)
	
{
while($row = mysqli_fetch_array($result))
{ 


 echo'<table border="0" class="hslider" cellpadding="10"cellspacing="0"width=33.3% height=60% align=left>'.'<tr>'.'<td >'.
 '<table>'.'<tr>'.'<td>'.
 '<tr>'.'<td>'.'<b>'. "Doctor ID:".'</b>'."{$row['docID']} <br>".'</td>'.'</tr>'.  
 '<tr>'.'<td>'.'<b>'. "DoctorName:".'</b>'." {$row['name']}<br>".'</td>'.'</tr>'.
'<tr>'.'<td>'.'<b>'. "Specialisation:".'</b>'." {$row['specialisation']}<br>".'</td>'.'</tr>'.
'<tr>'.'<td>'.'<b>'. "Doctor Qualification:".'</b>'." {$row['qualify']}<br>".'</td>'.'</tr>'.
 '<tr>'.'<td>'.'<b>'. "Doctor Experience:".'</b>'."{$row['yearexp']}<br>".'</td>'.'</tr>'.
'<tr>'.'<td>'.'<b>'. "Doctor Successrate:".'</b>'."{$row['success']}<br>".'</td>'.'</tr>'.
'<tr>'.'<td>'.'<b>'. "Doctor Failures".'</b>'." {$row['fail']}<br>".'</td>'.'</tr>'.
'<tr>'.'<td>'.'<b>'. "Available Timings".'</b>'." {$row['dtime1']}"."{$row['dam']}"."to"."{$row['dtime2']}"."{$row['dpm']}<br>".'</td>'.'</tr>'.
'<tr>'.'<td>'.'<b>'. "Consultation Fee".'</b>'." {$row['dfee']}<br>".'</td>'.'</tr>'.
'<tr>'.'<td>'.'<b>'. "Doctor Contact".'</b>'." {$row['dcontact']}<br>".'</td>'.'</tr>'.
 '<tr>'.'<td>'.'<b>'. "Hospital:".'</b>'." {$row['hospital']}<br>".'</td>'.'</tr>'.
 '<tr>'.'<td>'.'<b>'. "Hospital Location:".'</b>'." {$row['hoslocation']}<br>".'</td>'.'</tr>'.
  "<br>".'</td>'.'</tr>'.'</tbody>'.'</table>'.'</tr>'.'</td>'.'</tbody>'.'</table>';
}
}
else
{
		
echo "<p>Invalid details entered</p>";
		
header("Location :http://localhost/doctors.html");

}
	break;
	case"opthamologist":
	$result = mysqli_query($db , "SELECT * FROM adddoctor WHERE specialisation='$specialisation'");
	if($result != null)
	
{
while($row = mysqli_fetch_array($result))
{ 


 echo'<table border="0" class="hslider" cellpadding="10"cellspacing="0"width=33.3% height=60% align=left>'.'<tr>'.'<td >'.
 '<table>'.'<tr>'.'<td>'.
 '<tr>'.'<td>'.'<b>'. "Doctor ID:".'</b>'."{$row['docID']} <br>". '</tr>'.  
 '<tr>'.'<td>'.'<b>'. "DoctorName:".'</b>'." {$row['name']}<br>".'</tr>'.
'<tr>'.'<td>'.'<b>'. "Specialisation:".'</b>'." {$row['specialisation']}<br>".'</tr>'.
'<tr>'.'<td>'.'<b>'. "Doctor Qualification:".'</b>'." {$row['qualify']}<br>".'</tr>'.
 '<tr>'.'<td>'.'<b>'. "Doctor Experience:".'</b>'."{$row['yearexp']}<br>".'</tr>'.
'<tr>'.'<td>'.'<b>'. "Doctor Successrate:".'</b>'."{$row['success']}<br>".'</tr>'.
'<tr>'.'<td>'.'<b>'. "Doctor Failures".'</b>'." {$row['fail']}<br>".'</tr>'.
'<tr>'.'<td>'.'<b>'. "Available Timings".'</b>'." {$row['dtime1']}"."{$row['dam']}"."{$row['dtime2']}"."{$row['dpm']}<br>".'</tr>'.
'<tr>'.'<td>'.'<b>'. "Consultation Fee".'</b>'." {$row['dfee']}<br>".'</tr>'.
'<tr>'.'<td>'.'<b>'. "Doctor Contact".'</b>'." {$row['dcontact']}<br>".'</tr>'.
 '<tr>'.'<td>'.'<b>'. "Hospital:".'</b>'." {$row['hospital']}<br>".'</tr>'.
 '<tr>'.'<td>'.'<b>'. "Hospital Location:".'</b>'." {$row['hoslocation']}<br>".'</tr>'.
  "<br>".'</td>'.'</tr>'.'</tbody>'.'</table>'.'</tr>'.'</td>'.'</tbody>'.'</table>';
}
}
else
{
		
echo "<p>Invalid details entered</p>";
		
header("Location :http://localhost/doctors.html");

}
    break;
	case"neurologist":
	$result = mysqli_query($db , "SELECT * FROM adddoctor WHERE specialisation='$specialisation'");
	if($result != null)
	
{
while($row = mysqli_fetch_array($result))
{ 

 
 echo'<table border="0" class="slider" cellpadding="10"cellspacing="0"width=33.3% height=60% align=left>'.'<tr>'.'<td >'.
 '<table>'.'<tr>'.'<td>'.
 '<tr>'.'<td>'.'<b>'. "Doctor ID:".'</b>'."{$row['docID']} <br>". '</tr>'.  
 '<tr>'.'<td>'.'<b>'. "DoctorName:".'</b>'." {$row['name']}<br>".'</tr>'.
'<tr>'.'<td>'.'<b>'. "Specialisation:".'</b>'." {$row['specialisation']}<br>".'</tr>'.
'<tr>'.'<td>'.'<b>'. "Doctor Qualification:".'</b>'." {$row['qualify']}<br>".'</tr>'.
 '<tr>'.'<td>'.'<b>'. "Doctor Experience:".'</b>'."{$row['yearexp']}<br>".'</tr>'.
'<tr>'.'<td>'.'<b>'. "Doctor Successrate:".'</b>'."{$row['success']}<br>".'</tr>'.
'<tr>'.'<td>'.'<b>'. "Doctor Failures".'</b>'." {$row['fail']}<br>".'</tr>'.
'<tr>'.'<td>'.'<b>'. "Available Timings".'</b>'." {$row['dtime1']}"."{$row['dam']}"."{$row['dtime2']}"."{$row['dpm']}<br>".'</tr>'.
'<tr>'.'<td>'.'<b>'. "Consultation Fee".'</b>'." {$row['dfee']}<br>".'</tr>'.
'<tr>'.'<td>'.'<b>'. "Doctor Contact".'</b>'." {$row['dcontact']}<br>".'</tr>'.
 '<tr>'.'<td>'.'<b>'. "Hospital:".'</b>'." {$row['hospital']}<br>".'</tr>'.
 '<tr>'.'<td>'.'<b>'. "Hospital Location:".'</b>'." {$row['hoslocation']}<br>".'</tr>'.
  "<br>".'</td>'.'</tr>'.'</tbody>'.'</table>'.'</tr>'.'</td>'.'</tbody>'.'</table>';
}
}
else
{
		
echo "<p>Invalid details entered</p>";
		
header("Location :http://localhost/doctors.html");

}
    break;
	case"nephrologist":
	$result = mysqli_query($db , "SELECT * FROM adddoctor WHERE specialisation='$specialisation'");
	if($result != null)
	
{
while($row = mysqli_fetch_array($result))
{ 

 
 echo'<table border="0" class="slider" cellpadding="10"cellspacing="0"width=33.3% height=60% align=left>'.'<tr>'.'<td >'.
 '<table>'.'<tr>'.'<td>'.
 '<tr>'.'<td>'.'<b>'. "Doctor ID:".'</b>'."{$row['docID']} <br>". '</tr>'.  
 '<tr>'.'<td>'.'<b>'. "DoctorName:".'</b>'." {$row['name']}<br>".'</tr>'.
'<tr>'.'<td>'.'<b>'. "Specialisation:".'</b>'." {$row['specialisation']}<br>".'</tr>'.
'<tr>'.'<td>'.'<b>'. "Doctor Qualification:".'</b>'." {$row['qualify']}<br>".'</tr>'.
 '<tr>'.'<td>'.'<b>'. "Doctor Experience:".'</b>'."{$row['yearexp']}<br>".'</tr>'.
'<tr>'.'<td>'.'<b>'. "Doctor Successrate:".'</b>'."{$row['success']}<br>".'</tr>'.
'<tr>'.'<td>'.'<b>'. "Doctor Failures".'</b>'." {$row['fail']}<br>".'</tr>'.
'<tr>'.'<td>'.'<b>'. "Available Timings".'</b>'." {$row['dtime1']}"."{$row['dam']}"."{$row['dtime2']}"."{$row['dpm']}<br>".'</tr>'.
'<tr>'.'<td>'.'<b>'. "Consultation Fee".'</b>'." {$row['dfee']}<br>".'</tr>'.
'<tr>'.'<td>'.'<b>'. "Doctor Contact".'</b>'." {$row['dcontact']}<br>".'</tr>'.
 '<tr>'.'<td>'.'<b>'. "Hospital:".'</b>'." {$row['hospital']}<br>".'</tr>'.
 '<tr>'.'<td>'.'<b>'. "Hospital Location:".'</b>'." {$row['hoslocation']}<br>".'</tr>'.
  "<br>".'</td>'.'</tr>'.'</tbody>'.'</table>'.'</tr>'.'</td>'.'</tbody>'.'</table>';
}
}
else
{
		
echo "<p>Invalid details entered</p>";
		
header("Location :http://localhost/doctors.html");

}
    break;
	case"gyneacologist":
	$result = mysqli_query($db , "SELECT * FROM adddoctor WHERE specialisation='$specialisation'");
	if($result != null)
	
{
while($row = mysqli_fetch_array($result))
{ 

 
 echo'<table border="0" class="slider" cellpadding="10"cellspacing="0"width=33.3% height=60% align=left>'.'<tr>'.'<td >'.
 '<table>'.'<tr>'.'<td>'.
 '<tr>'.'<td>'.'<b>'. "Doctor ID:".'</b>'."{$row['docID']} <br>". '</tr>'.  
 '<tr>'.'<td>'.'<b>'. "DoctorName:".'</b>'." {$row['name']}<br>".'</tr>'.
'<tr>'.'<td>'.'<b>'. "Specialisation:".'</b>'." {$row['specialisation']}<br>".'</tr>'.
'<tr>'.'<td>'.'<b>'. "Doctor Qualification:".'</b>'." {$row['qualify']}<br>".'</tr>'.
 '<tr>'.'<td>'.'<b>'. "Doctor Experience:".'</b>'."{$row['yearexp']}<br>".'</tr>'.
'<tr>'.'<td>'.'<b>'. "Doctor Successrate:".'</b>'."{$row['success']}<br>".'</tr>'.
'<tr>'.'<td>'.'<b>'. "Doctor Failures".'</b>'." {$row['fail']}<br>".'</tr>'.
'<tr>'.'<td>'.'<b>'. "Available Timings".'</b>'." {$row['dtime1']}"."{$row['dam']}"."{$row['dtime2']}"."{$row['dpm']}<br>".'</tr>'.
'<tr>'.'<td>'.'<b>'. "Consultation Fee".'</b>'." {$row['dfee']}<br>".'</tr>'.
'<tr>'.'<td>'.'<b>'. "Doctor Contact".'</b>'." {$row['dcontact']}<br>".'</tr>'.
 '<tr>'.'<td>'.'<b>'. "Hospital:".'</b>'." {$row['hospital']}<br>".'</tr>'.
 '<tr>'.'<td>'.'<b>'. "Hospital Location:".'</b>'." {$row['hoslocation']}<br>".'</tr>'.
  "<br>".'</td>'.'</tr>'.'</tbody>'.'</table>'.'</tr>'.'</td>'.'</tbody>'.'</table>';
}
}
else
{
		
echo "<p>Invalid details entered</p>";
		
header("Location :http://localhost/doctors.html");

}
    break;
	case"sexologist":
	$result = mysqli_query($db , "SELECT * FROM adddoctor WHERE specialisation='$specialisation'");
	if($result != null)
	
{
while($row = mysqli_fetch_array($result))
{ 

 
 echo'<table border="0" class="slider" cellpadding="10"cellspacing="0"width=33.3% height=60% align=left>'.'<tr>'.'<td >'.
 '<table>'.'<tr>'.'<td>'.
 '<tr>'.'<td>'.'<b>'. "Doctor ID:".'</b>'."{$row['docID']} <br>". '</tr>'.  
 '<tr>'.'<td>'.'<b>'. "DoctorName:".'</b>'." {$row['name']}<br>".'</tr>'.
'<tr>'.'<td>'.'<b>'. "Specialisation:".'</b>'." {$row['specialisation']}<br>".'</tr>'.
'<tr>'.'<td>'.'<b>'. "Doctor Qualification:".'</b>'." {$row['qualify']}<br>".'</tr>'.
 '<tr>'.'<td>'.'<b>'. "Doctor Experience:".'</b>'."{$row['yearexp']}<br>".'</tr>'.
'<tr>'.'<td>'.'<b>'. "Doctor Successrate:".'</b>'."{$row['success']}<br>".'</tr>'.
'<tr>'.'<td>'.'<b>'. "Doctor Failures".'</b>'." {$row['fail']}<br>".'</tr>'.
'<tr>'.'<td>'.'<b>'. "Available Timings".'</b>'." {$row['dtime1']}"."{$row['dam']}"."{$row['dtime2']}"."{$row['dpm']}<br>".'</tr>'.
'<tr>'.'<td>'.'<b>'. "Consultation Fee".'</b>'." {$row['dfee']}<br>".'</tr>'.
'<tr>'.'<td>'.'<b>'. "Doctor Contact".'</b>'." {$row['dcontact']}<br>".'</tr>'.
 '<tr>'.'<td>'.'<b>'. "Hospital:".'</b>'." {$row['hospital']}<br>".'</tr>'.
 '<tr>'.'<td>'.'<b>'. "Hospital Location:".'</b>'." {$row['hoslocation']}<br>".'</tr>'.
  "<br>".'</td>'.'</tr>'.'</tbody>'.'</table>'.'</tr>'.'</td>'.'</tbody>'.'</table>';
}
}
else
{
		
echo "<p>Invalid details entered</p>";
		
header("Location :http://localhost/doctors.html");

}
    break;
	case"radiologist":
	$result = mysqli_query($db , "SELECT * FROM adddoctor WHERE specialisation='$specialisation'");
	if($result != null)
	
{
while($row = mysqli_fetch_array($result))
{ 

 echo'<table border="0" class="slider" cellpadding="10"cellspacing="0"width=33.3% height=60% align=left>'.'<tr>'.'<td >'.
 '<table>'.'<tr>'.'<td>'.
 '<tr>'.'<td>'.'<b>'. "Doctor ID:".'</b>'."{$row['docID']} <br>". '</tr>'.  
 '<tr>'.'<td>'.'<b>'. "DoctorName:".'</b>'." {$row['name']}<br>".'</tr>'.
'<tr>'.'<td>'.'<b>'. "Specialisation:".'</b>'." {$row['specialisation']}<br>".'</tr>'.
'<tr>'.'<td>'.'<b>'. "Doctor Qualification:".'</b>'." {$row['qualify']}<br>".'</tr>'.
 '<tr>'.'<td>'.'<b>'. "Doctor Experience:".'</b>'."{$row['yearexp']}<br>".'</tr>'.
'<tr>'.'<td>'.'<b>'. "Doctor Successrate:".'</b>'."{$row['success']}<br>".'</tr>'.
'<tr>'.'<td>'.'<b>'. "Doctor Failures".'</b>'." {$row['fail']}<br>".'</tr>'.
'<tr>'.'<td>'.'<b>'. "Available Timings".'</b>'." {$row['dtime1']}"."{$row['dam']}"."{$row['dtime2']}"."{$row['dpm']}<br>".'</tr>'.
'<tr>'.'<td>'.'<b>'. "Consultation Fee".'</b>'." {$row['dfee']}<br>".'</tr>'.
'<tr>'.'<td>'.'<b>'. "Doctor Contact".'</b>'." {$row['dcontact']}<br>".'</tr>'.
 '<tr>'.'<td>'.'<b>'. "Hospital:".'</b>'." {$row['hospital']}<br>".'</tr>'.
 '<tr>'.'<td>'.'<b>'. "Hospital Location:".'</b>'." {$row['hoslocation']}<br>".'</tr>'.
  "<br>".'</td>'.'</tr>'.'</tbody>'.'</table>'.'</tr>'.'</td>'.'</tbody>'.'</table>';
}
}
else
{
		
echo "<p>Invalid details entered</p>";
		
header("Location :http://localhost/doctors.html");

}
    break;
	case"orthologist":
	$result = mysqli_query($db , "SELECT * FROM adddoctor WHERE specialisation='$specialisation'");
	if($result != null)
	
{
while($row = mysqli_fetch_array($result))
{ 

 
 echo'<table border="0" class="slider" cellpadding="10"cellspacing="0"width=33.3% height=60% align=left>'.'<tr>'.'<td >'.
 '<table>'.'<tr>'.'<td>'.
 '<tr>'.'<td>'.'<b>'. "Doctor ID:".'</b>'."{$row['docID']} <br>". '</tr>'.  
 '<tr>'.'<td>'.'<b>'. "DoctorName:".'</b>'." {$row['name']}<br>".'</tr>'.
'<tr>'.'<td>'.'<b>'. "Specialisation:".'</b>'." {$row['specialisation']}<br>".'</tr>'.
'<tr>'.'<td>'.'<b>'. "Doctor Qualification:".'</b>'." {$row['qualify']}<br>".'</tr>'.
 '<tr>'.'<td>'.'<b>'. "Doctor Experience:".'</b>'."{$row['yearexp']}<br>".'</tr>'.
'<tr>'.'<td>'.'<b>'. "Doctor Successrate:".'</b>'."{$row['success']}<br>".'</tr>'.
'<tr>'.'<td>'.'<b>'. "Doctor Failures".'</b>'." {$row['fail']}<br>".'</tr>'.
'<tr>'.'<td>'.'<b>'. "Available Timings".'</b>'." {$row['dtime1']}"."{$row['dam']}"."{$row['dtime2']}"."{$row['dpm']}<br>".'</tr>'.
'<tr>'.'<td>'.'<b>'. "Consultation Fee".'</b>'." {$row['dfee']}<br>".'</tr>'.
'<tr>'.'<td>'.'<b>'. "Doctor Contact".'</b>'." {$row['dcontact']}<br>".'</tr>'.
 '<tr>'.'<td>'.'<b>'. "Hospital:".'</b>'." {$row['hospital']}<br>".'</tr>'.
 '<tr>'.'<td>'.'<b>'. "Hospital Location:".'</b>'." {$row['hoslocation']}<br>".'</tr>'.
  "<br>".'</td>'.'</tr>'.'</tbody>'.'</table>'.'</tr>'.'</td>'.'</tbody>'.'</table>';
}
}
else
{
		
echo "<p>Invalid details entered</p>";
		
header("Location :http://localhost/doctors.html");

}
    break;
	case"psychologist":
	$result = mysqli_query($db , "SELECT * FROM adddoctor WHERE specialisation='$specialisation'");
	if($result != null)
	
{
while($row = mysqli_fetch_array($result))
{ 


 echo'<table border="0" class="slider" cellpadding="10"cellspacing="0"width=33.3% height=60% align=left>'.'<tr>'.'<td >'.
 '<table>'.'<tr>'.'<td>'.
 '<tr>'.'<td>'.'<b>'. "Doctor ID:".'</b>'."{$row['docID']} <br>". '</tr>'.  
 '<tr>'.'<td>'.'<b>'. "DoctorName:".'</b>'." {$row['name']}<br>".'</tr>'.
'<tr>'.'<td>'.'<b>'. "Specialisation:".'</b>'." {$row['specialisation']}<br>".'</tr>'.
'<tr>'.'<td>'.'<b>'. "Doctor Qualification:".'</b>'." {$row['qualify']}<br>".'</tr>'.
 '<tr>'.'<td>'.'<b>'. "Doctor Experience:".'</b>'."{$row['yearexp']}<br>".'</tr>'.
'<tr>'.'<td>'.'<b>'. "Doctor Successrate:".'</b>'."{$row['success']}<br>".'</tr>'.
'<tr>'.'<td>'.'<b>'. "Doctor Failures".'</b>'." {$row['fail']}<br>".'</tr>'.
'<tr>'.'<td>'.'<b>'. "Available Timings".'</b>'." {$row['dtime1']}"."{$row['dam']}"."{$row['dtime2']}"."{$row['dpm']}<br>".'</tr>'.
'<tr>'.'<td>'.'<b>'. "Consultation Fee".'</b>'." {$row['dfee']}<br>".'</tr>'.
'<tr>'.'<td>'.'<b>'. "Doctor Contact".'</b>'." {$row['dcontact']}<br>".'</tr>'.
 '<tr>'.'<td>'.'<b>'. "Hospital:".'</b>'." {$row['hospital']}<br>".'</tr>'.
 '<tr>'.'<td>'.'<b>'. "Hospital Location:".'</b>'." {$row['hoslocation']}<br>".'</tr>'.
  "<br>".'</td>'.'</tr>'.'</tbody>'.'</table>'.'</tr>'.'</td>'.'</tbody>'.'</table>';
}
}
else
{
		
echo "<p>Invalid details entered</p>";
		
header("Location :http://localhost/doctors.html");

}
    break;
	case"paediatrician":
	$result = mysqli_query($db , "SELECT * FROM adddoctor WHERE specialisation='$specialisation'");
	if($result != null)
	
{
while($row = mysqli_fetch_array($result))
{ 


 echo'<table border="0" class="slider" cellpadding="10"cellspacing="0"width=33.3% height=60% align=left>'.'<tr>'.'<td >'.
 '<table>'.'<tr>'.'<td>'.
 '<tr>'.'<td>'.'<b>'. "Doctor ID:".'</b>'."{$row['docID']} <br>". '</tr>'.  
 '<tr>'.'<td>'.'<b>'. "DoctorName:".'</b>'." {$row['name']}<br>".'</tr>'.
'<tr>'.'<td>'.'<b>'. "Specialisation:".'</b>'." {$row['specialisation']}<br>".'</tr>'.
'<tr>'.'<td>'.'<b>'. "Doctor Qualification:".'</b>'." {$row['qualify']}<br>".'</tr>'.
 '<tr>'.'<td>'.'<b>'. "Doctor Experience:".'</b>'."{$row['yearexp']}<br>".'</tr>'.
'<tr>'.'<td>'.'<b>'. "Doctor Successrate:".'</b>'."{$row['success']}<br>".'</tr>'.
'<tr>'.'<td>'.'<b>'. "Doctor Failures".'</b>'." {$row['fail']}<br>".'</tr>'.
'<tr>'.'<td>'.'<b>'. "Available Timings".'</b>'." {$row['dtime1']}"."{$row['dam']}"."{$row['dtime2']}"."{$row['dpm']}<br>".'</tr>'.
'<tr>'.'<td>'.'<b>'. "Consultation Fee".'</b>'." {$row['dfee']}<br>".'</tr>'.
'<tr>'.'<td>'.'<b>'. "Doctor Contact".'</b>'." {$row['dcontact']}<br>".'</tr>'.
 '<tr>'.'<td>'.'<b>'. "Hospital:".'</b>'." {$row['hospital']}<br>".'</tr>'.
 '<tr>'.'<td>'.'<b>'. "Hospital Location:".'</b>'." {$row['hoslocation']}<br>".'</tr>'.
  "<br>".'</td>'.'</tr>'.'</tbody>'.'</table>'.'</tr>'.'</td>'.'</tbody>'.'</table>';
}
}
else
{
		
echo "<p>Invalid details entered</p>";
		
header("Location :http://localhost/doctors.html");

}
    break;
	default;
	echo "select any valid selection";
	break;
}
	
//var_dump($result);

$count = 0;
	

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

