#!/bin/bash

curl -X POST https://gateway.standingtech.com/api/v4/sms/send -H "Authorization: Bearer API_KEY" -H "Content-Type: application/json" -H "Accept: application/json" --data-binary @- <<DATA
{"recipient":"9647xxxxxxxxx","sender_id":"SenderID","type":"plain","message":"This is a test message"
}
DATA
