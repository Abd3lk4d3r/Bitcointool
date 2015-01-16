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
  
 <center> <?php 
 if(!empty($_GET['email'])){
	 print "Thank you for registring ".$_GET['email'];
 }  
 if(!empty($_GET['failed'])){
	 print $_GET['failed']." already registred";
 }
	 
 ?></center>