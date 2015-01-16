function refresh(){
		

 

                    if(activate.value == "text1"){
						
	active.value="text1";
		amount2.value= "...";		
if (coin.value == "btc"){btc();}
if (coin.value == "ltc"){ltc();}
if (coin.value == "nvc"){nvc();}
					}
					
            if(activate.value == "text2"){
				
				active.value="text2";
				amount.value= "...";
if(coin.value == "btc"){btc2();}
if(coin.value == "ltc"){ltc2();}
if(coin.value == "nvc"){nvc2();}
					}}
// refresh 
  $(document).ready(
            function() {
                setInterval(function() {
		refresh();
                }, 6500);
            });
   