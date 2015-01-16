alert(isbtc);
var active = document.getElementById("activate");
$("#amount").keyup(function(){
active.value="text1";
amount2.value="";
if (coin.value == "btc"){btc();}
if (coin.value == "ltc"){ltc();}
});




// btc function --------------------------- 


function btc(){
// First box of btc

var all = btce.value+" "+Bitstamp.value+" "+bitfinex.value+" "+localbitcoins.value+" ";
sites.value = all;
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

  $.get("tt.php", 
    { "coin":"btc","arrays":all,"currency":currency.value}, 
    function(data) {
       amount2.value = (data/division)*amount.value;
    }
);
}

// Second Box of btc
function btc2(){
var all = btce.value+" "+Bitstamp.value+" "+bitfinex.value+" "+localbitcoins.value+" ";
sites.value = all;

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

  $.get("tt.php", 
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


  $.get("tt.php", 
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



  $.get("tt.php", 
    { "coin":"ltc","arrays":all,"currency":currency.value}, 
    function(data) {
       amount.value = amount2.value/(data/division);
    }
);

}
// ltc end --------------------------------------------------------------------


/*
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
*/
// amount 2 moved :

$("#amount2").keyup(function(){
active.value="text2";
amount.value="";
if(coin.value == "btc"){btc2();}
if(coin.value == "ltc"){ltc2();}
});
