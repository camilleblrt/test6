var stopAnimation1 = false;
var isPlaying1 = false;
var closeTimeoutHandle1 = null;

function fluctuate1(bar1) {
    if(stopAnimation1){
			$('#musicSign1').removeClass('glyphicon glyphicon-pause').addClass('glyphicon glyphicon-play');
      return;
    }
		$('#musicSign1').removeClass('glyphicon glyphicon-play').addClass('glyphicon glyphicon-pause');
    var amplitude = Math.random() * 10;
    var height = amplitude * 3;
    bar1.animate({
        height: height
    }, function() {
        fluctuate1($(this));
    });
};

  $("#btnStart1").click(function(i) {
    if(isPlaying1){
        isPlaying1 = false;
        stopAnimation1 = true;
       fluctuate1($('.bar1'));
       if(closeTimeoutHandle1){
    			clearTimeout(closeTimeoutHandle1);
    		}
      }
      else{
      		isPlaying1 = true;
          stopAnimation1 = false;
    			fluctuate1($('.bar1'));
          closeTimeoutHandle1 = setTimeout(function(){
						isPlaying1 = false;

            stopAnimation1 = true;
          }, 8 * 1000);

      }

  });

var stopAnimation = false;
var isPlaying = false;
var closeTimeoutHandle = null;

function fluctuate(bar) {
    if(stopAnimation){
			$('#musicSign').removeClass('glyphicon glyphicon-pause').addClass('glyphicon glyphicon-play');
      return;
    }
		$('#musicSign').removeClass('glyphicon glyphicon-play').addClass('glyphicon glyphicon-pause');
    var amplitude = Math.random() * 10;
    var height = amplitude * 3;
    bar.animate({
        height: height
    }, function() {
        fluctuate($(this));
    });
};

$("#btnStart").click(function(i) {
    if(isPlaying){
        isPlaying = false;
        stopAnimation = true;
       fluctuate($('.bar'));
       if(closeTimeoutHandle){
    			clearTimeout(closeTimeoutHandle);
    		}
      }
      else{
      		isPlaying = true;
          stopAnimation = false;
    			fluctuate($('.bar'));
          closeTimeoutHandle = setTimeout(function(){
						isPlaying = false;
            stopAnimation = true;
          }, 8 * 1000); //10 seconds

      }

});
