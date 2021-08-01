<?php

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('978277655-goveh973qg7q6tctq35k4amatlebf9ok.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('_qIZ3BZqGSMvJcOAgylVcf-C');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://127.0.0.1/spicymystery/googlelogin.php');

//
$google_client->addScope('email');

$google_client->addScope('profile');

//start session on web page

?>