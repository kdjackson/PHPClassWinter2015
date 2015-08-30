<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title></title>
</head>
<body>

    <div id="content">
        <form action="#" method="post">

            <div id="login">
                <label>Username:</label>
                <input type="text" name="username"/><br/>

                <label>Password:</label>
                <input type="password" name="password"/><br/>
            </div>

            <div id="buttons">
                <input type="submit" value="Log in" /><br/>
		<input type="submit" value="Forgot Password" /><br/>
            </div>

        </form>
    </div>
	
	<?php
	    if ( !empty($_POST) ) {
            
            $username = filter_input(INPUT_POST, 'username');
            $password = filter_input(INPUT_POST, 'password');
            
            $password = sha1($password);
            
            $pdo = new PDO("mysql:host=localhost;dbname=the_doors; port=3307;", "root", "");
            $dbs = $pdo->prepare('select * from user_table where username = :username and password = :password'); 
            
            $dbs->bindParam(':username', $username, PDO::PARAM_STR);
            $dbs->bindParam(':password', $password, PDO::PARAM_STR);
                
            if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
                    echo '<h1> Login Successful </h1>';
            } else {
                    echo '<h1> Invalid Email or Password </h1>';
            }
            
        }
	
	?>

</body>
</html>