<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $page = filter_input(INPUT_GET, 'page');
        $page = intval($page)+1;
        
        $view = filter_input(INPUT_GET, 'view');
       
        
        echo '<h1>', $view, ' - ', $page, '</h1>';
        
        
        ?>
        
        <a href ="?page=<?php echo $page; ?>&view=images">View Images</a>
    </body>
</html>
