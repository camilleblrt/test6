$(window).load(function () {
    var facebookLink = $('#facebook-link');
    var twitterLink = $('#twitter-link');
    var NaturalwidthBannerImg = 1170;
    resizeBannerLink();
    //window.onresize = resizeBannerLink;
    
    
    function resizeBannerLink() {
        var headerHeight = $('#img-banner').height();
        var windowWidth = $(window).width();
        facebookLink.css("height", headerHeight);
        twitterLink.css("height", headerHeight);

        if (windowWidth > NaturalwidthBannerImg) {
            var paddingLeftBanner = (windowWidth - NaturalwidthBannerImg) / 2;
            var leftPositionFacebookLink = paddingLeftBanner + 548;
            var leftPositionTwitterLink = paddingLeftBanner + 718;

            facebookLink.css("width", "152px");
            facebookLink.css("left", leftPositionFacebookLink + "px");

            twitterLink.css("width", "172px");
            twitterLink.css("left", leftPositionTwitterLink + "px");
        }
        else {
            facebookLink.css("width", "13%");
            facebookLink.css("left", "47%");

            twitterLink.css("width", "14%");
            twitterLink.css("left", "61.5%");
        }

    };
});
