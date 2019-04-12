<!DOCTYPE html>
<html>
<head>
	<title>Add Post</title>
</head>
<body>
<form action="include/add_post_inc.php" method="POST">
	<label for="title">Post Title</label>
	<input type="text" name="title" id="title" required>
	<br>
	<label for="label">Label</label>
	<input type="text" name="label" id="label" required>
	<br>
	<label for="content"> Content</label>
	<textarea name="content" required ></textarea>
	<!-- <input type="textarea" name="content" id="content"> -->
	<br>
	<?php
	include_once"include/admin_dbh_inc.php";
		$sql = "SELECT * FROM categories WHERE s_no=3";
		$result = mysqli_query($conn, $sql);
		$col=array();
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		?>


	<label>Category</label>
	<?php
	$sql="SELECT * FROM categories";
		$result=mysqli_query($conn,$sql);
		$count=mysqli_num_rows($result);
		// echo $count
	?>		 
	<select name="category" required>
		<option disabled selected >Choose Category</option>
		<?php	
		for($i=0;$i<$count;$i++){
			$sql = "SELECT * FROM categories WHERE s_no=$i+1";
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
			?>
			<option > <?php
			echo$row['Category'];
			?>  </option>
		<?php
	}
	?>
		
	</select>
	<br>
	<label>Schedule</label>
	<select name="schedule" required>
		<option disabled selected> Schedule Status</option>
		<option value="Yes">Yes</option>
		<option value="No">No</option>
	</select>
	<br>
	<button type="submit" name="submit">Add</button>
</form>
</body>
</html>