<html>
	<head>
		<title> admin authentication </title>
	
	</head>
<body >
<?php

	$debug = false;
	function dBug($msg)
	{
		global $debug;
		if($debug)
			echo "<p>Debug : $msg</p>";
	}
	$username = $_POST['username'];
	$password = $_POST['password'];
	$loggedIn = false;
	dBug("Username : $username");
	dBug("Password : $password");
	$db = mysqli_connect("localhost","root","","drsearch");
	if(mysqli_connect_errno())
	{
		dBug("Error Connecting to DB.");
		echo "Operation Cannot be Completed!";
		die(' ');
	}
	$result = mysqli_query($db , "SELECT * FROM adminlogin WHERE username='$username'");
	//var_dump($result);
	$count = 0;
	if($result != null)
	{
		while($row = mysqli_fetch_array($result))
		{
			if(strcmp($row['password'],$password) == 0)
			{
				echo "Redirecting, Please Wait...";
				session_start();
				$_SESSION['username'] = $username;
			    $_SESSION['password'] = $row["password"]; 
		        $_SESSION['loggedIn'] = true;
				
				header("Location : adminlogin.php");
				
				echo "<p> <a href='http://localhost/drsearch/html/adminstartup.html'> click here </a> if you aren't redirected. </p>";
				$count++;
			}
			
		}
		if($count == 0)
		{
			echo "<p>Invalid Username/Password</p>";
			header("Location : http://localhost/drsearch/html/adminlogin.html");
		}
	}
	else
	{
		echo "<p>Invalid Username/Password</p>";
		header("Location : http://localhost/drsearch/html/adminlogin.html");
	}
?>
</body>

</html>
