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
        
        
        $comments = filter_input(INPUT_POST, 'comments');
        $comments = htmlspecialchars($comments);
        
        echo '<p>', $comments, '</p>';
        ?>
        <form action ="#" method="post">

            <textarea name="comments"><?php echo $comments;?></textarea>
            
        <br /><input type="submit" value="Submit" />
        </form>
        
    </body>
</html>
