<?php
session_start();
if(isset($_SESSION['a_name'])){
if(isset($_POST['submit'])) //Condition to check if the submit(name) Button is pressed or not
{
include_once 'admin_dbh_inc.php'; // to start connection with the database.
$admin_name = $_SESSION['a_name'];
$title=mysqli_real_escape_string($conn,$_POST['title']);
$label=mysqli_real_escape_string($conn,$_POST['label']);
$content=mysqli_real_escape_string($conn,$_POST['content']);
$category=mysqli_real_escape_string($conn,$_POST['category']);
$schedule=mysqli_real_escape_string($conn,$_POST['schedule']);
$updated=mysqli_real_escape_string($conn,$_POST['submit']);
if($schedule=="Yes"){
	$schedule=1;
}
else{
	$schedule=0;
}
//admin_name,Title,Label,content,Category,Schedule
//'$admin_name','$title','$label','$content','$category','$schedule'
// echo $content;
// ------------------------------------------------------------------'$category'
$sql1="SELECT * FROM posts";
		$result=mysqli_query($conn,$sql1);
		$count = mysqli_num_rows($result)+1;
	if($updated==1){
			// echo "Query Ran";
			$connector=$_SESSION['editvalue'];
			// echo $_SESSION['editvalue'];
			//$updated_date = date("Y-m-d H:i:s");
			$sql= "UPDATE posts
			SET Title='$title',Category='$category',Label='$label',Schedule='$schedule',
			updated= CURRENT_TIMESTAMP 
			WHERE s_no=$connector";
			mysqli_query($conn,$sql);
			$sql2="SELECT MAX(s_no) AS max FROM posts";
			$result=mysqli_query($conn,$sql2);
			$row=mysqli_fetch_array($result);
			$max=$row['max'];
			 // echo $row['max'];
			$sql1 = "UPDATE posts SET content='$content' WHERE s_no = $connector";
			mysqli_query($conn,$sql1);
			$_SESSION['updated']=1;
				header("Location: edit_form_inc.php");
			exit();
}
else{		//$updated_date = date("Y-m-d H:i:s");
			$sql= "INSERT INTO posts(s_no,admin_name,Title,Category,Label,Schedule,created)
			VALUES('$count','$admin_name','$title','$category','$label','$schedule',
			CURRENT_TIMESTAMP)";
			mysqli_query($conn,$sql);
			$sql2="SELECT MAX(s_no) AS max FROM posts";
			$result=mysqli_query($conn,$sql2);
			$row=mysqli_fetch_array($result);
			$max=$row['max'];
			 // echo $row['max'];
			$sql1 = "UPDATE posts SET content='$content' WHERE s_no = $max";
			mysqli_query($conn,$sql1);
			header("Location: ../index.php");
			  exit();
			
}
// ------------------------------------------
// $sql2="SELECT MAX(s_no) AS max FROM posts";
// $result=mysqli_query($conn,$sql2);
// $row=mysqli_fetch_array($result);
// $max=$row['max'];
//  // echo $row['max'];
// $sql1 = "UPDATE posts SET content='$content' WHERE s_no = $max";
// mysqli_query($conn,$sql1);
// if($updated==1){
// 	// header("Location: edit_form_inc.php");
// exit();
// else{
// 	$_SESSION['updated']=1;
// header("Location: ../index.php");
// exit();
// }
}//end of isset
}//end of session

?>