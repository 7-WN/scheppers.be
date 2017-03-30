var schepLarge;
if ($(window).width() > 1200) {
    schepLarge = true;
}

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
    if ($("body").hasClass("landing-page")) {
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
            $("#id-intro__logo-wrapper").delay(500).fadeIn(1000);
            $("#id-intro__content").delay(1000).fadeIn(1000);
            $("#id-site-header").delay(2000).fadeIn(1000);
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
                if ($("#id-nav-bar--school").css("display") != "none") { // if the secondary nav-bar is visble, we adapt accordingly
                    $("#id-intro__background").css("top", "6.4720rem");
                } else if ($("#id-intro__background").css("top") == "0px") { // at the first run the site-header is visible, so we adapt the top and make the whole picture visible
                    $("#id-intro__background").css("top", "3.2360rem");
                }
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
    }

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
        $(".nav-panel__item-link").removeClass("nav-panel__item-link--active");
        $("#" + $(el).attr("data-btn")).addClass("nav-bar__item-link--active");
        $("#pan-" + $(el).attr("data-btn")).addClass("nav-panel__item-link--active");
    });


    // show the site-logo in the nav-bar when it dissapears from view and vice versa
    inView("#id-intro__logo").on("enter", function(el) {
        if (schepLarge) {
            $("#id-site-header__logo").fadeOut();
        }
    });
    inView("#id-intro__logo").on("exit", function(el) {
        if (schepLarge) {
            $("#id-site-header__logo").fadeIn();
        }
    });

    // show the secondary nav-bar when we leave the intro section
    inView(".intro").once("exit", function(el) {
        if (schepLarge) {
            $("#id-nav-bar--school").fadeIn("slow");
            $("#id-nav-bar__item--school").addClass("nav-bar__item-link--active");
        }
    });


    // scroll to the correct section when a nav-bar button is clicked
    $(".nav-bar__item-link--secondary").on("click", function(el) {
        var toHere = $(this).attr("href");
        var top = $(toHere).offset().top - 90;
        $("html, body").animate({
            scrollTop: top
        }, 1200);
    });
});

// Toggle nav-panel
$("#nav-panel-toggle").click(function() {
    $("#id-nav-panel").toggleClass("nav-panel--visible");
    return false;
});

// scroll to the correct section when a nav-panel button is clicked
$(".nav-panel__item-link").on("click", function(el) {
    var toHere = $(this).attr("href");
    var top = $(toHere).offset().top - 49;
    $("#id-nav-panel").toggleClass("nav-panel--visible");
    $("html, body").animate({
        scrollTop: top
    }, 1200);
});

// When we scroll to the right page sections, make the corresponding nav-panel buttons active
inView(".in-view").on("enter", function(el) {
    $(".nav-panel__item-link").removeClass("nav-panel__item-link:active");
    $("#" + $(el).attr("data-btn")).addClass("nav-panel__item-link:active");
});

//gallery lightbox
/*
 * jQuery Rebox [http://trentrichardson.com/examples/jQuery-Rebox]
 * By: Trent Richardson [http://trentrichardson.com]
 *
 * Copyright 2014 Trent Richardson
 * Dual licensed under the MIT license.
 * http://trentrichardson.com/Impromptu/MIT-LICENSE.txt
 */
