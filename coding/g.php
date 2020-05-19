<?php
	$email=filter_input(INPUT_POST,'emailaddress');
	$fullname=filter_input(INPUT_POST,'fullname');
	$password=filter_input(INPUT_POST, 'pswrd');
	if(!empty($email)){
		if(!empty($fullname)){
			if(!empty($password)){
				$host="localhost";
				$dbusername="root";
				$dbpassword="";
				$dbname="sedb";
				$conn= new mysqli($host,$dbusername,$dbpassword,$dbname);
				if(mysqli_connect_error()){
					die('connection error('.mysqli_connect_errno().')'.mysqli_connect_error());
				}
				else{
					$sql = "INSERT INTO student(student_id, email_address,fullname,password) values ('', '$email', '$fullname', 
					'$password')";
					if($conn->query($sql)){
						echo "Congratulations. We got your information successfully. You can Log in to our website.";
					}
					else{
						echo "Error: ".$sql."<br>".$conn->error;
					}
					$conn->close();
				}

			}
			else{
				die();
			}
		
		}
		else{
			die();
		}
	}
	else{
		die();
	}
?>
