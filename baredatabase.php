<?php
// 1. Create a database connection
$connection = mysqli_connect("localhost","root","");


// 2. Select a database to use 
$db_select = mysqli_select_db($connection, "sample");

?>

