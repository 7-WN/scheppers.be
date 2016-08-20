$(document).ready(function() {
    // Hide secondary nav-bar on home page
    $("#id-nav-bar--school").hide();

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

    // Fade in the site-header
    $("#id-site-header").delay(1500).fadeIn("slow");

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

    // Scroll events
    var scherm = $(window);

    // show the logo on the main nav-bar, when it is not visible in the main window anymore
    scherm.scroll(function() {
        if (scherm.scrollTop() > (scherm.height() / 2 - 90)) {
            $("#id-site-header__logo").fadeIn();
            clearInterval(bgTimer); // stop changing the backgroundimages in the intro
        } else if (scherm.scrollTop() < (scherm.height() / 2 - 90)) {
            $("#id-site-header__logo").fadeOut();
        }
    });
});
