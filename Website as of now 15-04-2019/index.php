
<?php
	
	session_start();
	 require_once('incl/top.php');
 	require_once('incl/nav.php');
	// include_once "include/login_inc.php";
	if(isset($_SESSION['u_id'])){
		echo "You are Logged in!</br>";
		echo "Your user name is ".$_SESSION['u_name'].".</br>";
		echo ("Your Password is ".$_SESSION['u_password'].".</br>");
		echo("You are a User.");
		// session_unset();
	}
	elseif (isset($_SESSION['a_name']))
	{
		echo "You are Logged in!</br>";
		echo "Your user name is ".$_SESSION['a_name'].".</br>";
		echo(" You are an Admin.");
	}
	else{
		echo " You are currently Logged Out!";
	}

?>

 
 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>