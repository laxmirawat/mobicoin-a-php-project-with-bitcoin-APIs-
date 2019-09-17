<?php
include('vendor/autoload.php');
/**
 * Don't forget to include composer autoloader by uncommenting line below
 * if you're not already done it anywhere else in your project.
 **/
// require 'vendor/autoload.php';

use Denpa\Bitcoin\Client as BitcoinClient;
echo Denpa\Bitcoin\to_ubtc(0.001);
$bitcoind = new BitcoinClient('http://imran:whoami@182.73.7.201:18332/');
//$bitcoind = new BitcoinClient('http://mobi:Mobiloitte1@api.infura.io/v1/jsonrpc/ropsten:8332/');

//$result = $bitcoind->request('listaccounts');  //For Listing Accounts on server

//$result = $bitcoind->request('getblockcount');  
$result = $bitcoind->request('getaccountaddress','me');   // For creating account and receive bitcoin address in response
//$result = $bitcoind->request('getbalance','2N4McHQf7fYN5surycDSpT2oRacro121ub5'); // get balance of btc address
//$result = $bitcoind->request('listtransactions','2N4McHQf7fYN5surycDSpT2oRacro121ub5'); // get list of transaction of BTC address
//$result = $bitcoind->request('sendtoaddress', '2N4McHQf7fYN5surycDSpT2oRacro121ub5', 0.06); // transaction
print_r($result);
?>