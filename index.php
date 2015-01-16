<!DOCTYPE html>
<!--- Slat w Slam 3la 7abibi 5ayri l2nam 
	tool created by bitcoin boy 
	Address btc : 1QLHxifC7aYDu1YTkQEnFpqxDhmnKCRzZ1
	bitcointalk Profile link : https://bitcointalk.org/index.php?action=profile;u=391617 
    github : https://github.com/Abd3lk4d3r/Bitcointool.git
	
	
	
----->
<html lang="en">
  <head>
 

  <style type="text/css">

  #sites .jumbotron{
	  background-color:white;
	  margin-top:-50px;
	  margin-left:200px;
	  width:800px;
	  height:50px;
  }
  #sites b {

	  margin-left:80px;
	  color:rgb(132, 132, 132);
  }
  #param {
		margin-top:30px;
		margin-left:-50px;
		
  }
  a {
	  margin-left:20px;
	  text-decoration:none;
	  text-decoration: underline;
  }
  a:hover {
	
		background-color: ;
	  text-decoration:none;
  }
  .checkbox {
	  width: 400px;  
  }
 .checkbox b {
	 margin:10px;
	 margin-left:40px;
     float:left;
		display:block;
 }
 #toemail {
	 position : absolute ;
	 left: 600px;
	 top:120px;

 }
 #finbtn {
	 margin-left:80px;
 }

 input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}

#fin {
	float:left;
	display:block;	
	width:190px;
	margin:10px;
	margin-top:30px;
    margin-left:10px;
	 
}
  </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Price track</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
  <script src="bootstrap/js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
	</head>
	
	<style type="text/css">
	  body {
background-color:#EEE;
  } 
   .jumbotron {
	 
 }
  </style>
	
	
	<body>
	<div class="page_body">
	<div class="container">
	  <div class="jumbotron">
      <center><h2>ʘ_ʘ</h2><h3> <a href="converter.php" style="color:black;">Converter</a><a href="index.php">Notify</a>  <h3>
   
    <h5>Instant currencies price track</h5> </center>
  </div>
  <div id="sites">
  <div class="jumbotron">
  <b class="glyphicon glyphicon-ok-sign" style="color:green" onclick=""> BTC-e </b> 
  <b class="glyphicon glyphicon-ok-sign" style="color:silver" onclick="alert('Wait this soon')"> Bitstamp </b>
  <b class="glyphicon glyphicon-ok-sign" style="color:silver" onclick="alert('Wait this soon')"> Bitfinex </b>
  <b class="glyphicon glyphicon-ok-sign" style="color:silver" onclick="alert('Wait this soon')"> Localbitcoins </b>
  </div></div>
<div id="page">
 <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
	  <div id="param">
	  
	  <h3>Btc-e :</h3>
	  
	  <div class="checkbox">
	<p> Crypto to Crypto  </p>	  
  <label> 
  <b> <input type="checkbox" id="blankCheckbox" value="LTC_BTC"  >LTC/BTC </input></b>
   <b> <input type="checkbox" id="blankCheckbox" value="FTC_BTC" >FTC/BTC </input></b>
   <b> <input type="checkbox" id="blankCheckbox" value="TRC_BTC" >TRC/BTC </input></b>
   <b> <input type="checkbox" id="blankCheckbox" value="PPC_BTC" >PPC/BTC </input></b>
   <b> <input type="checkbox" id="blankCheckbox" value="NMVC_BTC"  >NMC/BTC </input></b>
   <b> <input type="checkbox" id="blankCheckbox" value="NVC_BTC"  >NVC/BTC </input></b>
</label>
</div>
	<br />

	<div class="checkbox"><p> Cryptocurrency to Fiat  </p>	  

	   <b> <input type="checkbox" id="blankCheckbox" value="BTC_USD"  >BTC/USD </input></b>
	   <b> <input type="checkbox" id="blankCheckbox" value="BTC_RUR"  >BTC/RUR </input></b>
	   <b> <input type="checkbox" id="blankCheckbox" value="BTC_EUR"  >BTC/EUR </input></b>
	   <b> <input type="checkbox" id="blankCheckbox" value="BTC_CNH"  >BTC/CNH </input></b>
	   <b> <input type="checkbox" id="blankCheckbox" value="BTC_GBP"  >BTC/GBP </input></b>
   <b> <input type="checkbox" id="blankCheckbox" value="LTC_USD"  >LTC/USD </input></b>
   <b> <input type="checkbox" id="blankCheckbox" value="LTC_RUR"  >LTC/RUR </input></b>
   <b> <input type="checkbox" id="blankCheckbox" value="LTC_EUR"  >LTC/EUR </input></b>
   <b> <input type="checkbox" id="blankCheckbox" value="NMC_USD"  >NMC/USD </input></b>
   <b> <input type="checkbox" id="blankCheckbox" value="PPC_USD"  >PPC/USD </input></b>
   <b> <input type="checkbox" id="blankCheckbox" value="NVC_USD"  >NVC/USD </input></b>
  </label>
  </div>
