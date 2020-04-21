<?php
// header("Access-Control-Allow-Origin: *");
// header('Access-Control-Allow-Headers: Content-Type');
// $rest_json = file_get_contents("php://input");
// https://github.com/malithmcr/react-php-contact-form/blob/master/api/contact/index.php

$_POST = json_decode($rest_json, true);

if( empty($_POST['firstName']) && empty($_POST['email']) ) {
    echo json_encode(
        [
           "sent" => false,
           "message" => "ca ne marche pas du tout"
        ]
    ); 
    exit();
}

if ($_POST){
    //@important: Please change this before using
    http_response_code(200);
    $subject = 'Contact from: ' . $_POST['firstName'];
    $from = $_POST['email'];
    $message = $_POST['msg'];       
    //Actual sending email

} else {
 // tell the user about error
 echo json_encode(
     [
        "sent" => false,
        "message" => $SendMailFailederrorMessage
     ]
 );
}
