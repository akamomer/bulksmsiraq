#!/bin/bash

curl -X POST https://gateway.standingtech.com/api/v3/sms/send -H "Authorization: Bearer 49|LNFe8WJ7CPtvl2mzowAB4ll4enbFR0XGgnQh2qWY" -H "Content-Type: application/json" -H "Accept: application/json" --data-binary @- <<DATA
{"recipient":"9647xxxxxxxxx","sender_id":"SenderID","type":"plain","message":"This is a test message"
}
DATA
