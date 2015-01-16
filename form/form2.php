
<div id="btc">
<b href='btc-e.com' style='margin-left:10' > btce <i onclick='i1()' id="i1" style="color:green" class="glyphicon glyphicon-ok" ></i></b>
<b href='vircurex.com' style='margin-left:10'> vircurex <i onclick='i2()'  id="i2" style="color:green" class="glyphicon glyphicon-ok" ></i></b>
&nbsp&nbsp&nbsp&nbsp <i class="glyphicon glyphicon-refresh" align="center" style="" onclick="reset()">Reset</i>
</div>
<input type="hidden" id="btce" value="btce" />
<input type="hidden" id="vircurex" value="vircurex" />
</br></br>

<div id="ttt"></div>
<script>

var btce = document.getElementById("btce");
var vircurex = document.getElementById("vircurex");
function i1() {
document.getElementById("i1").style.color="silver";
btce.value = "";

}function i2() {
document.getElementById("i2").style.color="silver";
vircurex.value = "";
}
function reset() {
              document.getElementById("i1").style.color="green";
              document.getElementById("i2").style.color="green";
             
					btce.value = "btce";
					vircurex.value = "vircurex";
};

</script>