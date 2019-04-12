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
	<label>Category</label>
	<select name="category">
		<option disabled selected >Choose Category</option>
		
		<option >   </option>
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