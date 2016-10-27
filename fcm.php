<?php

$token = $_GET["id"];
$message = "Hi Hello";
$server_key = "AIzaSyCdRzjzd1v6GZ0892Ew8dNurONvsvzk6Ss";
$path_to_firebase_cm = 'https://fcm.googleapis.com/fcm/send';

$fields = array(
    'to' => $token,
    'notification' => array('title' => 'Working Good', 'body' => 'That is all we want'),
    'data' => array('message' => $message)
);

$headers = array(
    'Authorization:key=' . $server_key,
    'Content-Type:application/json'
);
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $path_to_firebase_cm);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));

$result = curl_exec($ch);
print_r($result);
curl_close($ch);
?>