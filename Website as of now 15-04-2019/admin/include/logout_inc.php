<?php
// if(isset($_POST['submit'])){
session_start();
session_unset();
session_destroy();

?>
<p>You've been Logged Out Successfully.</p>
<a href="../../index.php"><?php echo 'Home'; ?></a>