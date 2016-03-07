<?php
// this line loads the library 
require "/Services/Twilio.php"; 
 
$account_sid = 'AC0db1aa898fb2f75a712f6cbe48caa861'; 
$auth_token = 'c3685efa1fdb7faca3b175b2a5ea46d3'; 
$client = new Services_Twilio($account_sid, $auth_token); 
 
$numbers = $client->account->available_phone_numbers->getList('US', 'Local', array(          
	'ExcludeAllAddressRequired' => "false", 
	'ExcludeLocalAddressRequired' => "false", 
	'ExcludeForeignAddressRequired' => "false", 
)); 
 
foreach ($numbers as $number) { 
	echo $number->phone_number; 
}
?>