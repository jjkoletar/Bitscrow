<?php

/**
 * Bitscrow's slightly abstracted connection to the DB
 *
 * @author jjkoletar
 */
class DB {
    private $_con;
    
    public function __construct($cfg) {
        //Test connection to DB
        $this->$_con = mysql_connect($cfg['dbhost'], $cfg['dbuser'], $cfg['dbpass']);
        if ($this->$_con)
        {
            throw new exception('Could not connect to DB: ' . mysql_error($this->$_con));
        }
        mysql_close($this->$_con);
        
    }
}

?>
