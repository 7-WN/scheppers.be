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
    var backgroundCounter = 0;
    var backgroundImages = ["images/sancta-maria.jpg", "images/deurne.jpg"];
    var backgroundTimer = setInterval(function() {
        $("#id-introduction").css("background-image", "linear-gradient(rgba(0, 0, 0, .6),rgba(0, 0, 0, .6)),url(" + backgroundImages[backgroundCounter] + ")", "animation-name", "animatedBackground", "animation-duration", "3000ms");
        backgroundCounter++;
        if (backgroundCounter >= backgroundImages.length) {
            backgroundCounter = 0;
        }
    }, 4000);

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
