<?php
    //to ensure you are using same session
    session_start();
    //destroy the session
    session_destroy();
    //redirects us to index.php after logging out   
    header("Location: index.php");
?>
