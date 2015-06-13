<?php
    //include file inserts session password "abc123"    
    include('password.php');
    //starts session
    session_start();
    //the session variable is used to store the logged in password value
    $_SESSION["password"] = $_POST["password"];
?>

<?php
    //checks to see if the password being stored in session 
    //is same as session password "abc123"
    if($_SESSION["password"] == $password){
        //if the two passwords are equal 
        //display message logged in and give user option to log out
        echo '
          <p>You are successfully logged in!</p>
          <p>Please log out before leaving this site. <a href="logout.php">Log out</a></p>
          <p><img src="flowchart.png"></p>
           ';
        //if the two passwords are NOT equal 
        //display message invalid password and give user option to go back to login form
        }else {
        echo '
        <p>Password is invalid. Return to <a href="index.php">Log in</a></p>';
        }
?>
