<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
    <?php  
        $db = new PDO("mysql:host=localhost;dbname=phpclasswinter2015; port=3307;", "root", "");
        
        $dbs = $db->prepare('select * from account');
    
        if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
            
            $results = $dbs->fetchAll(PDO::FETCH_ASSOC);
        
   echo  '<h1>'.'Account List'.'</h1>';
    echo '<table>';
        echo '<tr>';
           echo  '<th>' . 'E-Mail' . '</th>';
           echo  '<th>' . 'Phone' . '</th>';
           echo  '<th>' . 'Heard From' . '</th>';
           echo  '<th>' . 'Contact Via' . '</th>';
           echo  '<th>' . 'Comments' . '</th>';
        echo '</tr>';
            foreach ($results as $value) {
        echo '<tr>';
        echo '<td>' . $value["email"] . '</td>';
        echo '<td>' . $value["phone"] . '</td>';
        echo '<td>' . $value["heard"] . '</td>';
        echo '<td>' . $value["contact"] . '</td>';
        echo '<td>' . $value["comments"] . '</td>';
        }
    
    echo '</table>';
} else {
    echo 'No Results Found';
}

    ?>
    </body>
</html>
