import requests
from requests.structures import CaseInsensitiveDict

url = "https://gateway.standingtech.com/api/v4/sms/send"

headers = CaseInsensitiveDict()
headers["Authorization"] = "Bearer API_KEY"
headers["Content-Type"] = "application/json"
headers["Accept"] = "application/json"

data = """
{"recipient":"9647xxxxxxxxx","sender_id":"SenderID","type":"plain","message":"This is a test message"
}
"""


resp = requests.post(url, headers=headers, data=data)

print(resp.status_code)

