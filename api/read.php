<?php
//headers
header('Acces-Control-Allow-Oriin: *');
header('Content-Typr: Application/json');

// initializion our api which everything we have // what we are doing is just to call the included  file to this section.
include_once('../core/initialize.php');

//instantiate post

$post =new Post($db);