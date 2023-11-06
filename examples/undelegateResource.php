<?php
include_once '../vendor/autoload.php';


$fullNode = new \IEXBase\TronAPI\Provider\HttpProvider('https://api.trongrid.io');
$solidityNode = new \IEXBase\TronAPI\Provider\HttpProvider('https://api.trongrid.io');
$eventServer = new \IEXBase\TronAPI\Provider\HttpProvider('https://api.trongrid.io');

try {
    $tron = new \IEXBase\TronAPI\Tron($fullNode, $solidityNode, $eventServer);
} catch (\IEXBase\TronAPI\Exception\TronException $e) {
    exit($e->getMessage());
}

$tron->setAddress('TDCQe6G6KBNrYNzQT8BVbaxxMW7isTymHo');
$tron->setPrivateKey('');

try {
    $transfer = $tron->delegateResource( 'TEoDf2h2FYXL83pWoiqCeDT9MwBjCgCrYQ', 300);
} catch (\IEXBase\TronAPI\Exception\TronException $e) {
    die($e->getMessage());
}

var_dump($transfer);