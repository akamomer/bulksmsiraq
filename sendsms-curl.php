<?php

$url = "https://gateway.standingtech.com/api/v3/sms/send";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Authorization: Bearer 49|LNFe8WJ7CPtvl2mzowAB4ll4enbFR0XGgnQh2qWY",
   "Content-Type: application/json",
   "Accept: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = <<<DATA
{"recipient":"9647xxxxxxxxx",
"sender_id":"YourName",
"type":"plain",
"message":"This is a test message"
}
DATA;

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
var_dump($resp);

?>

