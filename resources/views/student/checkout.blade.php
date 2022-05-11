<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Accept a payment</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="A demo of a payment on Stripe" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="{{ asset('css/checkout.css') }}" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <script src="{{ asset('js/checkout.js') }}" defer></script>
  </head>
  <body>
 

    <!-- Display a payment form -->
    <form id="payment-form">
    <div>Amount to be paid: <strong> {{ strtoupper($data['currency']) . " ". number_format($data['amount']/100, 2) }}</strong></div><br />

      <div id="payment-element">
        <!--Stripe.js injects the Payment Element-->
      </div>
      <input type='hidden' id='paymentAmount' value="{{ $data['amount'] }}"/>
			<input type="hidden" id="transactId" value="{{ $data['transact_id'] }}" />
      <button id="submit">
        <div class="spinner hidden" id="spinner"></div>
        <span id="button-text">Pay now</span>
      </button>
      <div id="payment-message" class="hidden"></div>
    </form>
  </body>
</html>