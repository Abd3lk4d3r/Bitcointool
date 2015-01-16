<?php

$cookie = md5(uniqid(rand(), true));
$nowip = $_SERVER['REMOTE_ADDR'];
// set the expiration date to one ever
if($_COOKIE['Clock'] == ""){
setcookie ("Clock", "$cookie", time() - 9900000000);
}

include('settings.php');

// if param set 
if(!empty($_GET['add']) and !empty($_GET['Email']) and !empty($_GET['Data']) and !empty($_GET['Time'])){





$host = $sethost;
$user = $setdbuser;
$pass = $setdbpass; 
$db = $setdb;
$today = date("Y-m-d H:i:s"); 
$con = mysql_connect($host,$user,$pass);
$db = mysql_select_db($db);
$email = mysql_real_escape_string($_GET['Email']);
$email = strip_tags($email);
$pairs = strtolower($_GET['Data']);
$pairs = strip_tags($pairs);
$time = $_GET['Time'];
$time = strip_tags($time);

global $aa ;
global $bb ;
global $em ;
$check = mysql_query("select Email from Data where Email = '$email'");
if(!mysql_affected_rows() > 0){
		$aa = 200;
		}else {
			$aa = 404;
		}
		
		

 // if email registred 
if($aa === 404){
	
	$succes = array("status"=>"<b style='color:red'>Failed email already used </br>","Message"=>$email." used","Pairs"=>"");
	print json_encode($succes);
}
// if email not registred 
if ($aa === 200) {
	


function get_ip()
{
global $REMOTE_ADDR;
global $HTTP_X_FORWARDED_FOR, $HTTP_X_FORWARDED, $HTTP_FORWARDED_FOR, $HTTP_FORWARDED;
global $HTTP_VIA, $HTTP_X_COMING_FROM, $HTTP_COMING_FROM;
global $HTTP_SERVER_VARS, $HTTP_ENV_VARS;
// Get some server/environment variables values
if(empty($REMOTE_ADDR))
    {
    if(!empty($_SERVER)&&isset($_SERVER['REMOTE_ADDR']))
        {
        $REMOTE_ADDR = $_SERVER['REMOTE_ADDR'];
        }
    elseif(!empty($_ENV)&&isset($_ENV['REMOTE_ADDR']))
        {
        $REMOTE_ADDR = $_ENV['REMOTE_ADDR'];
        }
    elseif(!empty($HTTP_SERVER_VARS) && isset($HTTP_SERVER_VARS['REMOTE_ADDR']))
        {
        $REMOTE_ADDR = $HTTP_SERVER_VARS['REMOTE_ADDR'];
        }
    elseif(!empty($HTTP_ENV_VARS)&&isset($HTTP_ENV_VARS['REMOTE_ADDR']))
        {
        $REMOTE_ADDR = $HTTP_ENV_VARS['REMOTE_ADDR'];
        }
    elseif(@getenv('REMOTE_ADDR'))
        {
        $REMOTE_ADDR = getenv('REMOTE_ADDR');
        }
    } // end if
if(empty($HTTP_X_FORWARDED_FOR))
    {
    if(!empty($_SERVER) && isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        {
        $HTTP_X_FORWARDED_FOR = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
    elseif(!empty($_ENV) && isset($_ENV['HTTP_X_FORWARDED_FOR']))
        {
        $HTTP_X_FORWARDED_FOR = $_ENV['HTTP_X_FORWARDED_FOR'];
        }
    elseif(!empty($HTTP_SERVER_VARS) && isset($HTTP_SERVER_VARS['HTTP_X_FORWARDED_FOR']))
        {
        $HTTP_X_FORWARDED_FOR = $HTTP_SERVER_VARS['HTTP_X_FORWARDED_FOR'];
        }
    elseif(!empty($HTTP_ENV_VARS) && isset($HTTP_ENV_VARS['HTTP_X_FORWARDED_FOR']))
        {
        $HTTP_X_FORWARDED_FOR = $HTTP_ENV_VARS['HTTP_X_FORWARDED_FOR'];
        }
    elseif(@getenv('HTTP_X_FORWARDED_FOR'))
        {
        $HTTP_X_FORWARDED_FOR = getenv('HTTP_X_FORWARDED_FOR');
        }
    } // end if
if(empty($HTTP_X_FORWARDED))
    {
    if(!empty($_SERVER) && isset($_SERVER['HTTP_X_FORWARDED']))
        {
        $HTTP_X_FORWARDED = $_SERVER['HTTP_X_FORWARDED'];
        }
    elseif(!empty($_ENV) && isset($_ENV['HTTP_X_FORWARDED']))
        {
        $HTTP_X_FORWARDED = $_ENV['HTTP_X_FORWARDED'];
        }
    elseif(!empty($HTTP_SERVER_VARS) && isset($HTTP_SERVER_VARS['HTTP_X_FORWARDED']))
        {
        $HTTP_X_FORWARDED = $HTTP_SERVER_VARS['HTTP_X_FORWARDED'];
        }
    elseif(!empty($HTTP_ENV_VARS) && isset($HTTP_ENV_VARS['HTTP_X_FORWARDED']))
        {
        $HTTP_X_FORWARDED = $HTTP_ENV_VARS['HTTP_X_FORWARDED'];
        }
    elseif(@getenv('HTTP_X_FORWARDED'))
        {
        $HTTP_X_FORWARDED = getenv('HTTP_X_FORWARDED');
        }
    } // end if
if(empty($HTTP_FORWARDED_FOR))
    {
    if(!empty($_SERVER) && isset($_SERVER['HTTP_FORWARDED_FOR']))
        {
        $HTTP_FORWARDED_FOR = $_SERVER['HTTP_FORWARDED_FOR'];
        }
    elseif(!empty($_ENV) && isset($_ENV['HTTP_FORWARDED_FOR']))
        {
        $HTTP_FORWARDED_FOR = $_ENV['HTTP_FORWARDED_FOR'];
        }
    elseif(!empty($HTTP_SERVER_VARS) && isset($HTTP_SERVER_VARS['HTTP_FORWARDED_FOR']))
        {
        $HTTP_FORWARDED_FOR = $HTTP_SERVER_VARS['HTTP_FORWARDED_FOR'];
        }
    elseif(!empty($HTTP_ENV_VARS) && isset($HTTP_ENV_VARS['HTTP_FORWARDED_FOR']))
        {
        $HTTP_FORWARDED_FOR = $HTTP_ENV_VARS['HTTP_FORWARDED_FOR'];
        }
    elseif(@getenv('HTTP_FORWARDED_FOR'))
        {
        $HTTP_FORWARDED_FOR = getenv('HTTP_FORWARDED_FOR');
        }
    } // end if
if(empty($HTTP_FORWARDED))
    {
    if(!empty($_SERVER) && isset($_SERVER['HTTP_FORWARDED']))
        {
        $HTTP_FORWARDED = $_SERVER['HTTP_FORWARDED'];
        }
    elseif(!empty($_ENV) && isset($_ENV['HTTP_FORWARDED']))
        {
        $HTTP_FORWARDED = $_ENV['HTTP_FORWARDED'];
        }
    elseif(!empty($HTTP_SERVER_VARS) && isset($HTTP_SERVER_VARS['HTTP_FORWARDED']))
        {
        $HTTP_FORWARDED = $HTTP_SERVER_VARS['HTTP_FORWARDED'];
        }
    elseif(!empty($HTTP_ENV_VARS) && isset($HTTP_ENV_VARS['HTTP_FORWARDED']))
        {
        $HTTP_FORWARDED = $HTTP_ENV_VARS['HTTP_FORWARDED'];
        }
    elseif(@getenv('HTTP_FORWARDED'))
        {
        $HTTP_FORWARDED = getenv('HTTP_FORWARDED');
        }
    } // end if
if(empty($HTTP_VIA))
    {
    if(!empty($_SERVER) && isset($_SERVER['HTTP_VIA']))
        {
        $HTTP_VIA = $_SERVER['HTTP_VIA'];
        }
    elseif(!empty($_ENV) && isset($_ENV['HTTP_VIA']))
        {
        $HTTP_VIA = $_ENV['HTTP_VIA'];
        }
    elseif(!empty($HTTP_SERVER_VARS) && isset($HTTP_SERVER_VARS['HTTP_VIA']))
        {
        $HTTP_VIA = $HTTP_SERVER_VARS['HTTP_VIA'];
        }
    elseif(!empty($HTTP_ENV_VARS) && isset($HTTP_ENV_VARS['HTTP_VIA']))
        {
        $HTTP_VIA = $HTTP_ENV_VARS['HTTP_VIA'];
        }
    elseif(@getenv('HTTP_VIA'))
        {
        $HTTP_VIA = getenv('HTTP_VIA');
        }
    } // end if
if(empty($HTTP_X_COMING_FROM))
    {
    if(!empty($_SERVER) && isset($_SERVER['HTTP_X_COMING_FROM']))
        {
        $HTTP_X_COMING_FROM = $_SERVER['HTTP_X_COMING_FROM'];
        }
    elseif(!empty($_ENV) && isset($_ENV['HTTP_X_COMING_FROM']))
        {
        $HTTP_X_COMING_FROM = $_ENV['HTTP_X_COMING_FROM'];
        }
    elseif(!empty($HTTP_SERVER_VARS) && isset($HTTP_SERVER_VARS['HTTP_X_COMING_FROM']))
        {
        $HTTP_X_COMING_FROM = $HTTP_SERVER_VARS['HTTP_X_COMING_FROM'];
        }
    elseif(!empty($HTTP_ENV_VARS) && isset($HTTP_ENV_VARS['HTTP_X_COMING_FROM']))
        {
        $HTTP_X_COMING_FROM = $HTTP_ENV_VARS['HTTP_X_COMING_FROM'];
        }
    elseif(@getenv('HTTP_X_COMING_FROM'))
        {
        $HTTP_X_COMING_FROM = getenv('HTTP_X_COMING_FROM');
        }
    } // end if
if(empty($HTTP_COMING_FROM))
    {
    if(!empty($_SERVER) && isset($_SERVER['HTTP_COMING_FROM']))
        {
        $HTTP_COMING_FROM = $_SERVER['HTTP_COMING_FROM'];
        }
    elseif(!empty($_ENV) && isset($_ENV['HTTP_COMING_FROM']))
        {
        $HTTP_COMING_FROM = $_ENV['HTTP_COMING_FROM'];
        }
    elseif(!empty($HTTP_COMING_FROM) && isset($HTTP_SERVER_VARS['HTTP_COMING_FROM']))
        {
        $HTTP_COMING_FROM = $HTTP_SERVER_VARS['HTTP_COMING_FROM'];
        }
    elseif(!empty($HTTP_ENV_VARS) && isset($HTTP_ENV_VARS['HTTP_COMING_FROM']))
        {
        $HTTP_COMING_FROM = $HTTP_ENV_VARS['HTTP_COMING_FROM'];
        }
    elseif(@getenv('HTTP_COMING_FROM'))
        {
        $HTTP_COMING_FROM = getenv('HTTP_COMING_FROM');
        }
    } // end if
// Gets the default ip sent by the user
if(!empty($REMOTE_ADDR))
    {
    $direct_ip = $REMOTE_ADDR;
    }
// Gets the proxy ip sent by the user
$proxy_ip='';
if(!empty($HTTP_X_FORWARDED_FOR))$proxy_ip = $HTTP_X_FORWARDED_FOR;
elseif(!empty($HTTP_X_FORWARDED))$proxy_ip = $HTTP_X_FORWARDED;
elseif(!empty($HTTP_FORWARDED_FOR))$proxy_ip = $HTTP_FORWARDED_FOR;
elseif(!empty($HTTP_FORWARDED))$proxy_ip = $HTTP_FORWARDED;
elseif(!empty($HTTP_VIA))$proxy_ip = $HTTP_VIA;
elseif(!empty($HTTP_X_COMING_FROM))$proxy_ip = $HTTP_X_COMING_FROM;
elseif(!empty($HTTP_COMING_FROM))$proxy_ip = $HTTP_COMING_FROM;
// Returns the true IP if it has been found, else FALSE
if (empty($proxy_ip))
    {
    // True IP without proxy
    return $direct_ip;
    }
else
    {
    $is_ip = ereg('^([0-9]{1,3}\.){3,3}[0-9]{1,3}', $proxy_ip, $regs);
    if($is_ip && (count($regs) > 0))
        {
        // True IP behind a proxy
        return $regs[0];
        }
    else
        {
        // Can't define IP: there is a proxy but we don't have
        // information about the true IP
        return FALSE;
        }
    } // end if... else...
}
if(get_ip() !== $_SERVER['REMOTE_ADDR'] ){
	// proxy : 
	
	$Token = md5("!apiboy!_$email");
	$nowip = $_SERVER['REMOTE_ADDR'];
	$detected = get_ip();
$query = mysql_query("INSERT INTO `Data`(`Id`, `Email`, `Pair`, `Date`, `Time`,`Token` ,`Ip`,`Ip_detected`, `Proxy`) VALUES (Null,'$email','$pairs','$today','$time','$Token','$nowip','$detected','true' )");
$succes = array("status"=>"<center><b style='color:green'> Succes </b>","Message"=>"Thank you $email <br />you will receive every ". $time/60 ." price for ","Pairs"=>$_GET['Data']);
print json_encode($succes);
	
}else {
	// no proxy : 
	
	$nowip = $_SERVER['REMOTE_ADDR'];
	$Token = md5("!apiboy!_$email");
	$detected = get_ip();
$query = mysql_query("INSERT INTO `Data`(`Id`, `Email`, `Pair`, `Date`, `Time`,`Token`,`Ip`,`Ip_detected`, `Proxy`) VALUES (Null,'$email','$pairs','$today','$time','$Token','$nowip','$detected','false')");
$succes = array("status"=>"<center><b style='color:green'> Succes </b>","Message"=>"Thank you $email <br /> you will receive every ". $time/60 ." price for ","Pairs"=>$_GET['Data']);
print json_encode($succes);
}



 


}

 }
// if param describe : 
if(!empty($_GET['aurevoir']) and !empty($_GET['Token'])){
$host = $sethost;
$user = $setdbuser;
$pass = $setdbpass; 
$db = $setdb;
$con = mysql_connect($host,$user,$pass);
$db = mysql_select_db($db);
$Token = mysql_real_escape_string($_GET['Token']);
$Token = strip_tags($Token);
$show = mysql_query("select * from Data where Token ='$Token'");
while($row = mysql_fetch_row($query)){
	$email = $row[1];
	$date = $row[3];
	$ip = $row[7];
	$proxy = $row[8];
}
$today = date("Y-m-d H:i:s"); 
$add= mysql_query("INSERT INTO `Deleted`(`id`, `Email`, `Date`, `Ip`, `Proxy`, `When`) VALUES (Null,$email,$date,$ip,$proxy,$today)");
	$query = mysql_query("DELETE FROM `Data` WHERE Token = '$Token'");
if(mysql_affected_rows() > 0){
	print "<center> <b style='color:green'> Succes </b></center>";
}else {
	print "<center> <b style='color:red'> Invalid Token </b> : ".$Token."</center>" ;
}
}

// In case update 
if(!empty($_GET['update']) and !empty($_GET['Email']) and !empty($_GET['Data']) and !empty($_GET['Time'])){
	
	
$host = $sethost;
$user = $setdbuser;
$pass = $setdbpass; 
$db = $setdb;
$con = mysql_connect($host,$user,$pass);
$db = mysql_select_db($db);

$today = date("Y-m-d H:i:s"); 




$email = mysql_real_escape_string($_GET['Email']);
$email = strip_tags($email);

$pairs = strtolower($_GET['Data']);
$pairs = strip_tags($pairs);
$Token = mysql_real_escape_string($_GET['Token']);
$Token = strip_tags($Token);
$time = $_GET['Time'];
$time = strip_tags($time);

$updatequery = mysql_query("select Email from Data");
if(mysql_affected_rows() > 0){
$qr = mysql_query("UPDATE `Data` SET `Email`= '$email', `Pair` = '$pairs',  `Time`='$time' where Token ='$Token'");
	$succes = array("status"=>"Succes","Message"=>"Email : $email <br /> Time : Every ". $time/60 ." Mins <br /> Pairs : ","Pairs"=>$_GET['Data']);
print json_encode($succes);
	}else {
		print "error";
}}


?>