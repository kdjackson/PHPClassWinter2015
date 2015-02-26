<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        
        $arr = array();
        
        $arr[0] = 'hello';
        $arr[1] = 'world';
        $arr["cars"] = 'ford';
        
        $arr["cars"][0] = 'ford';
        $arr["cars"][2] = 'chevy';
        $arr["cars"][5] = 'honda';
        
        print_r($arr); //this shows "behind the scenes"
        
        echo $arr[0] , ' ', $arr[1], ' ', $arr["cars"];
        
        //use foreach loops for arrays
        foreach ($arr as $key => $value) {
            if ( !is_array($value) ){
            echo '<br />', $key, ' =>', $value;
        }
        }
        
        
        // => equals to
        
        ?>
    </body>
</html>
