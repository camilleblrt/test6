<style>
#raffle-promo {
	display: none;
	width: auto;
	height: 41px;
	background-color: #377CA8;
	border-bottom: 1px solid #18496A;
}

#raffle-promo .widget {
	float: left;
	width: 130px;
	padding-top: 10px;
	margin-left: 30px;
}

#raffle-promo .close {
	font-size: 18px;
	float: right;
	padding-right: 20px;
	margin-top: -25px;
	color: #000;
	font-size: 20px;
	font-weight: bold;
	line-height: 13.5px;
	text-shadow: 0 1px 0 #fff;
	filter: alpha(opacity =     25);
	-khtml-opacity: .25;
	-moz-opacity: .25;
	opacity: .25;
}

#raffle-promo a:hover {
	text-decoration: none;
	filter: alpha(opacity =     99);
	-khtml-opacity: .99;
	-moz-opacity: .99;
	opacity: .99;
}

.xclose {
	float: right;
	color: #000;
	font-size: 20px;
	font-weight: bold;
	line-height: 13.5px;
	text-shadow: 0 1px 0 #fff;
	filter: alpha(opacity =     25);
	-khtml-opacity: .25;
	-moz-opacity: .25;
	opacity: .25;
}

#raffle-promo .container {
	width: 970px;
	margin-left: auto;
	margin-right: auto;
	zoom: 1;
	overflow: hidden;
	height: 41px;
	background: #377CA8
		url("/library/includes/twitter-raffle/raffle-promo-no-text.png")
		no-repeat;
}

.offer {
	font-size: 24px;
	letter-spacing: -2px;
	padding-top: 10px;
	margin-left: 35px;
	color: white;
	float: left;
}

.offer2 {
	margin-left: 0px;
	padding-top: 13px;
	font-size: 14px;
	letter-spacing: -1px;
}
</style>

<div id="raffle-promo">
	<div class="container">
		<div class="offer">
			Win a <b>free Das Keyboard T-Shirt</b>&nbsp;<span style="font-size: 13px;letter-spacing: 0px;"> in our weekly raffle</span>
		</div>
		<div class="widget">
			<a href="https://twitter.com/share" class="twitter-share-button"
				data-url="http://www.daskeyboard.com/"
				data-text="High performance mechanical keyboard. Super awesome feel."
				data-via="daskeyboard" data-size="normal">Tweet</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		</div>
		<div class="offer offer2">
			a <b>random tweeter</b> will be chosen each week
		</div>
	</div>
	<?php $cookie_name = "raffle3"; ?>
	<a class="close" href="#"
		onclick="$('#raffle-promo').hide(); createCookie('<?php echo $cookie_name ?>', '0', 30); return false;">close</a>
</div>
<script>
var result = readCookie('<?php echo $cookie_name ?>');
if(result != "0")
	$("#raffle-promo").show();
</script>

