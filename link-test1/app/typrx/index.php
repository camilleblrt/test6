<?php include_once '../i18n/locales/language.php' ?>
<?php include_once '../header.php' ?>

<style>
.typrx-page iframe{
  width: 100%;
  height: 2000px;
  /*overflow: hiden;*/
}




</style>
<script>
document.addEventListener("DOMContentLoaded", function(event){
  $(document).ready(function() {
                    $('iframe').load(function() {

                          $(this).height( $(this).contents().find("body").height() );


                    });
                  });
                });

</script>
<!-- page -->
<div class="typrx-page"><!-- values page -->
<iframe id="your-iframe-id" scrolling="no"  src="http://app.typrx.com/"></iframe>
</div><!-- end of typrx page div-->

<!-- end of page -->
<!-- includes -->
<?php include_once '../footer.php'; ?>
<!-- end of includes -->
