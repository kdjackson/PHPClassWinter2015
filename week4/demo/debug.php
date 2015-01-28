<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $page = filter_input(INPUT_GET, 'page');        
        $post = filter_input(INPUT_POST, 'email');
        
        $currentPage = '';
        
        
        if ( $page == $currentPage ) {
            
            echo('this is the right page');
            
        }
        
        echo('this is the wrong page');
        
        var_dump($page);
        
        ?>
    </body>
</html>
