<?php


    $dbs = $db->prepare('select * from demo');  
        
    $names = array();
    
    if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
          
        $results = $dbs->fetchAll(PDO::FETCH_ASSOC);
        
    }

