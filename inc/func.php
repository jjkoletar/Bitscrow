<?php
require_once('jsonRPCClient.php');
require_once('config.php');

function rpcConnect() {
    $rpc = new jsonRPCClient('http://' . $config['rpcuser'] . ':' . $config['rpcpass'] . '@' . $config['rpchost'] . ':' . $config['rpcport'] . '/');
    return $rpc;
}

function configCheck() {
    if(!isset($config['dbname']) || !isset($config['dbuser']) || !isset($config['dbpass']) || !isset($config['dbprefix']) || !isset($config['dbhost']) || !isSet($config['rpcuser']) || !isSet($config['rpcpassword']) || !isSet($config['rpcport']) || !isSet($config['rpchost'])) {
        return false;
    }
    else {
        return true;
    }
}
?>