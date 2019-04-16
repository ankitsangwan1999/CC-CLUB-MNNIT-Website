<?php
// if(isset($_POST['submit'])){
	//echo"hello";
session_start();
session_unset();
session_destroy();
echo ("<script LANGUGE='JavaScript'>
						window.alert('Logout successfull!');
						window.location.href='http://localhost/2Website2/index.php';
						</script>");
// header("LOCATION: ../../index.php ");
// exit();//}
?>
<!-- <p>You've been Logged Out Successfully.</p> -->
<!-- <a href="../../index.php"><?php// echo 'Home'; ?></a> -->