<?php

use GuzzleHttp\Client;

include 'vendor/autoload.php';

$client = new Client();

$response = $client->get('https://itea.ua');

echo $response->getBody()->getContents();