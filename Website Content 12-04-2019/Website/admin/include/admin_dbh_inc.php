<?php
//Here we make a Connection of our website to the database we've created.
	                    //CONNECTION TO THE DATABASE//
$dbservername="localhost";// Because currently i am running on local server i.e. Xampp Server and it has local host as the server name. 
// If I would have running an online server then go to hosting company's website and login to their control panel and get the server name.  
$dbUsername="root"; // user name is root by default.
$dbPassword=""; // no password in XAMMP by default
$dbname="login_system";// i.e. we have created database with name login_system in MYSql.

// To activate the connection There is an inbuilt phpfunction which accepts four arguments which we have just created. 
$conn= mysqli_connect($dbservername,$dbUsername,$dbPassword,$dbname);
// conn can be called as a database connection variable.
// Now we have a connection to the database.
// All we need to do is to refer to this file each time we need to connect to the database/
?>