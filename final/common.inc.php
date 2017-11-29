<?php
/**
* Common code for Stripe PHP lessons
*/
// Send startup errors to stdout(1) vs stderr (0)
ini_set('display_startup_errors', 1);
// Send runtime errors to stdout(1) vs stderr (0)
ini_set("display_errors", 1);
// PHP levels of error reporting
error_reporting(E_ALL);

// Stripe API keys
$st_test_secret_key = "sk_test_nJfDG2cvpY2KCNRoP6XtbGYA";
$st_test_public_key = "pk_test_keGuYWgiuNS4Of5qPQ0Yuev3";

// File path to the Strip library
$path_to_stripe_lib = dirname(__FILE__) . '/stripe/';

include_once($path_to_stripe_lib . 'init.php');
?>