<?php 

//$dbh = mysqli_connect("localhost","root","","dblibrary");
$dbh=mysqli_init(); mysqli_real_connect($dbh, "library.mysql.database.azure.com", "library@library", "Parbar@23", "dblibrary", 3306);

?>