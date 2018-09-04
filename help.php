<html>
<head>
<script lang="text/javascript" src="http://localhost/ExpenseManager/RegisterUser.js"></script>
<link rel="stylesheet" href="http://localhost/ExpenseManager/RegisterUser.css"></link>
<link rel="stylesheet" href="./css/style.css">
<title>HELP</title>
<table border="0" background="img/banner.jpg" width=100% height=20%></tbody><tr>
<td><h1 style="font:90px footlight MT light; text-align:center; color:black"</h1> DR SEARCH
</td></tr>
<style>
 .hover 
 td:hover{color:black;background-color:white;}
 </style>
<table class="hover"border="0"cellpadding="1"cellspacing="0"bgcolor="#82caff" height=10% width=100%  align=center class="menubar"><tbody>
<tr>
<td onclick="location.href='../html/home.html'"align=center style="cursor:pointer;font:20px footlight MT light;">HOME</td>
<td onclick="location.href='../html/enquiry.html'"align=center style="cursor:pointer;font:20px footlight MT light;">ENQUIRY</td>
<td onclick="location.href='../html/doctors.html'"align=center style="cursor:pointer;font:20px footlight MT light;">DOCTORS</td>
<td onclick="location.href='../html/emergency dials.html'"align=center style="cursor:pointer;font:20px footlight MT light;">EMERGENCY DIALS</td>
<td onclick="location.href='../html/appointment.html'"align=center style="cursor:pointer;font:20px footlight MT light;">APPOINTMENT</td>
<td onclick="location.href='../html/bloodbank.html'"align=center style="cursor:pointer;font:20px footlight MT light;">BLOODBANK</td>
<td onclick="location.href='../html/diagonistics.html'"align=center style="cursor:pointer;font:20px footlight MT light;">DIAGONISTICS</td>
<td onclick="location.href='../html/about us.html'"align=center style="cursor:pointer;font:20px footlight MT light;">ABOUT US</td>
<td onclick="location.href='../html/help.html'"align=center style="cursor:pointer;font:20px footlight MT light;background-color:cyan;">HELP</td>
</tr>
</tbody>
</table>
</head>
<body>
<?php
$db = mysqli_connect("localhost","root","","drsearch");
if(mysqli_connect_errno())
	
{
		
echo "Operation Cannot be Completed!";
		
die('');
	
}
$result = mysqli_query($db , "SELECT * FROM feedback");
echo'<link rel="stylesheet"type="text/css" href="http://localhost/drsearch/html/registeruser.css">'.'</link>';
	
//var_dump($result);


	
if($result != null)
	
{
while($row = mysqli_fetch_array($result))
{ 
 
 echo'<table border="0"cellpadding="0"cellspacing="0"width=70% height=50% align=center>'.'<tr>'.'<td class="feedback">'.
 '<table>'.'<tr>'.'<td>'.
 '<tr>'.'<td>'.'<img src="img/doctor.jpg"width="150"height="150">'.'<br>'.  
 '<td>'.'<b>'."name:".'</b>'." {$row['name']}".'<br>'.   
 '<b>'."emailaddress:".'</b>'."{$row['emailaddress']}".'<br>'.
 '<b>'."message:".'</b>'." {$row['message']}<br>".
 '<b>'."date:".'</b>'." {$row['date']}<br>".'</td>'.
 '<br>'.'</td>'.'</tr>'.'</tbody>'.'</table>'.'</tr>'.'</td>'.'</tbody>'.'</table>';
}
}
else
{
		
echo "<p>Invalid details entered</p>";
		

}
?>

<table border="0"cellpadding="1"cellspacing="0"height=50% width=50% align=center>
<tbody>
<form action="./feedback.php" method="post" id="sendemail">
             
               
               <tr><td><b><label for="name">Name (required)</label></b></td>
                <td><input id="name" name="name" size="40" class="txtbox" /></td><br></tr>
               
               
                <tr><td><b><label for="email">Email Address (required)</label></b></td>
                <td><input id="emailaddress" name="emailaddress" size="40" class="txtbox" /></td><br></tr>
                            
               
                <tr><td><b><label for="message">Your Message</label></b></td>
                <td><textarea id="message" name="message"class="txtbox" rows="8" cols="39"></textarea></td><br></tr>
               
                <tr><td></td><td><input type="submit"  value="submit" />
                 <input type="reset"  value="clear" /></td></tr>
               
             
          </form>

</tbody>
</table>
</body>
</html>