</div>
	 <form method="post">
		<div id="toemail">
 <p>  Please enter your data  :  </p>
	<p><input type="email" class="form-control" id="email" style="width:250px" placeholder="Enter email"></p>
 
	<span id="min"class="btn btn-default" onclick="regulator(1)">15 min </span><span class="btn btn-default" onclick="regulator(4)"> 1 hour</span><span class="btn btn-default" onclick="regulator(48)" > 12 hours </span><span class="btn btn-default" onclick="regulator(96)"> 1 day </span>
	<p><input type="Number" class="form-control" min="1" id="timer" onchange="toselect();"  style="width:250px" placeholder="Time"></p>
	<p><span id="resulttime">Every 0 min</span><p>
		<button type="button" class="btn btn-primary" id="finbtn" onclick="fin();">Let's go</button>
	<div id="fin" align="center"></div>
		</div>
	
	</form>
	</div>
	
</div>
</div>
	
	</div>

	
	
	
	
	<script>
	
	var email = document.getElementById("email");
	var time = document.getElementById("timer");
	var checked;
	// define days 
		
	
	function regulator(regtime){
		time.value=regtime;
		toselect();
	}
	$( "#timer" ).keyup(function() {
 toselect();
});
function toselect() {
		var day = (time.value*15/60).toFixed(2)/24;
			// define hours in days 
			var hours= ((time.value*15/60)-24*day.toFixed(0)).toFixed(2);
			// define hours 
			var hour = (time.value*15/60).toFixed(0);
			// define minutes in hours 
			var min = (time.value*15)-60*hour;
			// define minutes 
			var mins = (time.value*15).toFixed(0);
	
	if(time.value >= 12){
		if (time.value >= 288){
		$( "#resulttime" ).html("Every "+day.toFixed(0)+" day "+hours+" hour");	
		}else if ((time.value > 12) || (time.value < 288)){
		$( "#resulttime" ).html("Every "+hour+" hours "+min+" mins");	
		}else {
	$( "#resulttime" ).html("Every "+hour+" hour");
	}}else{
		$( "#resulttime" ).html(("Every "+mins+" mins"));
	}


}


function getValueUsingParentTag(){
	var chkArray = [];
	
	/* look for all checkboes that have a parent id called 'checkbox' attached to it and check if it was checked */
	$(".checkbox input:checked").each(function() {
		chkArray.push($(this).val());
	});
	
	/* we join the array separated by the comma */
	var selected;
	selected = chkArray.join(',') + "";
	
	/* check if there is selected checkboxes, by default the length is 1 as it contains one single comma */
	if(selected.length > 1){
		checked = selected;
	}else{
		alert("Please at least one of the checkbox");	
	}
	if(time.value < 1) {
		alert("Please enter time");
	}
	
}

	function fin() {
		
	getValueUsingParentTag();
	var day = (time.value*15/60).toFixed(2)/24;
	var hours= ((time.value*15/60)-24*day.toFixed(0)).toFixed(0);
	var hour = (time.value*15/60).toFixed(0);
	var min = (time.value*15)-60*hour;
	var mins = (time.value*15).toFixed(0);
	if(time.value < 1 && selected.length <= 0 ){
		alert("Please enter time value");
	}else {
		
		$.get( "system.php",{"add":"true","Email":email.value,'Data':checked,'Time':mins*60}
 ,function(data ) { 
 var pais = data.Pairs;
 
$( "#page" ).html( data.Message +pais.split('_').join('/'));
} 
, "json" );
	}
}
	 
	
	
	</script>
	
	<br />	<br />	<br />	<br />
	<div id="option" align=center ><a href="update.php">Update</a>  <a href="describe.php">Describe</a>  <a href="report.php">Report</a></div>
	</body>


