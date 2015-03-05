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
            
            //if ( isset ($_SESSION['hello']) ) {
              //  echo $_SESSION['hello'];
           // } else {
             //   echo 'session not set';
            //}
            
            if (isset ($_SESSION['loggedin']) && ($_SESSION['loggedin'] == true) ) {
                echo 'you are logged in';
            }else {
                echo 'you are not logged in';
            }
        
            //echo $_SESSION ['hello'];
            
            //echo $_SESSION ['cart'] ['product1'];
            //echo $_SESSION ['cart'] ['product2'];
            //echo $_SESSION ['cart'] ['product3'];
            
        
        ?>
    </body>
</html>
