<?php
require "vendor/autoload.php";

$stripe = new \Stripe\StripeClient(
  'sk_test_51LgIInEE1hISctuLDezYYoCEMH9RAKyIHWAJybswLqXIPp06AGGdIUrQpmE5ewkbGLzcpJpHiR5vluN05fng9lZm00F82KK55x'
);
$result= $stripe->products->delete(
  'prod_MP8UUhpUiLVwje',
  []
);
var_dump($result);