<?php

$postdata = array(
    'recipient' => '9647xxxxxxxxx',
    'sender_id' => 'SenderID',
    'type' => 'plain',
    'message' => 'This is a test message',
);

$opts = array(
    'http' => array(
        'method'  => 'POST',
        'header'  => "Authorization: Bearer 4|API_KEY\r\n".
        "Content-type: application/json\r\n".
        "Accept: application/json\r\n",
        'content' => json_encode($postdata)
    ),
    'ssl'  => array( 
        'verify_peer'      => false,
        'verify_peer_name' => false,
    )

);
/*

*/
$context = stream_context_create($opts);

$result = file_get_contents('https://sms.standingtech.com/api/v3/sms/send', false, $context);
var_dump($result);
