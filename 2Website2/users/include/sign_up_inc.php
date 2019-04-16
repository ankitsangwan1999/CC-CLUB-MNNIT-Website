<?php
session_start();
if(isset($_POST['submit'])) //Condition to check if the submit(name) Button is pressed or not
{

include_once 'dbh_inc.php'; // to start connection with the database.
$user_first=mysqli_real_escape_string($conn,$_POST['user_first']);
$user_last=mysqli_real_escape_string($conn,$_POST['user_last']);
$user_name=mysqli_real_escape_string($conn,$_POST['user_name']);
$user_email=mysqli_real_escape_string($conn,$_POST['user_email']);
$user_Password=mysqli_real_escape_string($conn,$_POST['Password']);
$user_confPassword=mysqli_real_escape_string($conn,$_POST['confpassword']);
// $user_interest=array();
$user_interest=$_POST['interest'];
// print_r ($user_interest);
// exit();

// to add a bit security for checking if any code is sent as input to our database.
// in above statement we have used conn which we can as we have included the dph_inc.php file.

/////////////////////ERROR HANDLERS////////////////////////
// to stop user signing up if he has left some field empty etc.
if(empty($user_first)|| empty($user_last)||empty($user_name)||empty($user_email)
	|| empty($user_Password)){
		echo ("<script LANGUGE='JavaScript'>
						window.alert('Fields should not be empty!');
						window.location.href='http://localhost/2Website2/index.php';
						</script>");
			// header("Location: ../../index.php?signup=empty");
			// exit();
}
else{
// check if input characters are valid
		if(!preg_match("/^[a-zA-Z]*$/",$user_first)|| !preg_match("/^[a-zA-Z]*$/",$user_last)){
			echo ("<script LANGUGE='JavaScript'>
						window.alert('Invalid characters used in first and last name!');
						window.location.href='http://localhost/2Website2/index.php';
						</script>");
			// header("Location: ../../index.php?signup=invalid");
			// exit();
	}
else{// if email is valid
	if(!filter_var($user_email, FILTER_VALIDATE_EMAIL)){ 
	// Filter_Validate_Email is a Method.
		echo ("<script LANGUGE='JavaScript'>
						window.alert('Email not valid.');
						window.location.href='http://localhost/2Website2/index.php';
						</script>");
		// header("Location: ../../index.php?signup=invalid");
		// exit();
	}
	elseif(($user_Password===$user_confPassword)==false){
		echo ("<script LANGUGE='JavaScript'>
						window.alert('Passwords didn't match');
						window.location.href='http://localhost/2Website2/index.php';
						</script>");
		// header("Location: ../../index.php?Passwor_Didn't_Match");
		// exit();
		}

	else{
		$sql="SELECT * FROM users WHERE user_name='$user_name'";
		$result=mysqli_query($conn,$sql);
		$resultcheck=mysqli_num_rows($result);
		if($resultcheck>0){
			echo ("<script LANGUGE='JavaScript'>
						window.alert('Username already taken!');
						window.location.href='http://localhost/2Website2/index.php';
						</script>");
		// 	header("Location: ../../index.php?signup=Usertaken");
		// exit();
		}
		
		else{
			//Hashing the Password
			$hashedPassword=password_hash($user_Password,PASSWORD_DEFAULT);
			//Insert Data into the database
			$sql="INSERT INTO users(user_first,user_last,user_name,user_email,Password) VALUES('$user_first','$user_last','$user_name','$user_email','$hashedPassword')";
			mysqli_query($conn,$sql);
			$sql1="SELECT * FROM users WHERE user_name='$user_name'";
			$result=mysqli_query($conn,$sql1);
			$row1 = mysqli_fetch_array($result,MYSQLI_ASSOC);
			// $row['user_id'];
			// $user_id=$row1['user_id'];
			$user_name=$row1['user_name'];
			for($i=0;$i<count($user_interest);$i++){
				$sql2="SELECT * FROM categories WHERE Category = '$user_interest[$i]'";
				$result=mysqli_query($conn,$sql2);
				$row = mysqli_fetch_array($result,MYSQLI_ASSOC); 
				$Category=$row['Category'];
				// $s_no=$row['s_no'];		
$sql3="INSERT INTO users_interest(user_name,Category) VALUES
('$user_name','$Category')";			
				mysqli_query($conn,$sql3);
			}
			echo ("<script LANGUGE='JavaScript'>
						window.alert('Sign-up successfull. Log in to continue.');
						window.location.href='http://localhost/2Website2/index.php';
						</script>");
		// 	header("Location: ../../index.php?signup=Success");
		// exit();
		}
	}

}
}
}
else{ 
	// if the Submit button is not clicked i.e. there have reached here the simply writing the 
	//url of this page then we gonna send them back to the signup page which is outside our current //location i.e. include folder. 
	echo ("<script LANGUGE='JavaScript'>
						window.alert('Invalid URL request. Error 404!');
						window.location.href='http://localhost/2Website2/index.php';
						</script>");
	// header("Location: ../../index.php?whereareyougoing");
	// exit();// Stop the script from further running. 
}

?>