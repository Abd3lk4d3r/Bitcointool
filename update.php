<?php include('settings.php');  ?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Price track</title>
	    <link href="bootstrap/css/base.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
  <script src="bootstrap/js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
	</head>

<body>
 <div class="jumbotron">
      <center><h2>ʘ_ʘ</h2><h3> <a href="converter.php" style="color:black;">Converter</a><a href="index.php">Notify</a>  <h3>
   
    <h5>Instant currencies price track</h5> </center>
  </div>


<form method="post"><br /><br />
<center> <P>  Update Page </P><br /><br /><br /><br />
Token : <input type="text" placeholder="Token" name="Token"><br /><br />
<button type="submit" class="btn btn-default" name="look">Look </button>
<?php
function RoT_Up($tk){
	
	
	$Token = $tk;
    $Token = strip_tags($Token);

$host = $sethost;
$user = $setdbuser;
$pass = $setdbpass; 
$db = $setdb;
$today = date("Y-m-d H:i:s"); 
$con = mysql_connect($host,$user,$pass);
$db = mysql_select_db($db);

	$query = mysql_query("select Pair from Data where `Token` = '$Token'");
if(mysql_affected_rows() > 0) {


$text = file_get_contents('edit_form.html');
$query = mysql_query("select * from Data where `Token` = '$Token'");
global $c ;
while($row = mysql_fetch_array($query)){
	$Token  = $row[5];
    $Email = $row[1];
	$Time = ($row[4]/60)/15;
	$c = explode(",",$row[2]);

}

$text = str_replace("{RoT_Time}",$Time,$text);
$text = str_replace("{RoT_Token}",$Token,$text);
$text = str_replace("{RoT_Email}",$Email,$text);

foreach($c as $tocheck) {
	$b =  strtoupper("\"$tocheck\"");
$text = str_replace($b,"$b checked",$text);
}

print $text;

}else {
	print "$Token is invalid";
}
}
if(!empty($_GET['edit']) and !empty($_GET['Token'])){
	
	RoT_Up($_GET['Token']);

}
if(isset($_POST['look'])){
	RoT_Up($_POST['Token']);
}


?>