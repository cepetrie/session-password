<?php
    session_start();//starts session
?>

<!-- show loigin form and request password -->
<!doctype html>
<html>
    <head>
        <title>Session Password</title>
    </head>
    
    <body>
        <h1>Please log in</h1>
        <!-- login.php exectuted with submit -->
        <form action="login.php" method="POST">
            <table>
                <tr>
                    <td><label>Enter the password</label></td>
                    <td><input name="password" value=""></td>
                </tr>
                <tr>
                    <td><button>SUBMIT</button></td>
                </tr>
            </table>
        </form>
    
    </body>
</html>
