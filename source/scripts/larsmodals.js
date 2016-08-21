$(document).ready(function() {
    // create node for the curtain
    $("body").prepend("<div id='curtain' class='hidden'></div>");

    // create nodes for the modal views
    $(".modal").each(function() {
        var id = $(this).attr("id") + "-modal-view";
        var contents = this.innerHTML;
        $("body").append("<div class='modal-view <!--hidden-->' id='" + id + "'>" + contents + "</div>");
    });

    // create click events for the modal buttons
    $(".modal-opener").each(function() {
        var target = $(this).attr("data-target") + "-modal-view";
        $(this).click(function() {
            console.log(target);
            $("#curtain").fadeIn();
            $("#" + target).fadeIn("slow");
        });
    });

    // create click events for closing the modals
    $(".modal-view").each(function() {
        $(this).click(function() {
            $(this).fadeOut();
            $("#curtain").fadeOut("slow");
        });
    });
    $("#curtain").click(function() {
        $(".modal-view").fadeOut();
        $(this).fadeOut("slow");
    });

});
