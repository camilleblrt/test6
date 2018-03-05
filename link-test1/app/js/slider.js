
$(window).load(function () {
    jQuery(".logo-animation").addClass('animated bounceInLeft');
    jQuery(".logo-animation").css('opacity', 1);

    // resizeSlider();
    // $('#awesome-products').css('min-height', 0);

    var location = window.location.pathname.substring(1, 4);
    switch (location) {
        case "de/": location = "/de";
            break;

        default: location = "";
            break;
    }
    switch (window.location.pathname) {
        case location + '/': $("#home-slider-1").attr("src", "/images/slider/daskeyboard-4-professional-front-view.png");
            break;
        case location + '/index.php': $("#home-slider-1").attr("src", "/images/slider/daskeyboard-4-professional-front-view.png");
            break;

        case location + '/model-s-ultimate/': $("#home-slider-1").attr("src", "/images/product/model-s-ultimate/blank_mechanical_keyboard.jpg");
            break;
        case location + '/model-s-ultimate/index.php': $("#home-slider-1").attr("src", "/images/product/model-s-ultimate/blank_mechanical_keyboard.jpg");
            break;

        case location + '/model-s-professional/': $("#home-slider-1").attr("src", "images/model_s_pro_slider_2016.png");
            break;
        case location + '/model-s-professional/index.php': $("#home-slider-1").attr("src", "images/model_s_pro_slider_2016.png");
            break;

        case location + '/model-s-professional-for-mac/': $("#home-slider-1").attr("src", "/images/product/model-s-professional-for-mac/mac_mechanical_keyboard.jpg");
            break;
        case location + '/model-s-professional-for-mac/index.php': $("#home-slider-1").attr("src", "/images/product/model-s-professional-for-mac/mac_mechanical_keyboard.jpg");
            break;

        case location + '/daskeyboard-space-pen/': $("#home-slider-1").attr("src", "/images/product/space_pen/space_pen_1.jpg");
            break;
        case location + '/daskeyboard-space-pen/index.php': $("#home-slider-1").attr("src", "/images/product/space_pen/space_pen_1.jpg");
            break;

        case location + '/gaming-sling/': $("#home-slider-1").attr("src", "/images/product/gaming_sling/gaming_sling_1.jpg");
            break;
        case location + '/gaming-sling/index.php': $("#home-slider-1").attr("src", "/images/product/gaming_sling/gaming_sling_1.jpg");
            break;

        case location + '/hackshield-backpack/': $("#home-slider-1").attr("src", "/images/product/hackshield-backpack/RFID_blocking_backpack_1.jpg");
            break;
        case location + '/hackshield-backpack/index.php': $("#home-slider-1").attr("src", "/images/product/hackshield-backpack/RFID_blocking_backpack_1.jpg");
            break;

        case location + '/hackshield-messenger-bag/': $("#home-slider-1").attr("src", "/images/product/hackshield-messenger-bag/RFID_blocking_messenger_bag.jpg");
            break;
        case location + '/hackshield-messenger-bag/index.php': $("#home-slider-1").attr("src", "/images/product/hackshield-messenger-bag/RFID_blocking_messenger_bag.jpg");
            break;

        case location + '/hackshield-wallet/': $("#home-slider-1").attr("src", "/images/product/hackshield-wallet/RFID_blocking_wallet.jpg");
            break;
        case location + '/hackshield-wallet/index.php': $("#home-slider-1").attr("src", "/images/product/hackshield-wallet/RFID_blocking_wallet.jpg");
            break;

        case location + '/daskeyboard-4-professional/': $("#home-slider-1").attr("src", "/images/product/daskeyboard-4-professional/daskeyboard-4-professional-front-view.jpg");
            break;
        case location + '/daskeyboard-4-professional/index.php': $("#home-slider-1").attr("src", "/images/product/daskeyboard-4-professional/daskeyboard-4-professional-front-view.jpg");
            break;

        case location + '/daskeyboard-4-ultimate/': $("#home-slider-1").attr("src", "/images/product/daskeyboard-4-ultimate/daskeyboard-4-ultimate-front-view-carousel.jpg");
            break;
        case location + '/daskeyboard-4-ultimate/index.php': $("#home-slider-1").attr("src", "/images/product/daskeyboard-4-ultimate/daskeyboard-4-ultimate-front-view-carousel.jpg");
            break;

        case location + '/daskeyboard-4C-ultimate/': $("#home-slider-1").attr("src", "/images/product/daskeyboard-4C-ultimate/daskeyboard-4C-ultimate-front-view.jpg");
            break;
        case location + '/daskeyboard-4C-ultimate/index.php': $("#home-slider-1").attr("src", "/images/product/daskeyboard-4C-ultimate/daskeyboard-4C-ultimate-front-view.jpg");
            break;

        case location + '/daskeyboard-4C-professional/': $("#home-slider-1").attr("src", "/images/product/daskeyboard-4C-professional/daskeyboard-4C-professional-front-view.jpg");
            break;
        case location + '/daskeyboard-4C-professional/index.php': $("#home-slider-1").attr("src", "/images/product/daskeyboard-4C-professional/daskeyboard-4C-professional-front-view.jpg");
            break;

        case location + '/daskeyboard-4-professional-for-mac/': $("#home-slider-1").attr("src", "/images/product/daskeyboard-4-professional-for-mac/daskeyboard-4-professional-for-mac-front-view.jpg");
            break;
        case location + '/daskeyboard-4-professional-for-mac/index.php': $("#home-slider-1").attr("src", "/images/product/daskeyboard-4-professional-for-mac/daskeyboard-4-professional-for-mac-front-view.jpg");
            break;

    };


    // $("#awesome-products img").addClass('animated fadeIn');
    $(".carousel-control").show();
    $(".carousel-indicators").show();

    filterProducts();

    function filterProducts() {
        var value = getParameter('filter');
        if (value === null) {
            return;
        }
        if (value !== ".keyboard" && value !== ".accessories" && value !== ".bag" && value !== ".gaming-bag") {
            value = "*";
        }
        var jQuerycontainer = jQuery('.portfolio');

        jQuerycontainer.isotope({
            itemSelector: '.item'
        });

        var jQueryoptionSet = jQuery('#options .option-set .selected');
        jQueryoptionSet.removeClass('selected');

        var newFilter = jQuery("[data-option-value='" + value + "']");
        newFilter.addClass('selected');

        var options = {},
            key = 'filter',

            // parse 'false' as false boolean
            value = value === 'false' ? false : value;
        options[key] = value;
        if (key === 'layoutMode' && typeof changeLayoutMode === 'function') {
            // changes in layout modes need extra logic
            changeLayoutMode(jQuerythis, options)
        } else {
            // otherwise, apply new options
            jQuerycontainer.isotope(options);
        }
    }

    function getParameter(paramName) {
        var searchString = window.location.search.substring(1),
            i, val, params = searchString.split("&");

        for (i = 0; i < params.length; i++) {
            val = params[i].split("=");
            if (val[0] == paramName) {
                return unescape(val[1]);
            }
        }
        return null;
    }





    // window.onresize = resizeSlider;
    $('#carousel-example-generic').on('slide.bs.carousel', function () {
        resizeSlider();
    });

    function resizeSlider() {
        var windowWidth = $(window).width();
        if (windowWidth < 1500) {
            windowHeight = $(window).height() - 100;
        }
        else {
            var windowHeight = $(window).height() - 100;
        }

        var headerHeight = $('#header').height();
        var sliderHeightMax = windowHeight - headerHeight;
        var activeImgSlider = $('.carousel-inner .itemSlider img');
        var activeSpanSlider = $('.carousel-inner .itemSlider span');
        var videoPlay = $('.video-play');

        var naturalHeight = 937;
        var naturalWidth = 1500;

        var videoPlayNaturalHeight = 300;
        var videoPlayNaturalWidth = 300;



        if (document.getElementById(activeImgSlider.attr("id")) != null && windowWidth > 767) {

            var sliderSupposeHeight = (windowWidth * naturalHeight) / naturalWidth;

            $('.carousel-inner').css("max-height", sliderHeightMax);
            activeImgSlider.css('width', '100%');
            activeImgSlider.css('max-width', '100%');
            activeImgSlider.css('margin-left', '0px');

            if (sliderHeightMax < sliderSupposeHeight) {

                var marginTopSliderImg = - (sliderSupposeHeight - sliderHeightMax) / 2;
                activeSpanSlider.css('margin-top', marginTopSliderImg);
                $(".carousel-text-bottom").css("bottom", 55 - marginTopSliderImg + "px");

            }
            else {
                $(".carousel-text-bottom").css("bottom", "55px");
            }
        }
        if (document.getElementById(activeImgSlider.attr("id")) != null && windowWidth <= 767 && windowWidth > 480) {
            var sliderSupposeWidth = (700 * naturalWidth) / naturalHeight;
            var marginLeft = -(sliderSupposeWidth - windowWidth) / 2;
            activeImgSlider.css('width', sliderSupposeWidth);
            activeImgSlider.css('margin-left', marginLeft);
            activeImgSlider.css('max-width', sliderSupposeWidth);
            $('.carousel').css('background-color', 'white');
        }

        if (document.getElementById(activeImgSlider.attr("id")) != null && windowWidth <= 480) {
            var sliderSupposeWidth = (500 * naturalWidth) / naturalHeight;
            var marginLeft = -(sliderSupposeWidth - windowWidth) / 2;
            activeImgSlider.css('width', sliderSupposeWidth);
            activeImgSlider.css('margin-left', marginLeft);
            activeImgSlider.css('max-width', sliderSupposeWidth);
            $('.carousel').css('background-color', 'white');

        }



        /*   For the video in the carousel  */



        setTimeout(function () {
            var videoPlayHeight = $('.carousel-inner').height() * videoPlayNaturalHeight / 1561;
            var paddingTop = ($('.carousel-inner').height() / 2) - (videoPlayHeight / 2) + (parseInt(activeSpanSlider.css('marginTop'))) / 3 + 20;

            var videoPlayWidth = $('.carousel-inner').width() * videoPlayNaturalWidth / 2500;
            var paddingLeft = ($('.carousel-inner').width() / 2) - (videoPlayWidth / 2);

            if (document.getElementById(activeImgSlider.attr("id")) != null && windowWidth <= 767) {
                var paddingTop = ($('.carousel-inner').height() / 2) - (videoPlayHeight / 2) + (parseInt(activeSpanSlider.css('marginTop'))) / 3 - 60;
                var paddingLeft = ($('.carousel-inner').width() / 2) - (videoPlayWidth / 2) - 30;

                videoPlay.css("width", videoPlayWidth + "px");
                videoPlay.css("height", videoPlayHeight + "px");
                videoPlay.css("left", paddingLeft + "px");
                videoPlay.css("top", paddingTop + "px");
            } else {

                videoPlay.css("width", videoPlayWidth + "px");
                videoPlay.css("height", videoPlayHeight + "px");
                videoPlay.css("left", paddingLeft + "px");
                videoPlay.css("top", paddingTop + "px");
            }
        }, 100);

    }



    $('.carousel').carousel({
        interval: 8000
    });
    //setTimeout(function () { $(".fb-like>span").height(26); $(".social-share-button").show(); }, 1000);

});
