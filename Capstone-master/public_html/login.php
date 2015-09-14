<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title></title>
</head>
<body>
    
    	<?php
            //new session the username is blank, if same session the username input will stay the same
            $username = "";
            //if the fields are not empty
	    if ( !empty($_POST) ) {
            //read the username and passowrd fields
            $username = filter_input(INPUT_POST, 'username');   
            $password = filter_input(INPUT_POST, 'password');
            //mask the password as it is set up in the database
            $password = sha1($password);
            //connec to the database, create a prepare statement to compare the user input and the database input
            $pdo = new PDO("mysql:host=localhost;dbname=the_doors; port=3306;", "root", "");
            $dbs = $pdo->prepare('select * from user_table where username = :username and password = :password'); 
            
            $dbs->bindParam(':username', $username, PDO::PARAM_STR);
            $dbs->bindParam(':password', $password, PDO::PARAM_STR);
            //if the username and passowrd match then bring them to the index page    
            if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
                    header('Location:index.php');
            //if the username and/or password are invalid let them try again        
            } else {
                    echo '<h1> Invalid Username or Password </h1>';
            }
            
        }
	
	?>

    <div id="content">
<!--        form that allows the user to enter their username and password-->
        <form action="#" method="post">

            <div id="login">
                <label>Username:</label>
                <input type="text" name="username" value="<?php echo $username;?>"/><br/>

                <label>Password:</label>
                <input type="password" name="password"/><br/>
            </div>

            <div id="buttons">
                <input type="submit" value="Log in" /><br/>
            </div>
        </form>
<!--        if the user forgets their password they can click here and it will bring them to the forgot password page-->
        <a href="forgot_password.php"><input type="submit" value="Forgot Password"/></a>
    </div>
	


</body>
</html>