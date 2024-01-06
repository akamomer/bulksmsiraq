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

Example request for Multiple Numbers
PHP

```curl
curl -X POST https://gateway.standingtech.com/api/v3/sms/send \
-H 'Authorization: Bearer API_KEY' \
-H 'Content-Type: application/json' \
-H 'Accept: application/json' \
-d '{
"recipient":"31612345678,880172145789",
"sender_id":"YourName",
"type":"plain",
"message":"This is a test message",
"schedule_time=2021-12-20 07:00"
}'
```
Returns

Returns a contact object if the request was successful.
JSON

```json
{
    "status": "success",
    "data": "sms reports with all details",
}
```
If the request failed, an error object will be returned.
JSON

```json
{
    "status": "error",
    "message" : "A human-readable description of the error."
}
```
View an SMS
You can use StandingTech Bulk SMS Service's SMS API to retrieve information of an existing inbound or outbound SMS message.

You only need to supply the unique message id that was returned upon creation or receiving.

API Endpoint
https://gateway.standingtech.com/api/v4/sms/{uid}


```curl
curl -X GET https://gateway.standingtech.com/api/v4/sms/606812e63f78b \
-H 'Authorization: Bearer API_KEY' \
-H 'Content-Type: application/json' \
-H 'Accept: application/json' \
```
Returns

Returns a contact object if the request was successful.
JSON

```json
{
    "status": "success",
    "data": "sms data with all details",
}
```
If the request failed, an error object will be returned.
JSON

```json
{
    "status": "error",
    "message" : "A human-readable description of the error."
}
```
View all messages

API Endpoint
https://gateway.standingtech.com/api/v3/sms/

Example request

```curl
curl -X GET https://gateway.standingtech.com/api/v3/sms \
-H 'Authorization: Bearer API_KEY' \
-H 'Content-Type: application/json' \
-H 'Accept: application/json' \
```
Returns

Returns a contact object if the request was successful.
JSON

```json
{
    "status": "success",
    "data": "sms reports with pagination",
}
```
If the request failed, an error object will be returned.
JSON

```json
{
    "status": "error",
    "message" : "A human-readable description of the error."
}
```
