<?php

init_set('display_errors',1)

require_once('stripe/init.php');

// Set your secret key: remember to change this to your live secret key in production
// See your keys here https://dashboard.stripe.com/account/apikeys
\Stripe\Stripe::setApiKey("sk_test_HW1iZaTV09UY3wtfXcHDkYIi");

// Get the credit card details submitted by the form
$token = $_POST['stripeToken'];

// Create the charge on Stripe's servers - this will charge the user's card
try {
$charge = \Stripe\Charge::create(array(
  "amount" => 2000, // amount in cents, again
  "currency" => "cad",
  "source" => $token,
  "description" => "Example charge")
);
} catch(\Stripe\Error\Card $e) {
  // The card has been declined
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="Martinegv"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="http://martinegv.me/"/>
    <meta property="og:image" content="http://martinegv.me/Img/favicon.png"/>
    <meta property="og:site_name" content="Martine Création"/>
    <meta property="og:description" content="Ce site montre les produits que l'artiste Martine peut vendre. "/>

    <title>Merci</title>
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="Css/css.css">
       <link rel="shortcut icon" type="image/x-icon" href="Img/favicon.ico" />
</head>
<body>
 <h1>Merci !!!</h1>
 <button><a href="index.html">Revenir au site</a></button>
</body>
</html>