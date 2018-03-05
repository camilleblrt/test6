
<?php
    // - Needs inc_twitter_SDK loaded.
    // - Needs inc_facebook_SDK loaded.
    // - Needs inc_pinterest_SDK loaded.
    // - Needs inc_gplus_SDK loaded.
    // - Enable a Facebook sharing button, a twitter share, a pineterest share, a google+ share.
    include ($_SERVER['DOCUMENT_ROOT'] . '/library/includes/inc_twitter_SDK.php');
    include ($_SERVER['DOCUMENT_ROOT'] . '/library/includes/inc_facebook_SDK.php');
    include ($_SERVER['DOCUMENT_ROOT'] . '/library/includes/inc_gplus_SDK.php');
    include ($_SERVER['DOCUMENT_ROOT'] . '/library/includes/inc_pinterest_SDK.php');
?>
<!-- SOCIAL SHARING MODULE -->

<a href="https://twitter.com/share" class="twitter-share-button"></a>
<div class="g-plusone" data-annotation="none" data-size="medium" style="vertical-align:bottom"></div>
<span style="width: 94px; display: inline-block">
  <div class="fb-share-button" data-href="http://www.daskeyboard.com<?php echo($_SERVER['REQUEST_URI']); ?>" data-layout="button_count" style="vertical-align: super;top: -3px;"></div>
</span>
<a href="https://www.pinterest.com/pin/create/button/">
    <img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png" />
</a>
