<?php
session_start();
include_once"admin_dbh_inc.php";
if(isset($_SESSION['updated'])){
	// $sql="UPDATE posts SET Updated";
	echo "Post has been Successfully Updated.";

?>
<p><a href="../index.php">Home</a></p>
<?php
}
?>