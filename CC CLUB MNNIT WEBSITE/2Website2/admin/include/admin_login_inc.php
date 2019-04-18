<?php
session_start();
// For Starting the Session on our Website and for Session variables to Work.
// This should be the very first thing on the page before any of the HTML tags.
// We must have this function run on every page of the website so that user can login to that page.
if(isset($_POST['submit'])){

		include_once "admin_dbh_inc.php";//including the db connection
		$admin_name=mysqli_real_escape_string($conn,$_POST['admin_name']);
		$admin_password=mysqli_real_escape_string($conn,$_POST['admin_password']);
		//error handlers.
	if( empty($admin_name) || empty($admin_password) ) {
		header("Location: ../../admin_login.php?empty");
		exit();
		}
	else{ 	$sql="Select * FROM admin where admin_name='$admin_name'";
			$result=mysqli_query($conn,$sql);// This Function returns a result-set.
			$resultcheck=mysqli_num_rows($result);
			if($resultcheck<1){
					header("Location: ../../admin_login.php?Login=Error");
					exit();
				}
			else{
					$row=mysqli_fetch_assoc($result);
					// this function returns an associative array of strings representing fetched row.
					// echo $row['admin_name'];
					// dehashing the password.
					$hashpasswordcheck=md5($admin_password);
					if($hashpasswordcheck==$row['admin_password']){
						header("Location: ../../admin_login.php?Login=error");
						exit();
					}
					elseif($hashpasswordcheck==true){
						//Logging in the User
						// $_SESSION['u_id']=$row['user_id'];//setting the session variables
						// $_SESSION['u_first']=$row['user_first'];
						// $_SESSION['u_last']=$row['user_last'];
						$_SESSION['a_name']=$row['admin_name'];
						// $_SESSION['u_email']=$row['user_email'];
						// $_SESSION['u_password']=$row['Password'];
						header("Location: ../index.php?Login=Success");
						exit();
					}

			}

			}





	}
else{
	header("Location: admin_login.php?LoginError");
	exit();
}















?>