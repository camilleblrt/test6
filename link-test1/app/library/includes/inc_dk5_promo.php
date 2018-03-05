<style>
.hero-shot {
  position:relative;
}
.hero-shot img{
  width:100%;
  height:56.25vw;
  /*

  If you dont do this, Chrome will make the element overlap while loading.
  We want the browser (Chrome) to know the height of the div before the image
  itself loads.
  the image is taking is taking the full screen (so it has a height of 100vw)
  We know the ratio of the image is 16/9, so we calculate the height, and it
  is (100*9)/16 = 56.25vw

  */
}




.kick-button{
  padding: 10px 40px;
  background-color:#2BDE73;
  border: 1px solid #2BDE73;
  border-radius: 6px;
  text-align: center;
//   line-height: 1.1em;
  color:#fff;

}
.kick-button:hover, .kick-button:focus{
  background-color: #1db95c;
  border: 1px solid  #1db95c;
  color:#fff;
}
.kick-button:active{
  color:white;
}
.kickstarter-claim{
  z-index: 10;
//   top: 10vw;
  top: 3vw;
  width: 100%;
  text-align: center;
  position: absolute;
}
.kickstarter-claim p{
  color:#949494;
  font-size: 2vw;
  font-weight:100;
  position:relative;
 
}
.kickstarter-claim h2{

  position:relative;
  /*text-transform: capitalize;*/
//   margin-bottom:  1.2em;
  font-size: 4vw;
}

.kickstarter-claim a{
    position:relative;
    margin-top:20px;
    font-size: 2vw;
}
@media (max-width:600px){

  .kickstarter-claim p{
    margin-bottom:2px;
    font-size:4vw;
  }
  .kickstarter-claim a{
      font-size: 3vw;

    }
    .kickstarter-claim h2{
        font-size: 5vw;

      }
  .kickstarter-claim {

    top: 3vw;

  }

}
p.sub {
  margin-top: 20px;
  font-size: 1.4vw;
}
#clockdiv{
	//  text-shadow: 0 1px 3px rgba(0, 0, 0, .4), 0 0 30px rgba(0, 0, 0, .075);
			padding-bottom: 3vw;
	
			// top:-50px;
			// position:relative;	
			font-family: sans-serif;
			// color:white;
			
			display: inline-block;
			// font-weight: 100;
		
			font-size: 2vw;
		}

		#clockdiv > div{
			// border-top: 1px solid #5f5f5f;
			
			padding-top:1vw;
			// background: rgba(43,222,115,1);
			background: transparent;
			display: inline-block;
		}

		#clockdiv div > span{
			// padding: 0.8vw;
			// border-radius: 3px;
			// border-bottom: 1px #5f5f5f solid;
			background:transparent;
			display: inline-block;
		}

		.smalltext{
			padding-top: .5vw;
			
			font-size: 1vw;
		}
</style>
<div class="hero-shot center-text">
 <div class="kickstarter-claim">
    <!--  <p  ></p> -->
      <h2><?php say("second-ks") ?></h2>
	 <p class="hidden-xs"> <?php say("first-ks") ?> </p> 
	  <div class="text-center hidden-xs">

		<div id="clockdiv" >
			<!-- <h2> Time Remaining </h2> -->
				<div>
					<span class="days"></span>
					<div class="smalltext"><span id="days_name"><?php say("Days") ?></span><span id="day_name" class='hidden'><?php say("Day") ?></span>
					</div>
				</div>
				<div>
					<span class="hours"></span>
					<div class="smalltext"><span id="hours_name"><?php say("Hours") ?></span><span id="hour_name"  class='hidden'><?php say("Hour") ?></span></div>
				</div>
				<div>
					<span class="minutes"></span>
					<div class="smalltext"><span id="minutes_name"><?php say("Minutes") ?></span><span id="minute_name"  class='hidden'><?php say("Minute") ?></span></div>
				</div>
				<div>
					<span class="seconds"></span>
					<div class="smalltext"><span id="seconds_name"><?php say("Seconds") ?></span><span id="second_name"  class='hidden'><?php say("Second") ?></span></div>
				</div>
			</div>

		<script>
		function getTimeRemaining(endtime) {
			var t = Date.parse(endtime) - Date.parse(new Date());
			var seconds = Math.floor((t / 1000) % 60);
			var minutes = Math.floor((t / 1000 / 60) % 60);
			var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
			var days = Math.floor(t / (1000 * 60 * 60 * 24));
			return {
				'total': t,
				'days': days,
				'hours': hours,
				'minutes': minutes,
				'seconds': seconds
			};
		}

			function initializeClock(id, endtime) {
			var clock = document.getElementById(id);
			var daysSpan = clock.querySelector('.days');
			var hoursSpan = clock.querySelector('.hours');
			var minutesSpan = clock.querySelector('.minutes');
			var secondsSpan = clock.querySelector('.seconds');

			function updateClock() {
				var t = getTimeRemaining(endtime);

				daysSpan.innerHTML = t.days;
				hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
				minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
				secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);
				if (t.days < 2){
					document.getElementById('days_name').className="hidden";
					document.getElementById('day_name').className="";
					}
				else{
					document.getElementById('days_name').className="";
					document.getElementById('day_name').className="hidden";	
					}
				if (t.hours < 2){
					document.getElementById('hours_name').className="hidden";
					document.getElementById('hour_name').className="";
					}
				else{
					document.getElementById('hours_name').className="";
					document.getElementById('hour_name').className="hidden";	
					}
				if (t.minutes < 2){
					document.getElementById('minutes_name').className="hidden";
					document.getElementById('minute_name').className="";
					}
					else{
					document.getElementById('minutes_name').className="";
					document.getElementById('minute_name').className="hidden";	
					}
				if (t.seconds < 2){
					document.getElementById('seconds_name').className="hidden";
					document.getElementById('second_name').className="";
					}
					else{
					document.getElementById('seconds_name').className="";
					document.getElementById('second_name').className="hidden";	
					}
				if (t.total <= 0) {
				clearInterval(timeinterval);
				}
			}

			updateClock();
			var timeinterval = setInterval(updateClock, 1000);
			}

			var deadline = new Date("2016-07-30T09:02:21-04:00");
			initializeClock('clockdiv', deadline);
		</script>
		</div>
      <a href ='https://www.kickstarter.com/projects/1229573443/das-keyboard-5q-the-cloud-connected-keyboard' class='kick-button' target="_blank">
	 <?php say("back-button"); ?></a>

	  
  </div>
  
    <img  src="/images/dk5Q.jpg"/>

	
</div>