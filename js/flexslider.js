// Can also be used with $(document).ready()

$(window).load(function() {
        // The slider being synced must be initialized first
        $('.flexslider_m').flexslider({
                animation: "slide",
                controlNav: false
        });

        $('#carousel').flexslider({
                animation: "slide",
                controlNav: false,
                animationLoop: false,
                slideshow: false,
                itemWidth: 210,
                itemMargin: 5,
                asNavFor: '#slider'
        });
                        
        $('#slider').flexslider({
                animation: "slide",
                controlNav: false,
                animationLoop: false,
                slideshow: false,
                sync: "#carousel"
        });
});