
<?php
    // - Needs inc_twitter_SDK loaded.
    // - Needs inc_facebook_SDK loaded.
    // - Enable a Facebook sharing button, a twitter share, a pineterest share, a google+ share.
?>
<!-- SOCIAL SHARING MODULE -->
<style>
  .fa-3{
  	color:#DDD;
  	font-size: 1.5em;
  	margin-bottom:15px;
  	padding: 5px 3px;
  }
  .fa-facebook-square:hover{
  	color:#3b5998;
  }
  .fa-twitter-square:hover{
  	color:#00aced;
  }
  .fa-pinterest-square:hover{
  	color:#cb2027;
  }
  .fa-google-plus-square:hover{
  	color:#d34836;
  }
</style>

<a href="https://twitter.com/intent/tweet?text=Check out the new Division Zero Gaming Line by DasKeyboard !&url=http://www.divisionzerogaming.com<?php echo($_SERVER['REQUEST_URI']); ?>" rel="nofollow" target="_blank" title="Share on Twitter"><i class="fa-share fa fa-twitter-square fa-3"></i></a>
<a href="https://facebook.com/sharer.php?u=http://www.divisionzerogaming.com<?php echo($_SERVER['REQUEST_URI']); ?>" rel="nofollow" target="_blank" title="Share on Facebook"><i class="fa-share fa fa-facebook-square fa-3"></i></a>
<a href="http://pinterest.com/pin/create/button/?url=http://www.divisionzerogaming.com<?php echo($_SERVER['REQUEST_URI']); ?>/>&description=New Division Zero Gaming Line by DasKeyboard" rel="nofollow" target="_blank" title="Share on pinterest"><i class="fa fa-pinterest-square fa-3"></i></a>
<a href="https://plus.google.com/share?url=http://www.divisionzerogaming.com<?php echo($_SERVER['REQUEST_URI']); ?>" rel="nofollow" target="_blank" title="Share on Google+"><i class="fa-share fa fa-google-plus-square fa-3"></i></a>
