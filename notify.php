<?php

// @ include
include("btce-api.php");
$BTCeAPI = new BTCeAPI("M4BN6HSD-1KXAFXMO-GBB49P06-ITNYFTQS-YQGXB258","ecb4d173b6d564e82bb063d1c2bee1c5a5641cd68ebf9ae1dbc02e323b29245c");



$host = $sethost;
$user = $setdbuser;
$pass = $setdbpass; 
$db = $setdb;
$con = mysql_connect($host,$user,$pass);
$db = mysql_select_db($db);
$result = mysql_query('select * from Data');
$date = date_create();
$timestamp = date('i');
 while ($row = mysql_fetch_array($result)) {
$count = $row[4]/60;
$pairs = $row[2];
$resul = $timestamp/$count;
if ((is_integer($resul))){
	
	$to = $row[1];
	$allpair = explode (",",$pairs);
$i=0;
foreach  ($allpair as $allpairs ){
	$price = $BTCeAPI->getPairTicker("$allpairs");
	$b = $price['ticker'];
		
	$message[$i++] = "<center> $allpairs : ".$b['buy'].'/'.$b['sell']."<br />--------------------------------------<br />
	<br />Pair : ".$allpairs." </br> buy : ".$b['buy']." Sell : ".$b['sell']." <br />High : ".$b['high']." Low : ".$b['low']." Average : ".$b['avg']."
	<br /><br />--------------------------------------\n <br /><br /><br />";
	$subject[$i++] = "$allpairs : ".$b['buy']." ";
}
$headers = 'From: Btc_Api@elmeda.net' . "\r\n" .
    'Reply-To: Btc_Api@elmeda.net' . "\r\n" .
	"MIME-Version: 1.0\r\n".
	"Content-Type: text/html; charset=UTF-8\r\n".
    'X-Mailer: PHP/ ' . phpversion();
mail($to, implode("\n",$subject), (implode("\n",$message)."<br /><br /> Token : ".$row['Token'].""), $headers);
}


}


?>