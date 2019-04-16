<?php

session_start();
if(isset($_POST['submit'])){
	include_once 'dbh_inc.php';
$Title=mysqli_real_escape_string($conn,$_POST['submit']);
	// echo $Title;


$comment=mysqli_real_escape_string($conn,$_POST['comment']);
$user_name=mysqli_real_escape_string($conn,$_SESSION['u_name']);
$sql="SELECT * FROM users WHERE user_name='$user_name'";
$result=mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC); 
$u_id_no=$row['user_id'];
$sql2="SELECT * FROM posts WHERE Title='$Title'";
$result2=mysqli_query($conn,$sql2);
$row1 = mysqli_fetch_array($result2,MYSQLI_ASSOC); 
$p_s_no=$row1['s_no'];
$sql3="INSERT INTO comments(comment,p_s_no,u_id_no,Title,user_name) VALUES('$comment','$p_s_no','$u_id_no','$Title','$user_name')";
mysqli_query($conn,$sql3);
// $row = mysqli_fetch_array($result2,MYSQLI_ASSOC); 
header("Location:../../index.php#$Title");
}



?>


