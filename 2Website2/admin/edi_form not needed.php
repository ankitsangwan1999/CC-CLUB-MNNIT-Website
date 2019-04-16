<?php
session_start();
include_once"include/admin_dbh_inc.php";
if(isset($_POST['edit']))
{ 
	$editvalue=$_POST['edit'];
	// echo $editvalue;
	$sql="SELECT * FROM posts WHERE s_no='$editvalue'";
	$result=mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	// echo $row['content'];
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>Edit Post</title>
	</head>
	<body>
	<form action="include/add_post_inc.php" method="POST" enctype="multipart/form-data">
	<label for="image" >Upload Image if you want to Replace existing Image.</label>
	<input type="file" name="post_image" value="post_image">
	<br>
	<label for="title" >Post Title</label>
	<input type="text" name="title" id="title" value= "<?php echo $row['Title']?>" required>
	<br>
	<label for="label">Label</label>
	<input type="text" name="label" id="label" value= "<?php echo $row['Label']?>" required>
	<br>
	<label for="content"> Content</label>
	<textarea name="content" required><?php echo $row['content']?></textarea> 
	<!-- <input type="textarea" name="content" id="content"> -->
	<br>
	<label>Category</label>
	<?php
	
		$sql="SELECT * FROM categories";
		$result=mysqli_query($conn,$sql);
		$count=mysqli_num_rows($result);
		// echo $count
	?>		 
	<select name="category">
		<?php	
		for($i=0;$i<$count;$i++){
			$sql = "SELECT * FROM categories WHERE s_no=$i+1";
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
			?>
				<option  value="<?php echo $row['Category']?>"  <?php if($row['s_no']==1){ 
						?> selected <?php } ?>
					> 
	           		 <?php echo$row['Category']; ?> 
				</option>
			<?php
			}
			?>
		
	</select>
	<br>
	<label>Schedule</label>
	<select name="schedule">
		<option value="Yes"  selected>Yes</option>
		<option value="No">No</option>
	</select>
	<br>
		<button type="submit" name="submit" value="1">Update</button>
	</form>
	</body>
	</html>
	<?php
	$_SESSION['editvalue']=$editvalue;
	// echo $_SESSION['editvalue'];
}
?>
<?php
if(isset($_POST['delete'])){
	$delvalue=$_POST['delete'];
	// echo $delvalue;
	include_once"include/admin_dbh_inc.php";
	$sql="DELETE FROM posts WHERE s_no= '$delvalue' ";
	// mysqli_query($conn,$sql)
	echo "Error deleting the Post.";
	exit();
	if(mysqli_query($conn,$sql)){
		$sql1="SELECT * FROM posts";
		$result=mysqli_query($conn,$sql1);
		$count = mysqli_num_rows($result);
		// echo $count;
		$iter=$delvalue+1;
		$var=0;
		// UPDATE `posts` SET `s_no` = '2', `updated` = NULL WHERE `posts`.`s_no` = 3
		 for($i=1;$i<=$count+1-$delvalue;$i++){
		 	$tan=$delvalue + $var++;
		// $sql3="UPDATE posts SET s_no='2',updated = NULL WHERE s_no='3'";
 		     $sql3="UPDATE posts
	 	     SET s_no = '$tan'
	 	     WHERE s_no='$iter'";
			 mysqli_query($conn,$sql3);
			 $iter++;
		}

		//  $count=$count+1;
		// $sql2= "ALTER TABLE posts AUTO_INCREMENT = $count";	
		// mysqli_query($conn,$sql2);
		echo "POST Deleted Successfully.";
		?>
		<p><a href="index.php">Home</a></p>
		<?php
		}
	}
// else{
// 	echo "Error deleting the Post.";
?>