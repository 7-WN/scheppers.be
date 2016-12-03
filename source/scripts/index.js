// Parsing url params see: http://www.jquerybyexample.net/2012/06/get-url-parameters-using-jquery.html
var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
};

// This is where shit gets done
$(document).ready(function() {
    // Hide and show the header on the landing page when not arriving from an internal link
    if (!getUrlParameter("internal")) { // only if we weren't on the site before
        // Hide site-header
        $("#id-site-header").hide();
        // Hide secondary nav-bar on home page
        $("#id-nav-bar--school").hide();
        // Hide intro__logo
        $("#id-intro__logo-wrapper").hide();
        // Hide intro__content
        $("#id-intro__content").hide();
        // Fade in stuff after acceptable delays
        $("#id-intro__logo-wrapper").delay(500).fadeIn("slow");
        $("#id-intro__content").delay(1000).fadeIn("slow");
        $("#id-site-header").delay(2000).fadeIn("slow");
    } else { // when we arrive from an internal link
        $("#id-nav-bar__item--school").addClass("nav-bar__item-link--active"); // make the button active
    }
    // Show the secondary nav-bar on the home page when the link is clicked
    $("#id-nav-bar__item--school").click(function() {
        $("#id-nav-bar--school").fadeIn("slow");
        $(this).addClass("nav-bar__item-link--active");
        return true;
    });

    // Animated text in the box on the introduction section
    $("#id-intro__text--replace").Morphext({
        animation: "flipInX"
    });

    // Change the background-images
    changeBackgrounds = function() {
        var backgroundImages = $(".intro__background-image");
        var backgroundCounter = 0;
        return setInterval(function() {
            var backgroundImage = $(backgroundImages.get(backgroundCounter));
            backgroundImage.fadeOut(0);
            backgroundImages.css("z-index", "-99");
            backgroundImage.css("z-index", "-90");
            backgroundImage.fadeIn("slow");
            backgroundCounter++;
            if (backgroundCounter >= backgroundImages.size()) {
                backgroundCounter = 0;
            }
        }, 3000);
    };
    var bgTimer = changeBackgrounds();

    /**
     *    inView effects
     */
    // Configuration
    inView.offset({
        top: 115
    });

    // When we scroll to the right page sections, make the corresponding nav-bar buttons active
    inView(".in-view").on("enter", function(el) {
        $(".nav-bar__item-link--secondary").removeClass("nav-bar__item-link--active");
        $("#" + $(el).attr("data-btn")).addClass("nav-bar__item-link--active");
    });

    // show the site-logo in the nav-bar when it dissapears from view and vice versa
    inView("#id-intro__logo").on("enter", function(el) {
        $("#id-site-header__logo").fadeOut();
    });
    inView("#id-intro__logo").on("exit", function(el) {
        $("#id-site-header__logo").fadeIn();
    });

    // show the secondary nav-bar when we leave the intro section
    inView(".intro").once("exit", function(el) {
        $("#id-nav-bar--school").fadeIn("slow");
        $("#id-nav-bar__item--school").addClass("nav-bar__item-link--active");
    });
});
