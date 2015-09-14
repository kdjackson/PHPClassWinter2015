<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Security Question</title>
</head>
<body>

    <h1>Security Question</h1>
        <form action="#" method="post">
<!--            created a field for security question to be asked and answered-->
            <div id="security_question">
                <label>What is your daughter's middle name?:</label>
                <input type="text" name="security_q"/><br/>

            </div>
<!--            button to submit answer-->
            <div id="buttons">
                <input type="submit" value="Submit" />
            </div>

        </form>
    
    	<?php
            //if the post is not empty
	    if ( !empty($_POST) ) {
            //read the field labled security_q
            $security_q = filter_input(INPUT_POST, 'security_q');
            
            //connect to the database and prepare a select statement
            $pdo = new PDO("mysql:host=localhost;dbname=the_doors; port=3306;", "root", "");
            $dbs = $pdo->prepare('select * from user_table where security_q = :security_q'); 
            //bind the answer and compare to database answer
            $dbs->bindParam(':security_q', $security_q, PDO::PARAM_STR);
            //if the answer matches then bring user to update their password    
            if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
                    header('Location: update_password.php');
            //if the answer is incorrect display invalid answer, they  may try again        
            } else {
                    echo '<h1> Invalid Answer! </h1>';
            }
            
        }
	
	?>

    </body>
</html>