<?php
$access_token = 'ojaNU7F8U0qi7LGBCW/mk2PGNKyBY/hfzOyNGy7Qc5AqafQvJ34eODoyyc5SDin24FrmnbjNMxqtWUEX16BZoQtlOSTrCNz9RKOMSDxJBgX0rmwlesp3RNiJA5ol8uIKHVYHHeo1cOOzNjeRTmKrOAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

