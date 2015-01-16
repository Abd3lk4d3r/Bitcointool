
<div id="sites">
  <div class="jumbotron" style="margin-left:50px;margin-top:-50px;">
<div id="btc">
<b href='btc-e.com' style='margin-left:10' > btce <i onclick='i1()' id="i1" style="color:green" class="glyphicon glyphicon-ok" ></i></b>
<b href='Bitstamp.com' style='margin-left:10'> Bitstamp <i onclick='i2()'  id="i2" style="color:green" class="glyphicon glyphicon-ok" ></i></b>
<b href='coinbase.com' style='margin-left:10'> coinbase <i onclick='i3()'   id="i3" style="color:green" class="glyphicon glyphicon-ok" ></i></b>
<b href="localbitcoins.com" style='margin-left:10'> localbitcoins <i onclick='i4()'  id="i4" style="color:green" class="glyphicon glyphicon-ok" ></i></b>
  <b><i class="glyphicon glyphicon-refresh" align="center" style="" onclick="reset()">Reset</i></b>
</div>
<input type="hidden" id="btce" value="btce" />
<input type="hidden" id="Bitstamp" value="Bitstamp" />
<input type="hidden" id="coinbase" value="coinbase" />
<input type="hidden" id="localbitcoins" value="localbitcoins" />
</br></br>
</div></div>
<div id="ttt"></div>
<div id="result">
<script>
var btce = document.getElementById("btce");
var Bitstamp = document.getElementById("Bitstamp");
var coinbase = document.getElementById("coinbase");
var localbitcoins = document.getElementById("localbitcoins");
function i1() {
document.getElementById("i1").style.color="silver";
btce.value = null;

}function i2() {
document.getElementById("i2").style.color="silver";
Bitstamp.value = null;
}function i3() {
document.getElementById("i3").style.color="silver";
coinbase.value = null; 
}function i4() {
document.getElementById("i4").style.color="silver";
localbitcoins.value = null;
}
function reset() {
      document.getElementById("i1").style.color="green";
	  document.getElementById("i2").style.color="green"
	  document.getElementById("i3").style.color="green";
      document.getElementById("i4").style.color="green";

			btce.value = "btce";
			Bitstamp.value = "Bitstamp";
			coinbase.value = "coinbase";
			localbitcoins.value = "localbitcoins";
}

// divsion

// end division

</script>
</div>
