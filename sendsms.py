import requests
from requests.structures import CaseInsensitiveDict

url = "https://gateway.standingtech.com/api/v3/sms/send"

headers = CaseInsensitiveDict()
headers["Authorization"] = "Bearer 49|LNFe8WJ7CPtvl2mzowAB4ll4enbFR0XGgnQh2qWY"
headers["Content-Type"] = "application/json"
headers["Accept"] = "application/json"

data = """
{"recipient":"9647xxxxxxxxx","sender_id":"SenderID","type":"plain","message":"This is a test message"
}
"""


resp = requests.post(url, headers=headers, data=data)

print(resp.status_code)

