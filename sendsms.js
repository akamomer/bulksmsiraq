var url = "https://gateway.standingtech.com/api/v4/sms/send";

var xhr = new XMLHttpRequest();
xhr.open("POST", url);

xhr.setRequestHeader("Authorization", "Bearer API_KEY");
xhr.setRequestHeader("Content-Type", "application/json");
xhr.setRequestHeader("Accept", "application/json");

xhr.onreadystatechange = function () {
   if (xhr.readyState === 4) {
      console.log(xhr.status);
      console.log(xhr.responseText);
   }};

var data = `{"recipient":"9647xxxxxxxxx","sender_id":"SenderID","type":"plain","message":"This is a test message"
}`;

xhr.send(data);
