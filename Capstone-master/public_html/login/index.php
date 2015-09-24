<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sign In</title>
    </head>
    <body>
        
        <?php
            //new session the username is blank, if same session the username input will stay the same
            $username = "";
        ?>
        <h1>Log In</h1>
    <form action="check_data.php" method="post">
        
    <fieldset>
        <label>Username:</label>
        <input type="text" name="username" value="<?php echo $username;?>"/>
        <br />

        <label>Password:</label>
        <input type="password" name="password" value=""/>
        <br />
        <br /><input type="submit" value="Login" />
        
    </fieldset>
        
    </form>
       <a href="forgot_password.php"><input type="submit" value="Forgot Password"/></a> 
    </body>
</html>
