<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <a href="?name=kim&email=test@test.com">test link </a>
        <?php
            var_dump($_GET);
            
            //$_GET['name']
            
            if (isset($_GET['name']) === true ) {
                echo $_GET['name'];
            }
            
            echo '<br />';
            
            if (isset($_GET['email']) === true ) {
                echo $_GET['email'];
                }
            
                
        
        ?>
    </body>
</html>
