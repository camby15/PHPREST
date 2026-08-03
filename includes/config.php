<?php

    $db_user = 'root';
    $db_password = '';
    $db_name     = 'phprest';

    $db = new PDO('mysql:host=127.0.0.1;dbname=' .$db_name. ';charset=utf8', $db_user, $db_password);

    //set some db Attribute 
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $db->setAttribute(PDO::MYSQL_ATTR  _USE_BUFFERED_QUERY, true);        //this is to make or set up our databases  connection 
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    define('APP_NAME', 'PHP REST API')

?>