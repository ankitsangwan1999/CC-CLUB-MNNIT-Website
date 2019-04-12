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

$sql= "INSERT INTO posts(admin_name,Title,Category,Label,Schedule)
VALUES('$admin_name','$title','$category','$label','$schedule')";
mysqli_query($conn,$sql);
// ------------------------------------------
$sql2="SELECT MAX(s_no) AS max FROM posts";
$result=mysqli_query($conn,$sql2);
$row=mysqli_fetch_array($result);
$max=$row['max'];
 // echo $row['max'];
$sql1 = "UPDATE posts SET content='$content' WHERE s_no = $max";
mysqli_query($conn,$sql1);
header("Location: ../index.php");

}//end of isset
}//end of session

?>