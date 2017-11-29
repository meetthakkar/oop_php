<?php
include_once 'common.inc.php';
/**
*	Charge a Customer Card Via Stripe
*/
//Disable HTTP Cache
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Pragma: no-cache'); // HTTP 1.0.
header('Expires: 0'); // Proxies.
//Respond with JSON content
header('Content-Type: application/json');
// Authenticate to the Stripe API
\Stripe\Stripe::setApiKey($st_test_secret_key);
// Data to return
$return_data = array();
// Success or failure
$return_data["success"] = false;
// Create the charge on Stripe's servers - this will charge the user's card
try{
	// Create a Stripe\Charge OOP object
	$charge = \Stripe\Charge::create(array(
		"amount" => $_POST['amount'] * 100, // Convert to cents
		"currency" => "usd",
		"source" => $_POST['stripeToken'],
		"receipt_email" => $_POST['receipt_email'],
		"statement_descriptor" => substr(strtoupper($_POST['statement_descriptor']), 0, 22),
		"description" => $_POST['quantity'] . ' ' . $_POST['description'])
	);
	$return_data["success"] = true;
	//$return_data["charge"]["id"] = $charge->id;
	//$return_data["charge"]["status"] = $charge->status;
//Invalid request errors arise when your request has invalid parameters.
}catch(\Stripe\Error\InvalidRequest $e){
	error_log("CRITICAL ERROR: Stripe InvalidRequest");
	error_log('Stripe InvalidRequest - httpStatus:' . $e->getHttpStatus());
	$body = $e->getJsonBody();
	$error_info = $body['error'];
	if(isset($error_info['message'])){
		error_log('Stripe InvalidRequest - message:' . $error_info['message']);
	}
}
echo json_encode($return_data);
?>