$(document).ready(function() {
    // Animated text in the box on the introduction section
    $("#id-intro__text--replace").Morphext({
        animation: "flipInX"
    });

    // Fade in the site-header
    $("#id-site-header").delay(1500).fadeIn("slow");

    // Scroll events
    var scherm = $(window);
    scherm.scroll(function() {
        if (scherm.scrollTop() > (scherm.height() / 2 - 90)) {
            $("#id-site-header__logo").fadeIn("slow");
        } else if (scherm.scrollTop() < (scherm.height() / 2 - 90)) {
            $("#id-site-header__logo").fadeOut("slow");
        }
    });
});
