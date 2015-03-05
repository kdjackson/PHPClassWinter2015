<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        session_start();
        
        if ( !empty($_POST) ) {
            $passcode = filter_input(INPUT_POST, 'passcode');
                    
                if ( $passcode === 'test' ) {
                    $_SESSION['loggedin'] = true;
                    header('Location: admin.php');
                } else {
                    echo '<p>Passcode not accepted</p>';
                }
        }    
        
        
        
        ?>
        
        <form method="post" action="#">
            
            Passcode <input type="password" value="" name="passcode" />
            
            <input type="submit" value="submit" />
                            
        </form>
        
    </body>
</html>
