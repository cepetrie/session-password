<?php
include('password.php');
session_start(); //Starting session
$_SESSION["password"] = $_POST["password"];
?>

<?php

if($_SESSION["password"] == $password){
 echo '
  <p>You are successfully logged in!<p>
  <p>Please log out before leaving this site. <a href="logout.php">Log out</a>
  <p><img src="flowchart.png"></p>
   ';
 
}else {
 echo '
<p>Password is invalid. Return to <a href="index.php">Log in</a></p>';

}
?>
