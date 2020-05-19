<!DOCTYPE html>
<html lang="en">
<head>
	<title>Log In</title>
	<link rel="stylesheet" href="access.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Being Responsive -->
	<meta charset="UTF-8">
</head> 
<body>
	<div class="container">
		<div class="loginAccount">
			<form id="loginForm" action="schedule1.php" method="post" onsubmit="return validateForm()">

				<div class= "class1">
					<input type= "email" id= "EmailAddress" name= "emailaddress" placeholder="Email Address">
				</div>

				<div id= "class2">
					<input type= "password" id="Password" name= "pswrd" placeholder="Password">
				</div>

				<div id= "class3">
					<input type= "submit" value= "Log in">
				</div>
   			</form>
		</div>
		<div id="forgetpswrd">
			<p><a href="troublelogin.php"><b>Forgot Your Password?</b></a></p>
		</div>
		<div id="sign-in">
			<p>Don't have an account? <a href="Register.php">Sign up</a></p>
		</div>
	</div>

	<footer id="main-footer">
		<p>&copy; 2018 Health &amp; Wellness Centre</p>
	</footer>

	<script>
		function validateForm(){
			
			document.getElementById("EmailAddress").style.border = "1px solid #0066CC";
			document.getElementById("Password").style.border = "1px solid #0066CC";
			
			var ea = document.getElementById('EmailAddress').value;
			var psw= document.getElementById('Password').value;
			var valid=true;
  			
    		if(ea == null || ea == ''){
    			document.getElementById("EmailAddress").style.border = "1px solid red";
    			valid=false;
    		}
    		
    		if(psw == null || psw == ''){
    			document.getElementById("Password").style.border = "1px solid red";
    			valid=false;
    		}
    		return valid;
  		}
	</script>
	
</body>