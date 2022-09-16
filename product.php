<?php

require "vendor/autoload.php";

$stripe = new \Stripe\StripeClient(
  'sk_test_51LgIInEE1hISctuLDezYYoCEMH9RAKyIHWAJybswLqXIPp06AGGdIUrQpmE5ewkbGLzcpJpHiR5vluN05fng9lZm00F82KK55x'
);
$product = $stripe->products->retrieve(
	'prod_MP8mQVLPlFEzJU',
	[]
);
$price = $stripe->prices->retrieve('price_1LgKV8EE1hISctuLZThBOWRI',[]);
?>
<html>
  <style>
    body {
          background-image: url('https://images.unsplash.com/photo-1602108987428-4768d7c7ecbe?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8OXx8fGVufDB8fHx8&w=1000&q=80') ;
          background-repeat:no-repeat;
          height: 100%;
          background-size: cover;
      }
  </style>
  <head>
    <title>Future Glasses</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Product 123</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Products </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
    </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
  </div>
</nav>

<body>
<section>
<div class="container text-center">
  <div class="row justify-content-md-center">
      <div class="product">
        <div class="col"></br>
          <img src="<?php echo array_pop($product->images); ?>" alt="<?php echo $product->name; ?>" width="325" height="350" />
        </div>
          <div class="description">
            <div class="col">
              <h3><?php echo $product->name; ?></h3>
              <p><strong><?php echo $product->description; ?></strong></p>
              <h5><?php echo strtoupper($price->currency); ?> <?php echo $price->unit_amount_decimal; ?></h5>
                <form action="/stripe/my-product.php" method="POST">
                  <button type="submit" id="checkout-button">Checkout</button>
               </form>
            </div>
        </div>
      </div>
  </div>
</section>
</div>
  </body>
</html>