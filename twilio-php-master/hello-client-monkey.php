<?php
include 'Services/Twilio/Capability.php';
 
// put your Twilio API credentials here
$accountSid = 'AC0db1aa898fb2f75a712f6cbe48caa861';  //Eric
$authToken  = 'c3685efa1fdb7faca3b175b2a5ea46d3';
 
$capability = new Services_Twilio_Capability($accountSid, $authToken);
$capability->allowClientOutgoing('APabe7650f654fc34655fc81ae71caa3ff');
$token = $capability->generateToken();
?>
 
<!DOCTYPE html>
<html>
  <head>
    <title>Hello Client Monkey 1</title>
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
        $("#log").text("Ready");
      });
 
      Twilio.Device.error(function (error) {
        $("#log").text("Error: " + error.message);
      });
 
      Twilio.Device.connect(function (conn) {
        $("#log").text("Successfully established call");
      });
 
      function call() {
        Twilio.Device.connect();
      }
    </script>
  </head>
  <body>
    <button class="call" onclick="call();">
      Call
    </button>
 
    <div id="log">Loading pigeons...</div>
  </body>
</html>