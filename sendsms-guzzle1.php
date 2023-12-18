<?php
require "guzzle/vendor/autoload.php";
use GuzzleHttp\Client;

$client = new Client([
    // Base URI is used with relative requests
    'base_uri' => 'https://gateway.standingtech.com/api/v4/sms/',
]);
$now = date("Y-m-d H:i:s");
$body = <<<DATA
{"recipient":"9647xxxxxxxxx",
"sender_id":"Standing",
"type":"plain",
"message":"This is a test message using Guzzle at $now"
}
DATA;

$response = $client->request('POST', 'send', [
'headers' => [
    'Authorization'     => 'Bearer API_KEY',
    'Content-Type'     	=> 'application/json',
    'Accept'     		=> 'application/json',
    ],
//'stream' => true,
'body' => $body,
//'sink' => 'temp.txt',
//'verify' => false,

]);

$response = $response->getBody()->getContents();

echo "<pre>";
print_r(json_decode($response, true));

