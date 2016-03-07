<?php
 
require "/Services/Twilio.php";
 
// set your AccountSid and AuthToken from www.twilio.com/user/account
$AccountSid = "AC0db1aa898fb2f75a712f6cbe48caa861";
$AuthToken = "c3685efa1fdb7faca3b175b2a5ea46d3";
 
$client = new Services_Twilio($AccountSid, $AuthToken);

// $FromID = "+12036017766";
// $ToID = "+19713199933";

$FromID = "+19713199933";
$ToID = "+821031686084";


//var_dump($client);
 if($client){

 		$message = $client->account->messages->create(array(
		    "From" => $FromID,
		    "To" => $ToID,
		    "Body" => "Hi Eric ..Test message!",
		));
		var_dump($message);
		 
		// Display a confirmation message on the screen
		echo "Sent message {$message->sid}";

 }
	
?>
