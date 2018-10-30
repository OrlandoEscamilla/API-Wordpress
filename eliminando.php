<?php
$host = 'http://localhost/wordpress/wp-json/wp/v2/posts/13';
$headers = array(
    'Content-Type:application/json',
    'Authorization: Basic '. base64_encode('orlandoesca:Omalibran2016@')
);
$ch = curl_init($host);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
$result = curl_exec($ch);
curl_close($ch);
echo($result);