(function($) {
    $.rebox = function($this, options) {
        this.settings = $.extend(true, {}, $.rebox.defaults, options);
        this.$el = $this; // parent container holding items
        this.$box = null; // the lightbox modal
        this.$items = null; // recomputed each time its opened
        this.idx = 0; // of the $items which index are we on
        this.enable();
    };

    $.rebox.defaults = {
        theme: 'rebox', // class name parent gets (for your css)
        selector: null, // the selector to delegate to, should be to the <a> which contains an <img>
        prev: '&larr;', // use an image, text, whatever for the previous button
        next: '&rarr;', // use an image, text, whatever for the next button
        loading: '%', // use an image, text, whatever for the loading notification
        close: '&times;', // use an image, text, whatever for the close button
        speed: 400, // speed to fade in or out
        zIndex: 1000, // zIndex to apply to the outer container
        cycle: true, // whether to cycle through galleries or stop at ends
        captionAttr: 'title', // name of the attribute to grab the caption from
        template: 'image', // the default template to be used (see templates below)
        templates: { // define templates to create the elements you need function($item, settings)
            image: function($item, settings, callback) {
                return $('<img src="' + $item.attr('href') + '" class="' + settings.theme + '-content" />').load(callback);
            }
        }
    };

    $.rebox.setDefaults = function(options) {
        $.rebox.defaults = $.extend(true, {}, $.rebox.defaults, options);
    };

    $.rebox.lookup = {
        i: 0
    };

    $.extend($.rebox.prototype, {
        enable: function() {
            var t = this;

            return t.$el.on('click.rebox', t.settings.selector, function(e) {
                e.preventDefault();
                t.open(this);
            });
        },
        open: function(i) {
            var t = this;

            // figure out where to start
            t.$items = t.settings.selector === null ? t.$el : t.$el.find(t.settings.selector);
            if (isNaN(i)) {
                i = t.$items.index(i);
            }

            // build the rebox
            t.$box = $('<div class="' + t.settings.theme + '" style="display:none;">' +
                    '<a href="#" class="' + t.settings.theme + '-close ' + t.settings.theme + '-button">' + t.settings.close + '</a>' +
                    '<a href="#" class="' + t.settings.theme + '-prev ' + t.settings.theme + '-button">' + t.settings.prev + '</a>' +
                    '<a href="#" class="' + t.settings.theme + '-next ' + t.settings.theme + '-button">' + t.settings.next + '</a>' +
                    '<div class="' + t.settings.theme + '-contents"></div>' +
                    '<div class="' + t.settings.theme + '-caption"><p></p></div>' +
                    '</div>').appendTo('body').css('zIndex', t.settings.zIndex).fadeIn(t.settings.speed)
                .on('click.rebox', '.' + t.settings.theme + '-close', function(e) {
                    e.preventDefault();
                    t.close();
                })
                .on('click.rebox', '.' + t.settings.theme + '-next', function(e) {
                    e.preventDefault();
                    t.next();
                })
                .on('click.rebox', '.' + t.settings.theme + '-prev', function(e) {
                    e.preventDefault();
                    t.prev();
                })
                .on('click.rebox', '.' + t.settings.theme + '-contents', function(e) {
                    e.preventDefault();
                    // if the content is clicked, go to the next, otherwise close
                    if ($(e.target).hasClass(t.settings.theme + '-content') && t.$items.length > 1) {
                        t.next();
                    } else {
                        t.close();
                    }
                });

            // add some key hooks
            $(document).on('swipeLeft.rebox', function(e) {
                    t.next();
                })
                .on('swipeRight.rebox', function(e) {
                    t.prev();
                })
                .on('keydown.rebox', function(e) {
                    e.preventDefault();
                    var key = (window.event) ? event.keyCode : e.keyCode;
                    switch (key) {
                        case 27:
                            t.close();
                            break; // escape key closes
                        case 37:
                            t.prev();
                            break; // left arrow to prev
                        case 39:
                            t.next();
                            break; // right arrow to next
                    }
                });

            t.$el.trigger('rebox:open', [t]);
            t.goto(i);
            return t.$el;
        },
        close: function() {
            var t = this;

            if (t.$box && t.$box.length) {
                t.$box.fadeOut(t.settings.speed, function(e) {
                    t.$box.remove();
                    t.$box = null;
                    t.$el.trigger('rebox:close', [t]);
                });
            }
            $(document).off('.rebox');

            return t.$el;
        },
        goto: function(i) {
            var t = this,
                $item = $(t.$items[i]),
                captionVal = $item.attr(t.settings.captionAttr),
                $cap = t.$box.children('.' + t.settings.theme + '-caption')[captionVal ? 'show' : 'hide']().children('p').text(captionVal),
                $bi = t.$box.children('.' + t.settings.theme + '-contents'),
                $img = null;

            if ($item.length) {
                t.idx = i;
                $bi.html('<div class="' + t.settings.theme + '-loading ' + t.settings.theme + '-button">' + t.settings.loading + '</div>');

                $img = t.settings.templates[$item.data('rebox-template') || t.settings.template]($item, t.settings, function(content) {
                    $bi.empty().append($(this));
                });

                if (t.$items.length == 1 || !t.settings.cycle) {
                    t.$box.children('.' + t.settings.theme + '-prev')[i <= 0 ? 'hide' : 'show']();
                    t.$box.children('.' + t.settings.theme + '-next')[i >= t.$items.length - 1 ? 'hide' : 'show']();
                }
                t.$el.trigger('rebox:goto', [t, i, $item, $img]);
            }
            return t.$el;
        },
        prev: function() {
            var t = this;
            return t.goto(t.idx === 0 ? t.$items.length - 1 : t.idx - 1);
        },
        next: function() {
            var t = this;
            return t.goto(t.idx === t.$items.length - 1 ? 0 : t.idx + 1);
        },
        disable: function() {
            var t = this;
            return t.close().off('.rebox').trigger('rebox:disable', [t]);
        },
        destroy: function() {
            var t = this;
            return t.disable().removeData('rebox').trigger('rebox:destroy');
        },
        option: function(key, val) {
            var t = this;
            if (val !== undefined) {
                t.settings[key] = val;
                return t.disable().enable();
            }
            return t.settings[key];
        }
    });

    $.fn.rebox = function(o) {
        o = o || {};
        var tmp_args = Array.prototype.slice.call(arguments);

        if (typeof(o) == 'string') {
            if (o == 'option' && typeof(tmp_args[1]) == 'string' && tmp_args.length === 2) {
                var inst = $.rebox.lookup[$(this).data('rebox')];
                return inst[o].apply(inst, tmp_args.slice(1));
            } else return this.each(function() {
                var inst = $.rebox.lookup[$(this).data('rebox')];
                inst[o].apply(inst, tmp_args.slice(1));
            });
        } else return this.each(function() {
            var $t = $(this);
            $.rebox.lookup[++$.rebox.lookup.i] = new $.rebox($t, o);
            $t.data('rebox', $.rebox.lookup.i);
        });
    };


})(window.jQuery || window.Zepto || window.$);

// //Responsive nav Tibo
// $(function() {
//     $('.toggle-nav').click(function() {
//         // Calling a function in case you want to expand upon this.
//         toggleNav();
//     });
// });
//
// function toggleNav() {
//     if ($('#site-wrapper').hasClass('show-nav')) {
//         // Do things on Nav Close
//         $('#site-wrapper').removeClass('show-nav');
//     } else {
//         // Do things on Nav Open
//         $('#site-wrapper').addClass('show-nav');
//     }
//
//     //$('#site-wrapper').toggleClass('show-nav');
// }
