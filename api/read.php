<?php
//headers
header('Acces-Control-Allow-Oriin: *');
header('Content-Typr: Application/json');

// initializion our api which everything we have // what we are doing is just to call the included  file to this section.
include_once('../core/initialize.php');

//instantiate post. // the db is passed here to the post class as we are inheriting it from the config.php file

$post =new Post($db);

//blog post query  this is what we are doing is just to call the included  file to this section.
$result = $post->read();
