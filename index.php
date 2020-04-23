<?php
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Headers: Content-Type');
// https://github.com/malithmcr/react-php-contact-form/blob/master/api/contact/index.php

$rest_json = file_get_contents("php://input");
$_POST = json_decode($rest_json, true);

$didi = $_POST['fname']."ceci est geniale";

http_response_code(200);

echo json_encode(
        [ 
           "post" => $didi,
           "robert" => $_POST['lname']

        ]
    ); 
