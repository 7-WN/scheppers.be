$(document).ready(function() {
    // Hide all secondary nav-bars
    $(".nav-bar--secondary").hide();

    // Animated text in the box on the introduction section
    $("#id-intro__text--replace").Morphext({
        animation: "flipInX"
    });

    // Fade in the site-header
    $("#id-site-header").delay(1500).fadeIn("slow");

    // Change the background-images
    changeBackgrounds = function() {
        var backgroundImages = $(".intro__background-image");
        var backgroundCounter = 0;
        var backgroundTimer = setInterval(function() {
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
    }();

    // Scroll events
    var scherm = $(window);

    // show the logo on the main nav-bar, when it is not visible in the main window anymore
    scherm.scroll(function() {
        if (scherm.scrollTop() > (scherm.height() / 2 - 90)) {
            $("#id-site-header__logo").fadeIn();
        } else if (scherm.scrollTop() < (scherm.height() / 2 - 90)) {
            $("#id-site-header__logo").fadeOut();
        }
    });

    // Show the correct secondary nav-bar when a link on the main nav-bar is clicked
    $(".nav-bar__item-link--primary").click(function() {
        var link = $(this);
        $(".nav-bar__item-link--primary").removeClass("nav-bar__item-link--active");
        link.addClass("nav-bar__item-link--active");
        if (link.data("nav-bar--secondary")) {
            $(".nav-bar--secondary").hide();
            $("#" + link.data("nav-bar--secondary")).fadeIn("slow");
        }
        return true;
    });
});
