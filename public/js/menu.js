! function(n) {
    var o = n(window),
        e = n("body"),
        f = n("#desktop"),
        h = n("#mobile");
    breakpoints({
        xlarge: ["1281px", "1680px"],
        large: ["981px", "1280px"],
        medium: ["737px", "980px"],
        small: ["481px", "736px"],
        xsmall: ["361px", "480px"],
        xxsmall: [null, "360px"]
    }), o.on("load", function() {
        window.setTimeout(function() {
            e.removeClass("is-preload")
        }, 100)
    });
    var i = n("#menu");
    i.wrapInner('<div class="inner"></div>'), i._locked = !1, i._lock = function() {
        return !i._locked && (i._locked = !0, window.setTimeout(function() {
            i._locked = !1
        }, 350), !0)
    }, i._show = function() {
        i._lock() && e.addClass("is-menu-visible")
    }, i._hide = function() {
        i._lock() && e.removeClass("is-menu-visible")
    }, i._toggle = function() {
        i._lock() && e.toggleClass("is-menu-visible")
    }, i.appendTo(e).on("click", function(n) {
        n.stopPropagation()
    }).on("click", "a", function(o) {
        var e = n(this).attr("href");
        o.preventDefault(), o.stopPropagation(), i._hide(), "#menu" != e && window.setTimeout(function() {
            window.location.href = e
        }, 350)
    }).append('<a class="close" href="#menu">Close</a>'), e.on("click", 'a[href="#menu"]', function(n) {
        n.stopPropagation(), n.preventDefault(), i._toggle()
    }).on("click", function(n) {
        i._hide()
    }).on("keydown", function(n) {
        27 == n.keyCode && i._hide()
    })

    if (window.innerWidth < 600){
        f.addClass("hide-desktop");
        h.addClass("show-mobile");
    } else if(window.innerWidth > 599){
        f.removeClass("hide-desktop");
        h.removeClass("show-mobile");
    } 

    window.onresize = function(event) {
        if (window.innerWidth < 600){
            f.addClass("hide-desktop");
            h.addClass("show-mobile");
        } else if(window.innerWidth > 599){
            f.removeClass("hide-desktop");
            h.removeClass("show-mobile");
        } 
    };

    $(window).scroll(function() {
        if ($("#header").offset().top > 96) {
            $("#header").addClass("menu-change");
        } else {
            $("#header").removeClass("menu-change");
        }
      });


    
    
}(jQuery);