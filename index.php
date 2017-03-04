<?php

// Report all errors except E_NOTICE
// This is the default value set in php.ini
error_reporting(E_ALL & ~E_NOTICE);

$VERIFY_TOKEN = '<YOUR_VERIFY_TOKEN>';
$PAGE_ACCESS_TOKEN = '<YOUR_PAGE_ACCESS_TOKEN>';

$challenge = $_REQUEST['hub_challenge'];
$verify_token = $_REQUEST['hub_verify_token'];
if ($verify_token === $VERIFY_TOKEN) {
  	//If the Verify token matches, return the challenge.
  	echo $challenge;
}else {

	// **************************
	// Paste Step 8.txt Part A Here.
	// **************************

	print "Hello World!"; // Please delete this line on step 8.

}


// **************************
// Paste Step 8.txt Part B Here.
// **************************
