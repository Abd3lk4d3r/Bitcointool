<script>
alert("aaa");
if( typeof bttc !== 'undefined' && bttc == 'btc'){
alert("btc choosed");
var active = document.getElementById("activate");
var all = btce.value+" "+Bitstamp.value+" "+bitfinex.value+" "+localbitcoins.value+" ";

sites.value = all;
// First box
$("#amount").keyup(function(){
var division = 0;
if(btce.value = "btce"){
division +=1;
}if(Bitstamp.value = "Bitstamp"){
division +=1;
}if(bitfinex.value = "bitfinex"){
division +=1;
}if(localbitcoins.value = "localbitcoins"){
division +=1;
}
active.value="text1";
amount2.value="";
  $.get("tt.php", 
    { "coin":"btc","arrays":all,"currency":currency.value}, 
    function(data) {
       amount2.value = (data/division)*amount.value;
    }
);
});

// Second Box 


$("#amount2").keyup(function(){
var division = 0;
if(btce.value = "btce"){
division +=1;
}if(Bitstamp.value = "Bitstamp"){
division +=1;
}if(bitfinex.value = "bitfinex"){
division +=1;
}if(localbitcoins.value = "localbitcoins"){
division +=1;
}
active.value="text2";
amount.value="";
  $.get("tt.php", 
    {"coin":"btc","arrays":all,"currency":currency.value}, 
    function(data) {
	
       amount.value = amount2.value/(data/division);
    }
);
});

}




//form 2
if(typeof ltc !== 'undefined' && btc == 'ltc'){
var all = btce.value+" "+vircurex.value+" ";
sites.value = all;
var active = document.getElementById("activate");
var all = btce.value+" "+vircurex.value+" ";
$("#amount").keyup(function(){
var division = 0;
if(btce.value = "btce"){
division +=1;
}if(vircurex.value = "vircurex"){
division +=1;
}
active.value="text1";
amount2.value="";

  $.get("tt.php", 
    { "coin":"ltc",'arrays':all,"currency":currency.value}, 
    function(data) {
       amount2.value = (data/division)*amount.value;
    }
);
});

// Second Box 

$("#amount2").keyup(function(){
var division = 0;
if(btce.value = "btce"){
division +=1;
}if(vircurex.value = "vircurex"){
division +=1;
}
active.value="text2";
amount.value="";

  $.get("tt.php", 
    { "coin":"ltc","arrays":all,"currency":currency.value}, 
    function(data) {
       amount.value = amount2.value/(data/division);
    }
);
});

}




// form 3 
if(typeof btc !== 'undefined' && btc == 'btc'){
var active = document.getElementById("activate");

$("#amount").keyup(function(){
var division = 1;
if(btce.value = "btce"){
division =1;
}
active.value="text1";
amount2.value="";

  $.get("tt.php", 
    { "coin":"nvc",'arrays':"btce","currency":currency.value}, 
    function(data) {
       amount2.value = (data/division)*amount.value;
    }
);
});

// Second Box 

$("#amount2").keyup(function(){
var division = 0;
if(btce.value = "btce"){
division +=1;
}
active.value="text2";
amount.value="";

  $.get("tt.php", 
    { "coin":"nvc","arrays":"btce","currency":currency.value}, 
    function(data) {
       amount.value = amount2.value/(data/division);
    }
);
});
}


</script>
