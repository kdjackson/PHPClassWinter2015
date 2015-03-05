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
            
            //always set log into false first.
            $_SESSION['loggedin'] = true;
            
            $_SESSION['hello'] = 'hello';
            
            $_SESSION['cart'] = array();
            
            $_SESSION['cart'] ['product1'] = 'drums';
            
            $_SESSION['cart'] ['product2'] = 'guitar';
            
            $_SESSION['cart'] ['product3'] = 'triangle';
        
        
        ?>
    </body>
</html>
