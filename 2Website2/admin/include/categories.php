<?php
session_start();
if(isset($_POST['submit']) && isset($_SESSION['a_name'])){
include_once"admin_dbh_inc.php";
$category=mysqli_real_escape_string($conn,$_POST['category']);
// echo $category;
$sql="SELECT * FROM categories WHERE Category = '$category'";
$result=mysqli_query($conn,$sql);
$rows=mysqli_num_rows($result);
// echo $rows;
  if($rows>1){
      echo "Category Allready Exist.";
      ?>
        <p><a href="categories_inc.php">Try Another.</a></p>
    <?php
}
 else{
      $sql="INSERT INTO categories (Category) VALUES('$category')";
      if(mysqli_query($conn,$sql)){
        echo"Category Inserted Successfully.";
        ?>
        <p><a href="categories_inc.php">Return to Categories.</a></p>
      <?php
        exit();
   }
else {
  echo"Category Insertion Unsuccessful.";
  ?>
  <p><a href="categories_inc.php">Try Again</a></p>
  <?php
  }
}
}// end of isset
else{
  echo"This is Wrong man";
}
?>