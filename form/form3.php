

<div id="btc">
<b href='btc-e.com' style='margin-left:10' > btce <i onclick='i1()' id="i1" style="color:green" class="glyphicon glyphicon-ok" ></i></b>
&nbsp&nbsp&nbsp&nbsp  <i class="glyphicon glyphicon-refresh" align="center" style="" onclick="reset()">Reset</i>
</div>

<input type="hidden" id="btce" value="btce" />
</br></br>
<div id="ttt"></div>
<script>

var btce = document.getElementById("btce");
function i1() {
document.getElementById("i1").style.color="silver";
btce.value = "";

}
function reset() {
              document.getElementById("i1").style.color="green";
             
btce.value = "btce";
};



</script>