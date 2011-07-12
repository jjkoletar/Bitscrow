<?php

/**
 * Bitscrow's slightly abstracted connection to the DB
 *
 * @author jjkoletar
 */
class DB {
    private $_con;
    
    public function __construct() {
        //Test connection to DB
        include('config.php');
        $this->_con = mysql_connect($config['dbhost'], $config['dbuser'], $config['dbpass']);
        if (!$this->_con)
        {
            throw new exception('Could not connect to DB: ' . mysql_error($this->_con));
        }
        mysql_close($this->_con);
    }
    public function query($sql)
    {
        include('config.php');
        $this->_con = mysql_connect($config['dbhost'], $config['dbuser'], $config['dbpass']);
        mysql_select_db($config['dbname'], $this->_con);
        $query = mysql_query($sql, $this->_con);
        if (!$query)
        {
            throw new Exception('Query Error:' . mysql_error($this->_con));
        }
        else {
            $arr =  mysql_fetch_array($query);
            return $arr;
        }
        mysql_close($this->_con);
        
    }
}

?>
