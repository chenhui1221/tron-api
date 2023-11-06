<?php
include_once '../vendor/autoload.php';
$headers = [
    'TRON-PRO-API-KEY' => '912123ce-0b90-4690-8e90-a7440100e63c',
    'Content-Type' => 'application/json',
    'debug'=>true
];
$fullNode = new \IEXBase\TronAPI\Provider\HttpProvider('https://api.trongrid.io',3000, false, false, $headers);
$solidityNode = new \IEXBase\TronAPI\Provider\HttpProvider('https://api.trongrid.io',3000, false, false, $headers);
$eventServer = new \IEXBase\TronAPI\Provider\HttpProvider('https://api.trongrid.io',3000, false, false, $headers);

try {
    $tron = new \IEXBase\TronAPI\Tron($fullNode, $solidityNode, $eventServer);
} catch (\IEXBase\TronAPI\Exception\TronException $e) {
    exit($e->getMessage());
}


$tron->setAddress('TDCQe6G6KBNrYNzQT8BVbaxxMW7isTymHo');
$balance = $tron->getcandelegatedmaxsize(1);
var_dump($balance);