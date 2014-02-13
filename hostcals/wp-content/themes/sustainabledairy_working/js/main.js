$(document).ready(function() {


		function heightFix() {
			setTimeout(function(){
			var highest=null;
			var height=0;
			var wh = $("#main_content").height();
			var asde_prm_h = $("div#aside_primary").height();
			var twitFetch_ = $("div#twitFetch").css("height");
			var aside_sect1_ =( $("div#aside_sect1").css("height") + $("div#aside_sect1").css("padding-top") + $("div#aside_sect1").css("padding-bottom") );
			//alert("The div#aside_primary before calc is "+ $("div#aside_primary").css("height"));
				///alert("wh is: "+wh);
			///alert("asde_prm_h is: "+asde_prm_h);
			//alert(" the twitfeth height is: "+ twitFetch_);
			
			$("div.calcHeight").each(
					function(i){
							
							var h =$(this).height();
							if(h>height){
									height=h;
									highest=$(this);
								}
						}
				);
			var newHeight = (highest.css("height"));
			var newPaddingTop = (highest.css("padding-top"));
			var newPaddingBottom = (highest.css("padding-bottom"));

			if(asde_prm_h<wh){
			$("div#aside_primary").css("height",newHeight);
			$("div#aside_primary").css("padding-top",newPaddingTop);
			$("div#aside_primary").css("padding-bottom",newPaddingBottom);
			//alert("wh is: "+wh);
			//("asde_prm_h is: "+asde_prm_h);
			//alert("The div#aside_primary after calc is "+ $("div#aside_primary").css("height"));
			///alert("im inside the if statement");
		}

	//alert("wh is: "+wh);
			//alert("asde_prm_h is: "+asde_prm_h);
		},500);
	
	//alert("this is heightFixIteration after : "+heightFixIteration);
	}



	//twitterFetcher.fetch('388751698157510656', 'twitFetch', 3, true, false, true,'',true,handleTweets, true);


function handleTweets(tweets){
    var x = tweets.length;
    var n = 0;
    
    var element = document.getElementById('twitFetch');
    var html = '<ul>';
    while(n < x) {
      html += '<li>' + tweets[n] + '</li>';
      n++;
    }
    html += '</ul>';
    element.innerHTML = html;
    heightFix();
}

if ($.trim($("p[id^='cals_twitterfetcher_'],p:hidden").text()) != ''){
	
	
	
	var tf0 = $("p[id='cals_twitterfetcher_0']").text();
	var tf1 = $("p[id='cals_twitterfetcher_1']").text();
	var tf2 = $("p[id='cals_twitterfetcher_2']").text();
	var tf3 = $("p[id='cals_twitterfetcher_3']").text();
	var tf4 = $("p[id='cals_twitterfetcher_4']").text();
	var tf5 = $("p[id='cals_twitterfetcher_5']").text();
	var tf6 = $("p[id='cals_twitterfetcher_6']").text();
	
	twitterFetcher.fetch(tf0,'twitFetch',parseInt(tf1),tf2,tf3,tf4,'',tf5,handleTweets,tf6);
}

function myInterval(){
	heightFix();
}
		setInterval(myInterval,100);

	});