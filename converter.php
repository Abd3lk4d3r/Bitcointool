<head>
 <meta charset="utf-8">
    <meta hGetpricep-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Price track</title>
	    <link href="bootstrap/css/base.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
  <script src="bootstrap/js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
	</head>
<style type="text/css">
	  body {
background-color:#EEE;
}
#frm  input{
}
  </style>
<body >
 <div class="jumbotron">
      <center><h2>ʘ_ʘ</h2><h3> <a href="converter.php" >Converter</a><a href="index.php" style="color:black;">Notify</a>  <h3>
   
    <h5>Cryoto currencies converter</h5> </center>
  </div>
<body>

<div id="Menu">
<div id="frm" class="form-inline" align="center">
<div id="result">
</div>
<br><br><br><br><br>
<br>
<input type="hidden" id="a" value="btc" />

<input type="text" placeholder="1"  class="form-control" id="amount" value="1"  style="width:70">
<select id="coinlist" name="coin" onchange="refresh();" class="form-control" style="width:100px;">
<option value="btc" id="btc">Bitcoin</option>
<option value="ltc" id="ltc">Litecoin</option>
<option value="nvc" id="nvc">Novacoin</option>
</select>
<i class="glyphicon glyphicon-resize-horizontal"  align="center" style=""></i>
<input type="text" placeholder="1" class="form-control" id="amount2" style="width:70">
<select id="currencylist" onchange="refresh();" class="form-control" style="width:100px;">
<option value="USD" id="USD">USD</option>
<option value="EUR" id="EUR">EUR</option>
<option value="YEN" id="YEN">Yuan</option>
</select>
</p>
</div>
<input type="hidden" name="" id="coin" value="">
<input type="hidden" name="" id="currency" value="USD">
<input type="hidden" name="" id="activate" value="text1">
<input type="hidden" name="" id="sites" value="">
<input type="hidden" name="" id="action" value="0">

<input type="hidden" name="" id="refreshcoin" value="btc" />
<input type="hidden" name="" id="refreshfiat" value="btc" />
<input type="hidden" name="" id="refreshamount" value="btc" />



<br><br><br/><br/><br>

</div>
</div>
<div id="test"></div>
<script>
var coin = document.getElementById("coin");
var a = document.getElementById("a");
var action = document.getElementById("action");
var currency = document.getElementById("currency");
var amount = document.getElementById("amount"); 
var amount2 = document.getElementById("amount2");
var sites = document.getElementById("sites");
if(action.value == 0){
coin.value="btc";
$( "#result" ).load( "form/form1.php" );
}

// On Cryptocurrency change
$('#currencylist').change(function(){
		   var coin = document.getElementById("coin");
	       var active = document.getElementById("activate");
           var id = $(this).find(':selected')[0].id;
		   var curr = $( "#currencylist option:selected" ).val();
		   $('#currency').val(curr);
           var amount = document.getElementById("amount");
		   var currss = document.getElementById("coin");
	
	
	
	
	
	
	
		if(active.value == "text1"){
	$.get("Getprice.php", 
    {"coin":coin.value,"arrays":sites.value,"currency":currency.value}, 
    function(data) {
       amount2.value = data*amount.value;
    }
);}
		if(active.value == "text2"){
$.get("Getprice.php", 
    {"coin":coin.value,"arrays":sites.value,"currency":currency.value}, 
    function(data) {
   amount.value = amount2.value/data;
 }
);

}
   
   
   
});



// On currency change
$('#coinlist').change(function(){
var coin = document.getElementById("coin");
var a = document.getElementById("a");
var sites = document.getElementById("sites");
sites.value == "";
	coin.value == "";
   var changedcoin = $( "#coinlist option:selected" ).val();
	$('#coin').val(changedcoin);
var coin = document.getElementById("coin");
if(coin.value == "btc"){
action.value=1;
$( "#result" ).load( "form/form1.php" );
}
if(coin.value == "ltc"){
action.value=1;
$( "#result" ).load( "form/form2.php" );
}
if(coin.value == "nvc"){
action.value=1;
sites.value = "btce";
$( "#result" ).load( "form/form3.php" );
}
	   
	   var active = document.getElementById("activate");
	var coin = document.getElementById("coin");
	var id = $(this).find(':selected')[0].id;
	var amount = document.getElementById("amount");
    var currss = document.getElementById("coin");

	
					
					
					if(active.value == "text1"){

	$.get("Getprice.php", 
    { "coin":coin.value,"arrays":sites.value,"currency":currency.value}, 
    function(data) {
       amount2.value = data*amount.value;
    }
);
}
					if(active.value == "text2"){
$.get("Getprice.php", 
    { "coin":coin.value,"arrays":sites.value,"currency":currency.value}, 
    function(data) {
       amount.value = amount2.value/data;
    }
);

}
   });
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
// script ----------------------------------------------------------------
   
   var active = document.getElementById("activate");
