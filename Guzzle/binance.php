<?php

require_once "vendor/autoload.php";

# Configuration API cible
$cli = new \GuzzleHttp\Client([ 'base_uri'=>'https://api.binance.com',
                                'verify'=>false,
                                'curl'=>[CURLOPT_SSL_VERIFYPEER=>false] ]);

# Requete API 1
$resp = $cli->request('GET','/api/v3/time');
echo $resp->getBody();

# Requete API 2
$resp = $cli->request('GET','/api/v3/exchangeInfo');
echo $resp->getBody();

# Requete API 3 ( avec 1 param )
$resp = $cli->request('GET','/api/v3/avgPrice', [
    'query'=> [ 'symbol'=>'BNBEUR' ]     ]);
echo $resp->getBody();

# Requete API 4 ( avec plusieurs params )
$resp = $cli->request('GET','/api/v3/klines', [
    'query'=> [ 'symbol'=>'EURUSDT',
                'interval'=>'1d',
                'limit'=>10]     ]);
var_dump( json_decode($resp->getBody()) );