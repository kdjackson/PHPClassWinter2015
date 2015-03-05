<html>
    <head>
        <meta charset="UTF-8">
        <title>Sign Up</title>
    </head>
    <body>
        
    <h1>Sign Up</h1>
    <form action="add_data.php" method="post">
        
    <fieldset>
    <legend>Information</legend>
        <label>E-Mail:</label>
        <input type="text" name="email" value=""/>
        <br />

        <label>Password:</label>
        <input type="password" name="password" value=""/>
        <br />
        <br /><input type="submit" value="Submit" />
    </fieldset>
        
    </form>
    
    <?php if (!empty($error_message)) { ?>
    <?php echo $error_message;?>
    <?php } // end if ?>
    
    <p>Already Signed Up?</p>
    <a href="login.php">Log In</a>
    
    </body>
</html>