$("#amount").keyup(function(){
active.value="text1";
amount2.value="";
if (coin.value == "btc"){btc();}
if (coin.value == "ltc"){ltc();}
if (coin.value == "nvc"){nvc();}
});

$("#amount2").keyup(function(){
active.value="text2";
amount.value="";
if(coin.value == "btc"){btc2();}
if(coin.value == "ltc"){ltc2();}
if(coin.value == "nvc"){nvc2();}
});



// btc function --------------------------- 

function btc(){
// First box of btc

var all = btce.value+" "+Bitstamp.value+" "+coinbase.value+" "+localbitcoins.value+" ";

sites.value = all;
var division = 0;
if(btce.value == "btce"){
division +=1;
}if(Bitstamp.value == "Bitstamp"){
division +=1;
}if(coinbase.value == "coinbase"){
division +=1;
}if(localbitcoins.value == "localbitcoins"){
division +=1;
}

  $.get("Getprice.php", 
    { "coin":"btc","arrays":all,"currency":currency.value}, 
    function(data) {
       amount2.value = (data/division)*amount.value;
    }
);
}

// Second Box of btc
function btc2(){
var all = btce.value+" "+Bitstamp.value+" "+coinbase.value+" "+localbitcoins.value+" ";
sites.value = all;

var division = 0;
if(btce.value = "btce"){
division +=1;
}if(Bitstamp.value = "Bitstamp"){
division +=1;
}if(coinbase.value = "coinbase"){
division +=1;
}if(localbitcoins.value = "localbitcoins"){
division +=1;
}

  $.get("Getprice.php", 
    {"coin":"btc","arrays":all,"currency":currency.value}, 
    function(data) {
	   amount.value = amount2.value/(data/division);
    }
);
}

// btc end ----------------------------------------------------------------------




// ltc ---------------------------------------------------------------------------
// function 1 of ltc 
function ltc() {
var all = btce.value+" "+vircurex.value+" ";
sites.value = all;

var division = 0;
if(btce.value = "btce"){
division +=1;
}if(vircurex.value = "vircurex"){
division +=1;
}


  $.get("Getprice.php", 
    { "coin":"ltc",'arrays':all,"currency":currency.value}, 
    function(data) {
       amount2.value = (data/division)*amount.value;
    }
);
}


// function 2 of ltc
function ltc2(){
var all = btce.value+" "+vircurex.value+" ";
sites.value = all;

var division = 0;
if(btce.value = "btce"){
division +=1;
}if(vircurex.value = "vircurex"){
division +=1;
}


  $.get("Getprice.php", 
    { "coin":"ltc","arrays":all,"currency":currency.value}, 
    function(data) {
       amount.value = amount2.value/(data/division);
    }
);

}
// ltc end --------------------------------------------------------------------



// form 3 
function nvc(){
var division = 1;
if(btce.value = "btce"){
division =1;
}

  $.get("Getprice.php", 
    { "coin":"nvc",'arrays':"btce","currency":currency.value}, 
    function(data) {
       amount2.value = (data/division)*amount.value;
    }
);

}
// Second Box 
function nvc2(){
var division = 0;
if(btce.value = "btce"){
division +=1;
}

  $.get("Getprice.php", 
    { "coin":"nvc","arrays":"btce","currency":currency.value}, 
    function(data) {
       amount.value = amount2.value/(data/division);
    }
);

}
   
</script>
<script type="text/javascript" src="refresh.js"></script>

</html>