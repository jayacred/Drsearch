function info(id)
{
	var display = document.getElementById('status');
	if(id == "name")
	{
		display.innerHTML = "Your Full Name, including initials, may contains spaces.";
	}
	else if(id == 'age')
	{
		display.innerHTML = "Your Age as of now";
	}
	else if(id == 'username')
	{
		display.innerHTML = "Username must start with a alphabet and may contain any combination alphanumeric characters with a minimum length of 6.";
	}
	else if(id == 'password')
	{
		display.innerHTML = "Password may contain any combination alphanumeric characters with a minimum length of 6.";
	}
	else if(id == 'question')
	{
		display.innerHTML = "Choose a question such that none other than you knows the answer, this question is asked in case you forget your password.";
	}
}
function validateData()
{
	var name = document.regForm.name.value.trim();
	var age = document.regForm.age.value.trim();
	var username = document.regForm.username.value.trim();
	var password = document.regForm.password.value.trim();
	var repassword = document.regForm.repassword.value.trim();
	var question = document.regForm.sQuestion.value.trim();
	var answer = document.regForm.sAnswer.value.trim();
	
	username = username.toLowerCase();
	
	if(name.length <= 0 || name.length < 3 || !isValidString(name))
	{
		setStatus('Please Enter a valid name.');
	}
	else if(age.length < 1 || age.length >2 || isNaN(age))
	{
		setStatus('Please Enter a valid age.');
	}
	else if(username.length < 6)
	{
		setStatus("Username is too short.");
	}
	else if(! (username[0]>='a' && username[0]<='z'))
	{
		setStatus("Username must start with an alphabet.");
	}
	else if(!isValidString(username))
	{
		setStatus("Username contains special characters.");
	}
	else if(password.length < 6)
	{
		setStatus("Password is too short.");
	}
	else if(!isValidString(password))
	{
		setStatus("Username contains special characters.");
	}
	else if(!isValidString(question))
	{
		setStatus("Recovery Question contains Special Characters.");
	}
	else if(!isValidString(answer))
	{
		setStatus("Recovery Answer contains Special Characters.");
	}
	else if(password != repassword)
	{
		setStatus("Your Passwords don't match.");
	}
	else
	{
		return true;
	}
	return false;
}
function isValidString(str)
{
	var str = str.toLowerCase();
	for(var i=0;i<str.length;i++)
	{
		if(!((str[i] >='a' && str[i]<='z')||(str[i]>='0' && str[i]<='9')||(str[i] == ' ')||(str[i]=='_')))
		{
			return false;
		}
	}
	return true;
}
function setStatus(msg)
{
	document.getElementById('status').innerHTML = msg;
}
function clear_display()
{
	var display = document.getElementById('status');
	display.innerHTML = "&nbsp;";
}
function validatePassword()
{
	var password = document.getElementById('pass');
	var repassword = document.getElementById('repass');
	if(password.length < 6)
	{
		setStatus("Password is too short.");
	}
	else if(password != repassword)
	{
		setStatus("Your Passwords don't match.");
	}
}
function logoutUser()
{
	document.location = "http://localhost/ExpenseManager/UserLogout.php";
}