<?php session_start();

if(!isset($_SESSION["uid"])){header("location:index.php");}

$uid=$_SESSION["uid"];

echo "<img src='img/$uid.jpg' /><br>";
echo  "Welcome ".$_SESSION["uid"]." | ".$_SESSION["username"]."<br>";
echo "Email: ".$_SESSION["email"]."<br>";
?>

<a href="logout.php">Logout</a>