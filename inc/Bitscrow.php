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
        //Double check all required variables are in config.php
        if (!isset($config['dbname']) || !isset($config['dbuser']) || !isset($config['dbpass']) || !isset($config['dbprefix']) || !isset($config['dbhost']))
        {
            throw new exception('Some config items are missing.');
        }
        
        //Create connector to MySQL db
        $this->$db = new DB($config);
    }
}

?>
