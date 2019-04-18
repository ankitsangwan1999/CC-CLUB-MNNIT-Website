<?php
if(isset($_POST['submit'])) //Condition to check if the submit(name) Button is pressed or not
{

include_once 'dbh_inc.php'; // to start connection with the database.
$user_first=mysqli_real_escape_string($conn,$_POST['user_first']);
$user_last=mysqli_real_escape_string($conn,$_POST['user_last']);
$user_name=mysqli_real_escape_string($conn,$_POST['user_name']);
$user_email=mysqli_real_escape_string($conn,$_POST['user_email']);
$user_Password=mysqli_real_escape_string($conn,$_POST['Password']);
$user_confPassword=mysqli_real_escape_string($conn,$_POST['confpassword']);
// $user_interest=mysqli_real_escape_string($conn,$_POST['interest']);
// echo $user_interest;
// break;

// to add a bit security for checking if any code is sent as input to our database.
// in above statement we have used conn which we can as we have included the dph_inc.php file.

/////////////////////ERROR HANDLERS////////////////////////
// to stop user signing up if he has left some field empty etc.
if(empty($user_first)|| empty($user_last)||empty($user_name)||empty($user_email)
	|| empty($user_Password)){
		header("Location: ../signup.php?signup=empty");
			exit();
}
else{
// check if input characters are valid
		if(!preg_match("/^[a-zA-Z]*$/",$user_first)|| !preg_match("/^[a-zA-Z]*$/",$user_last)){
			header("Location: ../signup.php?signup=invalid");
			exit();
	}
else{// if email is valid
	if(!filter_var($user_email, FILTER_VALIDATE_EMAIL)){ 
	// Filter_Validate_Email is a Method.
		header("Location: ../signup.php?signup=invalid");
		exit();
	}
	elseif(($user_Password===$user_confPassword)==false){
		header("Location: ../signup.php?Password_Didnot_Match");
		exit();
		}

	else{
		$sql="SELECT * FROM users WHERE user_name='$user_name'";
		$result=mysqli_query($conn,$sql);
		$resultcheck=mysqli_num_rows($result);
		if($resultcheck>0){
			header("Location: ../signup.php?signup=Usertaken");
		exit();
		}
		
		else{
			//Hashing the Password
			$hashedPassword=password_hash($user_Password,PASSWORD_DEFAULT);
			//Insert Data into the database
			$sql="INSERT INTO users(user_first,user_last,user_name,user_email,Password) VALUES('$user_first','$user_last','$user_name','$user_email','$hashedPassword')";
			mysqli_query($conn,$sql);
			header("Location: ../../index.php?signup=Success");
		exit();
		}
	}

}
}
}
else{ 
	// if the Submit button is not clicked i.e. there have reached here the simply writing the 
	//url of this page then we gonna send them back to the signup page which is outside our current //location i.e. include folder. 
	header("Location: ../signup.php?whereareyougoing");
	exit();// Stop the script from further running. 
}

?>