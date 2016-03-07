<?php
// Get the PHP helper library from twilio.com/docs/php/install
require_once('/path/to/twilio-php/Services/Twilio.php'); // Loads the library

// Your Account Sid and Auth Token from twilio.com/user/account
// $sid = "ACdc5f132a3c49700934481addd5ce1659";
// $token = "{{ auth_token }}";

$account_sid = 'ACe0e3b92a6b00e55818e18152079abb86'; 
$auth_token = '4f5322eefd1a9fc55eabcf0b57f02196'; 

$client = new Services_Twilio($sid, $token);

// Get an object from its sid. If you do not have a sid,
// check out the list resource examples on this page
$key = $client->account->keys->get("SK2a0747eba6abf96b7e3c3ff0b4530f6e");
echo $key->friendly_name;
