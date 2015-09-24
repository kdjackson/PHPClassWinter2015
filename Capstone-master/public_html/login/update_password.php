        <?php
            //new session username is blank, current session will bring in current username
            $username = "";
            //if the fields are not empty
	    if ( !empty($_POST) ) {
            //read the username and passwords
            $username = filter_input(INPUT_POST, 'username');
            $password = filter_input(INPUT_POST, 'password');
            $password_confirm = filter_input(INPUT_POST, 'password_confirm');
            //make sure the passwords match
            if ($password_confirm != $password) {
                
                echo '<h1> Passwords do not match, please re-enter </h1>';
                
            } else {
            //mask the new password
            $password = sha1($password);
            //connec to the database and update the new password
            $pdo = new PDO("mysql:host=localhost;dbname=the_doors; port=3307;", "root", "");
            $dbs = $pdo->prepare('update user_table set password = :password where username= :username'); 
            
            $dbs->bindParam(':username', $username, PDO::PARAM_STR);
            $dbs->bindParam(':password', $password, PDO::PARAM_STR);
            //if the update is succesfful bring user to login    
            if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
                    header('Location:index.php');
            //if unsuccessful try again        
            } else {
                    echo '<h1> Password Not Updated </h1>';
            }
            
        }
            }
	?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Create New Password</title>
</head>
<body>
<!--    form to create a new password, must enter username, and password twice click change password to hit the database above-->
    <h1>Create New Password</h1>
    <div id="content">
        <form action="#" method="post">

            <div id="login">
                <label>Username:</label>
                <input type="text" name="username" value="<?php echo $username;?>"/><br/>
                
                <label>New Password:</label>
                <input type="password" name="password"/><br/>

                <label>Confirm New Password:</label>
                <input type="password" name="password_confirm"/><br/>
            </div>

            <div id="buttons">
                <input type="submit" value="Change Password" /><br/>
            </div>
        </form>
        
    </div>
            


</body>
</html>