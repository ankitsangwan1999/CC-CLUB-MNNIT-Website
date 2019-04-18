<?php
if(isset($_POST['submit'])){
session_start();
session_unset();
session_destroy();
echo ("<script LANGUGE='JavaScript'>
						window.alert('Logout successfull!');
						window.location.href='http://localhost/2Website2/index.php';
						</script>");
// header("Location: ../../index.php");
}

?>