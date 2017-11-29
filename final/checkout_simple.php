<?php
include_once 'common.inc.php';
include_once 'database.php';

$database->cart();
// General website data
$company_name = "Acme Widgets Inc.";
$bank_statement_descripton = "ACME-WIDGETS";
// Order Data
$description = "Widgets";
$quantity = 12;
$statement_descriptor = $bank_statement_descripton . ' ' . $quantity . ' ' . $description;
$amount = $total;
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Stripe Embedded Simple Form Using Ajax</title>
<link rel="stylesheet" type="text/css" href="normalize.css">
<link rel="stylesheet" type="text/css" href="base.css">
</head>
<body>
<div id="page-container" class="center-container">
	<header><h1 class="center-text">Stripe Checkout Embedded Simple Using Ajax</h1></header>
	<div class="form-container center-container">
		<p>Item: <?=$description?></p>
		<p>Quantity: <?=$quantity?></p>
		<p>Price: <?=$total?></p>
		<input type="hidden" id="stripe-pk" value="<?=$st_test_public_key?>"/>
		<input type="hidden" id="company-name" value="<?=$company_name?>"/>
		<input type="hidden" id="quantity" value="<?=$quantity?>">
		<input type="hidden" id="amount" value="<?=$amount?>">
		<input type="hidden" id="description" value="<?=$description?>">
		<input type="hidden" id="statement-descriptor" value="<?=$statement_descriptor?>">
		<p id="checkout-loading-message" class="checkout-message center-text">
			Loading ...
		</p>
		<script src="https://checkout.stripe.com/checkout.js"></script>
		<p id="checkout-btn-container" class="center-text">
			<a id="checkout-btn" href="#" class="pay-btn">Credit Card</a>
		</p>
		<p id="checkout-processing-message" class="checkout-message center-text">
			Processing ...
		</p>
		<p id="checkout-success-message" class="checkout-message center-text">
			Thank you for your order.
		</p>
		<p id="checkout-fail-message" class="checkout-message center-text error-message-text">
			Something Went Horribly Wrong!
		</p>
	</div>
</div>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="checkout_ui.js"></script>
</body>
</html>