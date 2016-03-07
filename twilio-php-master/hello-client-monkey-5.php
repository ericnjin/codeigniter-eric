<?php
include 'Services/Twilio/Capability.php';
 
// put your Twilio API credentials here
  // $accountSid = 'ACxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx';
  // $authToken  = 'yyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy';
   
  // // put your Twilio Application Sid here
  // $appSid     = 'APzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz';

$accountSid = 'AC0db1aa898fb2f75a712f6cbe48caa861';  //eric
$authToken  = 'c3685efa1fdb7faca3b175b2a5ea46d3';
 
// put your Twilio Application Sid here
$appSid     = 'AP4c9f6e01f5f48ba6107060e0fa4cd89f';  //Eric
//AP4c9f6e01f5f48ba6107060e0fa4cd89f
 
// put your default Twilio Client name here
$clientName = 'jenny';
 
// get the Twilio Client name from the page request parameters, if given
if (isset($_REQUEST['client'])) {
    $clientName = $_REQUEST['client'];
}
 
$capability = new Services_Twilio_Capability($accountSid, $authToken);
$capability->allowClientOutgoing($appSid);

echo $clientName;

$capability->allowClientIncoming($clientName);
$token = $capability->generateToken();
?>
 
<!DOCTYPE html>
<html>
  <head>
    <title>Hello Client Monkey 5</title>
    <script type="text/javascript"
      src="//media.twiliocdn.com/sdk/js/client/v1.3/twilio.min.js"></script>
    <script type="text/javascript"
      src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js">
    </script>
    <link href="http://static0.twilio.com/marketing/bundles/quickstart/client.css"
      type="text/css" rel="stylesheet" />
    <script type="text/javascript">
 
      Twilio.Device.setup("<?php echo $token; ?>");
 
      Twilio.Device.ready(function (device) {
        $("#log").text("Client '<?php echo $clientName ?>' is ready");
      });
 
      Twilio.Device.error(function (error) {
        $("#log").text("Error: " + error.message);
      });
 
      Twilio.Device.connect(function (conn) {
        $("#log").text("Successfully established call");
      });
 
      Twilio.Device.disconnect(function (conn) {
        $("#log").text("Call ended");
      });
 
      Twilio.Device.incoming(function (conn) {
        $("#log").text("Incoming connection from " + conn.parameters.From);
        // accept the incoming connection and start two-way audio
        conn.accept();
      });
 
      function call() {
        // get the phone number or client to connect the call to
        params = {"PhoneNumber": $("#number").val()};
 window.alert($("#number").val());     
        Twilio.Device.connect(params);
      }
 
      function hangup() {
        Twilio.Device.disconnectAll();
      }
    </script>
  </head>
  <body>
    <button class="call" onclick="call();">
      Call
    </button>
 
    <button class="hangup" onclick="hangup();">
      Hangup
    </button>
 
    <input type="text" id="number" name="number"
      placeholder="Enter a phone number or client to call"/>
 
    <div id="log">Loading pigeons...</div>
  </body>
</html>