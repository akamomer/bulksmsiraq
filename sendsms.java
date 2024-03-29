URL url = new URL("https://gateway.standingtech.com/api/v3/sms/send");
HttpURLConnection http = (HttpURLConnection)url.openConnection();
http.setRequestMethod("POST");
http.setDoOutput(true);
http.setRequestProperty("Authorization", "Bearer API_KEY");
http.setRequestProperty("Content-Type", "application/json");
http.setRequestProperty("Accept", "application/json");

String data = "{\"recipient\":\"9647xxxxxxxxx\",\"sender_id\":\"SenderID\",\"type\":\"plain\",\"message\":\"This is a test message\"\n}";

byte[] out = data.getBytes(StandardCharsets.UTF_8);

OutputStream stream = http.getOutputStream();
stream.write(out);

System.out.println(http.getResponseCode() + " " + http.getResponseMessage());
http.disconnect();

