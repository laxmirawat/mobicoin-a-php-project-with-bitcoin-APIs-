<?php 
include('php-bitcoinrpc-master/vendor/autoload.php');
use Denpa\Bitcoin\Client as BitcoinClient;

$bitcoind = new BitcoinClient('http://imran:whoami@182.73.7.201:18332/');

$host ='localhost';
$user ='Dev_MobiCoin';
$pass ='aWSderobBj0#342@#5#%#Q';
$db ='Dev_MobiCoin_06Jun19_Ravi';

$con=mysqli_connect($host,$user,$pass,$db);
?>


