<?php
	// Include the Twilio PHP library
	require 'Services/Twilio.php';

	// Twilio REST API version
	$version = "2010-04-01";

	// Set our Account SID and AuthToken
	// $sid = 'AC0db1aa898fb2f75a712f6cbe48caa861';
	// $token = 'c3685efa1fdb7faca3b175b2a5ea46d3';

	//Test 
	$sid = 'ACe578df6510ae5171307cf2adf61dd8bc';
	$token ='78c9a7a013dd91f1532f7ba1948aced3';
	
	// A phone number you have previously validated with twilioilio
	//$phonenumber = '4151234567';
	//$phonenumber = '+19713199933';  // Eric's phone number
	$phonenumber = '+13256033196';  // Eric's phone number

	$receiver = '+19713199933';	
	
	// Instantiate a new Twilio Rest Client
	$client = new Services_Twilio($sid, $token, $version);

	try {
		// Initiate a new outbound call
		$call = $client->account->calls->create(
			$phonenumber, // The number of the phone initiating the call
			$receiver, // The number of the phone receiving call
			'http://demo.twilio.com/welcome/voice/' // The URL Twilio will request when the call is answered
		);
		echo 'Started call: ' . $call->sid;
	} catch (Exception $e) {
		echo 'Error: ' . $e->getMessage();
	}

?>