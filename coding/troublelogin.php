<!DOCTYPE html>
<html lang="en">
<head>
	<title>Reset Password</title>
	<link rel="stylesheet" href="troublelogin.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Being Responsive -->
	<meta charset="UTF-8">
</head> 
<body>
	<div class="container">
		<div id="trouble">
			<h3>Trouble Loging In?</h3>
			<p>Enter your email and we'll send you <br>a link to get back into your account.</p>
		</div>
			<form id="rstpsw" action="schedule1.php" method="post" onsubmit="return validateForm()">

				<div class= "class1">
					<input type= "email" id= "EmailAddress" name= "emailaddress" placeholder="Email Address">
				</div>

				<div id= "class2">
					<input type= "submit" value= "Send Login Link">
				</div>
			</form>
			<div id="newaccount">
				<p>OR<br></p>
				<p><a href="Register.php">Create New Account<br></a>
			</div>

			<div id="backlogin">
				<p><br><a href="access.php">Back To Login</a>
			</div>

		</div>
		<footer id="main-footer">
		<p>&copy; 2018 Health &amp; Wellness Centre</p>
	</footer>

	<script>
		function validateForm(){
			
			document.getElementById("EmailAddress").style.border = "1px solid #0066CC";
			var ea = document.getElementById('EmailAddress').value;
			var valid=true;
  			
    		if(ea == null || ea == ''){
    			document.getElementById("EmailAddress").style.border = "1px solid red";
    			valid=false;
    		}
    		
    		return valid;
  		}
	</script>
</body>