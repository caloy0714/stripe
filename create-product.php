<?php
require "vendor/autoload.php";

$stripe = new \Stripe\StripeClient(
  'sk_test_51LgIInEE1hISctuLDezYYoCEMH9RAKyIHWAJybswLqXIPp06AGGdIUrQpmE5ewkbGLzcpJpHiR5vluN05fng9lZm00F82KK55x'
);
$result = $stripe->products->create([
  'name' => 'Pandesal',
  'name' => 'Cup',
  'name' => 'Phone',
]);
var_dump($result);

