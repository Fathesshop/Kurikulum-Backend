<?php

require_once __DIR__. '/vendor/autoload.php';

$client = new GuzzleHttp\Client();
$res = $client->request('POST', 'https://api.pondokprogrammer.com/api/student_login', [
    'form_params' => [
        'email' => 'fathesshop@gmail.com', 'password' => 'Fathesshop24'
        ]
]);
// echo $res->getStatusCode();
// // "200"
// echo $res->getHeader('content-type')[0];
// 'application/json; charset=utf8'
// $data = $res->getBody();

// $response = (string) $res->getBody();
// $response =json_decode($response); // Using this you can access any key like below

// $key_value = $response->key_name; //access key  

$response = json_decode($res->getBody(),true);
$key_value =   $response['token'];//access key
echo "$key_value";

