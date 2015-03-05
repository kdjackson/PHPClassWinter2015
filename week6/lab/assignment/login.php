<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Log In</h1>
    <form action="check_data.php" method="post">
        
    <fieldset>
        <label>E-Mail:</label>
        <input type="text" name="email" value=""/>
        <br />

        <label>Password:</label>
        <input type="password" name="password" value=""/>
        <br />
        <br /><input type="submit" value="Submit" />
    </fieldset>
        
    </form>
        <?php
        // put your code here
        
            if (!empty($error_message)) { 
                echo $error_message;
            }
            
        ?>
    </body>
</html>
