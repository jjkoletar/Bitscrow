<?php
require_once('jsonRPCClient.php');
require_once('config.php');

function rpcConnect() {
    $rpc = new jsonRPCClient('http://' . $config['rpcuser'] . ':' . $config['rpcpass'] . '@' . $config['rpchost'] . ':' . $config['rpcport'] . '/');
    return $rpc;
}

function configCheck() {
    if(!isSet($config['dbhost']) || !isSet($config['dbname']) || !isSet($config['dbuser']) || !isSet($config['dbpass']) || !isSet($config['dbprefix']) || !isSet($config['rpcuser']) || !isSet($config['rpcpassword']) || !isSet($config['rpcport']) || !isSet($config['rpchost'])) {
        return false;
    }
    else {
        return true;
    }
}
?>