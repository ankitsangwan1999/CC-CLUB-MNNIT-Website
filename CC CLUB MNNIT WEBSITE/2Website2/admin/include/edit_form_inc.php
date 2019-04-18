
<?php
session_start();
include_once"admin_dbh_inc.php";
if(isset($_SESSION['updated'])){
	// $sql="UPDATE posts SET Updated";
	
echo ("<script LANGUGE='JavaScript'>
						window.alert('Post has been Successfully Updated!');
						window.location.href='http://localhost/2Website2/admin/index.php';
						</script>");

}
?>