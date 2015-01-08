<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>
            <?php
                  $myvar = $_GET['p'];
              //  $myvar = true;
              //  $myvar = 'string';
              //  $myvar = 10;
                if ($myvar === '1') {
                    echo 'Num 1';
                } else {
                    echo 'my page title';                
                }
            ?>
            
        </title>
    </head>
    <body>
        <?php
        // put your code here
        /*
          * phpinfo();
         */
        echo '<P>Hey hows it going</p>';
        ?>
    </body>
</html>
