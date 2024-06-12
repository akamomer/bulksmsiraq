BulkSMSIraq.Com

SMS API
SMS API allows you to send and receive SMS messages to and from any country in the world through a REST API. Each message is identified by a unique random ID so that users can always check the status of a message using the given endpoint.

API Endpoint
https://gateway.standingtech.com/api/v4/sms/send

StandingTech Bulk SMS Service's Programmable SMS API enables you to programmatically send SMS messages from your web application. First, you need to create a new message object. StandingTech Bulk SMS Service returns the created message object with each request.

Send your first SMS message with this example request.

API Endpoint

https://gateway.standingtech.com/api/v4/sms/send


```curl
curl -X POST https://gateway.standingtech.com/api/v3/sms/send \
-H 'Authorization: Bearer API_KEY' \
-H 'Content-Type: application/json' \
-H 'Accept: application/json' \
-d '{
"recipient":"31612345678",
"sender_id":"YourName",
"type":"plain",
"message":"This is a test message"
}'
```

