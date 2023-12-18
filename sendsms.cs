using System;
using System.Net.Http;
using System.Text;
class Program
{
    static void Main()
    {
        var client = new HttpClient();
        client.DefaultRequestHeaders.Add("Authorization", "Bearer API_KEY");
var data = @"{
""recipient"":""9647xxxxxxxxx"",
""sender_id"":""SENDERID"",
""type"":""plain"",
""message"":""This is test using C# to send SMS""
}";

var content = new StringContent(data, Encoding.UTF8, "application/json");

var response = client.PostAsync("https://gateway.standingtech.com/api/v4/sms/send", content).Result;
var responseContent = response.Content.ReadAsStringAsync().Result;
Console.WriteLine(responseContent);
    }
}
