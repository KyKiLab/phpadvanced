<?php

use GuzzleHttp\Client;

include 'vendor/autoload.php';

$client = new Client();

$response = $client->request('GET', 'https://itea.ua');

echo $response->getBody()->getContents();