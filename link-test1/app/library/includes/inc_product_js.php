<script type="text/javascript">
  $(document).ready(function() {	
  $("#env_data").hide();
  $("#el_data").hide();

	$("h3.toggler").toggle(function(){
	    if ($(this).next(".toggle-container").css('display') != 'none')
		    $(this).removeClass("toggler-active");
		  else
		    $(this).addClass("toggler-active"); 
		}, function () {
	    if ($(this).next(".toggle-container").css('display') == 'none')
		    $(this).addClass("toggler-active");
      else 
		    $(this).removeClass("toggler-active");
	  });
	
	$("h3.toggler").click(function(){
		$(this).next(".toggle-container").slideToggle("slow,");
	});							 
$('#product-images').cycle({
		fx:     'fade',
		speed:  'slow',
		timeout: 8000,
		pause: 'true',
		slideExpr: 'img',
		pager:  '#product-thumbs',
		pagerAnchorBuilder: function(idx, slide) {
			// return sel string for existing anchor
			return '#product-thumbs li:eq(' + (idx) + ') a';
		}
	});
$('#quote-bubble').cycle({
		fx:     'fade',
		speed:  'slow',
		timeout: 8000,
		pause: 'true',
		pager:  '#reviews-nav ul',
		pagerAnchorBuilder: function(idx, slide) {
			// return sel string for existing anchor
			return '#reviews-nav ul li:eq(' + (idx) + ') a';
		}
	});
  });
</script>
