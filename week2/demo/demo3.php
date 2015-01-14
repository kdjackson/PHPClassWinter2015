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
        <?php

            $my_var1 = 'hello';
            $my_var2 = 'world';
            
            $my_var3 = $my_var1.$my_var2;
            
            echo $my_var3;
            
            $my_var1 .= ' world';
            $my_var1 .= ' works';
            
            echo '<p>', $my_var1, '</p>';
            
            
            $err_msgs = '';
            
            if ( error ) {
                $err_msgs .= '<p> there is an error </p>';
                
            }
            
            if (true ) {
                $err_msgs .= '<p> there is another error </p>';
            }
            
               echo $err_msgs;
            
        ?>
    </body>
</html>
