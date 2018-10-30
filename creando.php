<?php
$host = 'http://localhost/wordpress/wp-json/wp/v2/posts/';
$data = array('title' => 'Titulo Post Nuevooooo', 'content' => 'Contenido nueva entrada', 'status' => 'publish');
$data_string = json_encode($data);
$headers = array(
    'Content-Type:application/json',
    'Content-Length: ' . strlen($data_string),
    'Authorization: Basic '. base64_encode('orlandoesca:Omalibran2016@')
);
$ch = curl_init($host);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
$result = curl_exec($ch);
curl_close($ch);
echo($result);
