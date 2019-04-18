
<?php
session_start();
// For Starting the Session on our Website and for Session variables to Work.
// This should be the very first thing on the page before any of the HTML tags.
// We must have this function run on every page of the website so that user can login to that page.
if(isset($_POST['submit'])){

		include_once "dbh_inc.php";//including the db connection
		$user_name=mysqli_real_escape_string($conn,$_POST['user_name']);
		$user_password=mysqli_real_escape_string($conn,$_POST['Password']);
		//error handlers.
	if( empty($user_name) || empty($user_password) ) {
		header("Location: ../../index.php?empty");
		exit();
		}
	else{ 	$sql="Select * FROM users where user_name='$user_name'";
			$result=mysqli_query($conn,$sql);// This Function returns a result-set.
			$resultcheck=mysqli_num_rows($result);
			if($resultcheck<1){
					header("Location: ../../index.php?Login=ErrorA");
					exit();
				}
			else{
					$row=mysqli_fetch_assoc($result);
					// this function returns an associative array of strings representing fetched row.
					// echo $row['user_name'];
					// dehashing the password.
					$hashpasswordcheck=password_verify($user_password,$row['Password']);
					if($hashpasswordcheck==false){
					
					echo ("<script LANGUGE='JavaScript'>
						window.alert('Wrong Password');
						window.location.href='http://localhost/2Website2/index.php';
						</script>");
					}
					elseif($hashpasswordcheck==true){
						//Logging in the User
						$_SESSION['u_id']=$row['user_id'];//setting the session variables
						$_SESSION['u_first']=$row['user_first'];
						$_SESSION['u_last']=$row['user_last'];
						$_SESSION['u_name']=$row['user_name'];
						$_SESSION['u_email']=$row['user_email'];
						header("Location: ../../index.php?Login=Success");
						exit();
					}

			}

			}





	}
else{
	header("Location: ../../index.php?LoginErrorC");
	exit();
}















?>