<?php

//echo "This page is logout page.";

$request = file_get_contents("php://input");
$req     = json_decode($request);

//var_dump($req);
$debug = false;

if ($debug) {
    http_response_code(400);
    echo json_encode(['code'=>'001', 'message'=>'Database Server Down...']);
} else {

}