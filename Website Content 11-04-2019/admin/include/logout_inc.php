<?php
if(isset($_POST['submit'])){
session_start();
session_unset();
session_destroy();
echo"Hello Logout";
header("Location: ../../index.php");
}
?>