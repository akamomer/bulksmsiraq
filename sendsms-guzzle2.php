<?php
require "guzzle/vendor/autoload.php";
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

// Instantiate a Guzzle client
$client = new Client();
$now = date("Y-m-d H:i:s");
// Set the request parameters
$url = 'https://gateway.standingtech.com/api/v3/sms/send';
$authToken = 'API_KEY';
$body = [
    'recipient' => '96475xxxxxxxx',
    'sender_id' => 'SenderID',
    'type' => 'plain',
    'message' => 'This is a test message using Guzzle at '.$now,
];

// Set the headers
$headers = [
    'Authorization' => 'Bearer ' . $authToken,
    'Content-Type' => 'application/json',
];

// Send the request
try {
    $response = $client->post($url, [
        'headers' => $headers,
        'json' => $body,
    ]);

    // Handle the response
    $statusCode = $response->getStatusCode();
    $responseData = json_decode($response->getBody()->getContents(), true);
	echo "<pre>";
	print_r($responseData);
    // Process the response data as needed
    // ...
} catch (RequestException $e) {
    // Handle the request exception
    $statusCode = $e->getResponse()->getStatusCode();
    $responseData = json_decode($e->getResponse()->getBody()->getContents(), true);
	echo "<pre>";
	print_r($responseData);
    // Process the error response data as needed
    // ...
}
?>
