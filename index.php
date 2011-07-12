<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'inc/Bitscrow.php';
        $bitscrow = new Bitscrow();
        print_r($bitscrow->db->query("SELECT * FROM bitscrow_foo"));
        print_r($bitscrow);
        ?>
    </body>
</html>
