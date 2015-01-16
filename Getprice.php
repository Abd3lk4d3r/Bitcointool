<?php
function get_url_contents($curr = 'btc_to_usd',$coin='btc'){  
$url = 'https://api.coinbase.com/v1/currencies/exchange_rates';
  
    $ch = curl_init();  
    $timeout = 40;  
    curl_setopt($ch, CURLOPT_URL, $url);  
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);  
    $result = curl_exec($ch);  
    $DATA = json_decode($result,true);
	// Case Coin to currency
	
	switch($coin){
	case 'btc' : 
	global $btctousd ;
	$btctousd = $DATA["$curr"];
 break ;
case  'ltc':
$a = file_get_contents("https://www.allcoin.com/api2/pair/LTC_BTC");
$b = json_decode($a,true);
	global $ltctousd ;
	$ltctousd = $DATA["$curr"]*$b['data']['trade_price'];
break;
case 'drk':
$a = file_get_contents("https://www.allcoin.com/api2/pair/DRK_BTC");
$b = json_decode($a,true);
global $drktobtc ;
$drktobtc = $DATA["$curr"]*$b['data']['trade_price'];
break;
default :
global $btctousd ;
$btctousd = $DATA["$curr"];
break;
	}
    curl_close($ch);   
  return $result;  }

// get_url_contents






if(!empty($_GET['currency'])){
$currency = $_GET['currency'];
$convert = "get_url_contents";
}


// get  prices : 


function localbitcoins(){  
$url = 'https://localbitcoins.com/bitcoinaverage/ticker-all-currencies/';
  
    $ch = curl_init();  
    $timeout = 40;  
    curl_setopt($ch, CURLOPT_URL, $url);  
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);  
    $result = curl_exec($ch);  
$b = json_decode($result,true);
global $id;
  $id = $b['USD']['avg_1h'];
}
function blockr($market){
$url = "http://btc.blockr.io/api/v1/coin/info";
  $ch = curl_init();  
    $timeout = 40;  
    curl_setopt($ch, CURLOPT_URL, $url);  
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);  
    $result = curl_exec($ch);  
	global $price;
	$price = json_decode($result,true);
	$price = $price['data']['markets']["$market"]['value']; 

}
$Get = "blockr";

// BTC -------------------------------------
if($_GET['coin'] == "btc"){

$total = 0;
if(preg_match("/localbitcoins/i",$_GET['arrays'])){
localbitcoins();
$total += $id;
}
if(preg_match("/btce/i",$_GET['arrays'])){ $Get("btce");$total +=$price;}
if(preg_match("/Bitstamp/i",$_GET['arrays'])){ $Get("bitstamp"); $total +=$price;}
if(preg_match("/coinbase/i",$_GET['arrays'])){  $Get("coinbase") ; $total +=$price;}

$amount = $_GET['amount'];
if(($_GET["currency"])=="EUR"){
$convert("usd_to_eur");
$total = $total*$btctousd;
}
if(($_GET["currency"])=="YEN"){
$convert("usd_to_cny");
$total = $total*$btctousd;
}
print($total);
}




// LTC -------------------------------------
if($_GET['coin'] == "ltc"){
// Ltc functions  { 

function btce(){
$url = file_get_contents("https://btc-e.com/api/2/ltc_usd/ticker");
$json = json_decode($url,true);
	global $btc;
   $btc = $json['ticker']['last'];
	}
//  vircurex function
function vircurex(){
$url = file_get_contents("https://api.vircurex.com/api/get_highest_bid.json?base=LTC&alt=USD");
$json = json_decode($url,true);
	global $vir;
   $vir = $json['value'];
	 }


// end of Ltc functions }


// calculator :
$total = 0;
$division = 0;

// btce :
if(preg_match("/btce/i",$_GET['arrays'])){ 
btce();
$total +=$btc;
}
// vircurex :
if(preg_match("/vircurex/i",$_GET['arrays'])){ 
vircurex();
$total +=$vir;}

if(($_GET["currency"])=="EUR"){
$convert("usd_to_eur");
$total = $total*$btctousd;
}
if(($_GET["currency"])=="YEN"){
$convert("usd_to_cny");
$total = $total*$btctousd;
}
print($total);
}



// Nvc -------------------------------------------------------
if($_GET['coin'] == "nvc"){
// Nvc functions  { 
function btce(){
$url = file_get_contents("https://btc-e.com/api/2/btc_usd/ticker");
$json = json_decode($url,true);
$btcusd = $json['ticker']['last']; 
$url2 = file_get_contents("https://btc-e.com/api/2/nvc_btc/ticker");
$json2 = json_decode($url2,true);
$nvc = $json2['ticker']['last'];
	global $btc;
   $btc = $nvc;
	}

// end of Nvc functions }


// calculator :
$total = 0;
// btce :
if(preg_match("/btce/i",$_GET['arrays'])){ 
btce();
$total +=$btc;
}

if(($_GET["currency"])=="EUR"){
$convert("usd_to_eur");
$total = $total*$btctousd;
}
if(($_GET["currency"])=="YEN"){
$convert("usd_to_cny");
$total = $total*$btctousd;
}
print($total);
}



//  PPC  ----------------------------------------------------
if($_GET['coin'] == "ppc"){
// ppc functions  { 

function btce($amount){
$url = file_get_contents("https://btc-e.com/api/2/btc_usd/ticker");
$json = json_decode($url,true);
$btcusd = $json['ticker']['last']; 
$url2 = file_get_contents("https://btc-e.com/api/2/ppc_btc/ticker");
$json2 = json_decode($url2,true);
$ppc = $json2['ticker']['last'];
	global $btc;
   $btc = ($ppc*$btcusd)*$amount;
	}
//  vircurex function
function vircurex($amount){
$url = file_get_contents("https://api.vircurex.com/api/get_highest_bid.json?base=PPC&alt=USD");
$json = json_decode($url,true);
	global $vir;
   $vir = $json['value']*$amount;
	 }


// end of ppc functions }


// calculator :
$total = 0;

// btce :
if(preg_match("/btce/i",$_GET['arrays'])){ 
btce(1);
$total +=$btc;
$division +=1;}
// vircurex :
if(preg_match("/vircurex/i",$_GET['arrays'])){ 
vircurex(1);
$total +=$vir;
$division +=1;}


if(!empty($_GET['action'])){
print $_GET['amount']/($total/$division);
}else {
print(($total/$division)*$_GET['amount']);
}
}

// -------------------------------------------------------------------

?>
