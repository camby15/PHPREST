<?php
//headers
header('Acces-Control-Allow-Origin: *');
header('Content-Type: Application/json');

// initializion our api which everything we have // what we are doing is just to call the included  file to this section.
include_once('../core/initialize.php');

//instantiate post. // the db is passed here to the post class as we are inheriting it from the config.php file

$post =new Post($db);

//blog post query  this is what we are doing is just to call the included  file to this section.
$result = $post->read();
//get the row count
$num = $result->rowCount();

if($num > 0){
    $post_arr = array();
    $post_arr['data'] = array();

    while($row = $result->fetch(PDO::FETCH_ASSOC)){
        extract($row);       // this is what we are doing is just to call the included  file to this section.

        $post_item = array(
            'id' => $id,
            'title' => $title,
            'body' => html_entity_decode($body),
            'author' => $author,
            'category_id' => $category_id,
            'category_name' => $category_name
        );

        //push to 'data'
        array_push($post_arr['data'], $post_item);
    }
    //convert to JSON to output
    echo json_encode($post_arr);
}else{
    //no posts
    echo json_encode(
        array('message' => 'No posts found')
    );
}