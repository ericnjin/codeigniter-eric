<?php

// this line loads the library 
require('/Services/Twilio.php'); 
 
$account_sid = 'AC0db1aa898fb2f75a712f6cbe48caa861'; 
$auth_token = 'c3685efa1fdb7faca3b175b2a5ea46d3'; 

$client = new Services_Twilio($account_sid, $auth_token); 
$ApplicationSid = 'PN6c0f19963022cb5dcddc07ce41a5dde9';
$To = '+13256033196';
 
$client->account->calls->create('+19713199933', $To, $ApplicationSid, array( 
	'Method' => 'GET',  
	'FallbackMethod' => 'GET',  
	'StatusCallbackMethod' => 'GET',    
	'Record' => 'false', 
));
?>
