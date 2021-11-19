<?php session_start();
if(!isset($_SESSION['username'])){header("location:index.php");}

echo "<h1>Welcome {$_SESSION['username']}</h1>"

?>
<a href="logout.php">Log Out</a>