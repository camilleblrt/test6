<?php include_once 'i18n/locales/language.php' ?>
<?php include_once 'header.php' ?>

<!-- Content Start -->
<div id="main">
    <!-- Title, Breadcrumb Start-->
    <div class="breadcrumb-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                    <h1 class="title">404 Not Found</h1>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                    <div class="breadcrumbs pull-right">
                        <ul>
                            <li>You are here:</li>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#">Pages</a></li>
                            <li>404 Not Found</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Title, Breadcrumb End-->
    <!-- Main Content start-->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h2 class="text-center">Whoops... Page Not Found !!!</h2>
                    <div id="not-found">
                        <h2>404 <i class="icon-question-sign"></i></h2>
                    </div>
                    <div class="back-home">
                        <p>Your requested page could not be found or it is currently unavailable.<br>
                            Please <a href="<?php echo $current_language ?>/">click here</a> to go back to our home page.
                        </p>
                    </div>
                </div>
            </div>
            <div class='divider'></div>
        </div>
    </div>

    <!-- Main Content end-->
</div>
<!-- Content End -->
<?php include_once 'footer.php'; ?>
