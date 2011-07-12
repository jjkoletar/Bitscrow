<?php


/**
 * Bitscrow Main Class
 *
 * @author jjkoletar
 */
class Bitscrow {
    public $db;
    function __construct() {
        //Load config
        require_once 'config.php';
        require_once 'func.php';
        //Double check all required variables are in config.php
        if (!configCheck($config))
        {
            throw new exception('Some config items are missing.');
        }
        
        //Create connector to MySQL db
        require_once 'inc/DB.php';
        $this->db = new DB($config);
    }
}

?>
