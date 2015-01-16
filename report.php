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
<div id="report_page" align="center">
 <P>  Update Page </P>

<b>Name  : </b> <input type="text" name="name" /><br />
<b>Email  : </b> <input type="email" name="email" /><br />
<b>Subject : </b><input type="text" name="sub" /><br /><br /><br />
<b> Description : </b><br /><textarea type="text" placeholder="Description" name="description" ></textarea><br /><br />
<button type="submit" class="btn btn-default" name="send">Send </button>
</div>
<?php
include('settings.php');
if ($_POST['send']){
$to = $setemail; // Your email.
$subject = "Tool report ";
$message = "Name : ".$_POST['name']."Email : ".$_POST['email']."<center>".$_POST['sub']."<br /> ".$_POST['description'];

mail($to, $subject,$message, $headers);
print "<b style='color:green'> Report Sent </b>";
}



?>