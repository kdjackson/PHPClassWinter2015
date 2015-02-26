<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
         <form action ="#" method = "post">
        
        <?php
        // put your code here
       
        var_dump($_POST);
        $selectedState = filter_input(INPUT_POST, 'states');
        
        $states = array();
        $states["RI"] = 'Rhode Island';
        $states["CT"] = 'Connecticut';
        $states["FL"] = 'Florida';
        $states["NH"] = 'New Hampshire';
        
        echo '<select name = "states" >';
        foreach ($states as $key => $value) {
            if ($selectedState == $key) {
            echo '<option value="',$key,'" selected="selected">',$value,'</option>';
            } else {
                echo '<option value="',$key,'">', $value, '</option>';
            }
            
        }
        
        echo '</select>';
       
        ?>
           
            <input type="submit" value="submit" />
            </form>
             
    </body>
</html>
