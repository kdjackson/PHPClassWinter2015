<?php

    /*
     * The idea for the model, it's will hold the logic
     * to get or handle your data for the view
     * 
     * The idea of the View is to display data passed from the 
     * Model
     */


    /*
     * We inculde important files that will be used
     * for all the pages, such as config files
     * or database connections
     */
    include_once './models/db.php';
    
    /*
     * Inculde the header for the site view
     */
    include_once './views/header.php';
    
    
     /*
     * The header will inculde links that will pass
      * PHP in the URL what page to display
     */
    $view = filter_input(INPUT_GET, 'view');
    
    /*
     * With the view value below is the controller
     * that will determine what model and what view
     * to connect and display
     */
    if ( $view == 'all' ) {
        include_once './models/getnames.php';
        include_once './views/all.php';
    } else if( $view == 'details' ) {
        include_once './models/getdetail.php';
        include_once './views/details.php';
    } else {
        echo '<h2>Home</h2>';
    }
    
     /*
     * Inculde the footer for the site view
     */
    include_once './views/footer.php';