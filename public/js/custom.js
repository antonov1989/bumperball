
$(function(){

    /** Scroll top btn Init
     **********************************************************/
    var $scrollTopBtn = $('#scrollTop-btn');

    //Scroll to Top Button
    $(window).scroll(function(){
        if ($(this).scrollTop() > 500) {
            $scrollTopBtn.parent().addClass('scrolled');
        } else {
            $scrollTopBtn.parent().removeClass('scrolled');
        }
    });
    $scrollTopBtn.click(function(){
        $('html, body').animate({scrollTop : 0}, {duration: 700, easing:"easeOutExpo"});
    });

    /** Hover btn menu catalog Init
     **********************************************************/
    $(".main-header .dropdown a:first-child").hover(function(){
        $(".main-header .dropdown a:first-child").removeClass("active");
        $(this).addClass("active");
        $("#darkness").addClass("active").fadeIn(500);
        var curMenuSelector = $(this).attr('data-tab');
        if (!curMenuSelector) {
            $(".dropdown-menu").stop(true,true).hide();
            return;
        }
        var curMenu = $(curMenuSelector);
        $(".dropdown-menu").not(curMenu).stop(true,true).hide();
        $(curMenu).stop(true,true).fadeIn(500);
    });

    //$("header .tab-item").mouseleave(function(){
    //    $(".main-header .dropdown a").removeClass("active");
    //    $(".dropdown-menu").hide();
    //});
    $("header .main-header").mouseleave(function(){
        $(".main-header .dropdown a:first-child").removeClass("active");
        $(".dropdown-menu").hide();
        $("#darkness").removeClass("active");
    });
    $(".dropdown-menu").mouseover(function(){
        $(".main-header .dropdown a").addClass("active");
        $(this).show();
    });

    /** Button phones header Init
     **********************************************************/
    $(".navbar-right .menu-dropdown .current").click(function(){
        $(this).toggleClass("active");
        $(".navbar-right .menu-dropdown .dropdown").slideToggle();
    });

    /** Button search header Init
     **********************************************************/
    $("header .header-search > a").click(function(e){
        e.preventDefault();
        $(".header-search .search-dropdown").addClass("active");
        $(".header-search .input-box .form-control").focus();

    });

    $('.mega-dropdown-menu .nav-tabs li a').hover(function (e) {
        e.preventDefault();
        $(this).tab('show')
    });


    /** Button menu on tablet on top header Init
     **********************************************************/
    $(".nav-site .navbar-toggle").click(function(){
        $(this).toggleClass("active");
        $("#top-menu").slideToggle();
    });

    /** Main menu Init
     **********************************************************/
    $("#menu").mmenu({
        "extensions": [
            //"effect-menu-zoom",
            "pageshadow",
            "theme-black"
        ],
        "offCanvas": {
            "position": "right"
        },
        navbars: [ {
            content: ['<a href="#" class="fa fa-envelope"></a>', '<a href="#" class="fa fa-twitter"></a>', '<a href="#" class="fa fa-facebook"></a>']
        }, {
            content: ["prev", "title"]
        }],
        "autoHeight": true,
        //"navbars": [
        //    {
        //        "position": "bottom",
        //        "content": [
        //            "<a>Some text :)</a>"
        //        ]
        //    }
        //],
        "sectionIndexer": true
    });

    /** Sign in / Sign up form switching (in modal)
     *********************************************************/
    $('.form-switch a').click(function(e){
        var form = $(this).attr('href');
        e.preventDefault();
        $(form + '> a').click();
    });

    /** Switch to Sign In/Sign Up Form when Modal open (For separate Sign In/Sign Up button)
     *****************************************************************************************/
    $('[data-modal-form="sign-in"]').click(function(){
        $('#form-2 a').click();
    });
    $('[data-modal-form="sign-up"]').click(function(){
        $('#form-1 a').click();
    });

    /** Material Effect on Inputs
     **********************************************************/
    var $input = $('.form-input input, .form-input textarea');
    $input.on('focus', function(){
        if (this.value == '') {
            $(this).parent().addClass('active');
        }
    });
    $input.on('blur', function(){
        if (this.value == '') {
            $(this).parent().removeClass('active');
        }
    });

    $(".product-block .product-name").dotdotdot({
        ellipsis: "... ",
        wrap: "word",
        fallbackToLetter: true,
        after: null,
        watch: false,
        height: null,
        tolerance: 0,
        callback: function(isTruncated, orgContent){},
        lastCharacter: {
            remove: [" ", ",", ";", ".", "!", "?"],
            noEllipsis: []
        }
    });

    function recalculateTopBtn()
    {
        var containerWidth = $('main .container:first').width();
        var documentWidth = $(document).width();
        var diff = documentWidth - containerWidth;

        var halfWidth = diff / 2;

        if (halfWidth >= 50) {
            $scrollTopBtn.removeClass('sticky-min').width(halfWidth);
        } else {
            $scrollTopBtn.addClass('sticky-min');
        }

        console.log(halfWidth);
    }

    $( window ).resize(function() {
        recalculateTopBtn();
    });

    recalculateTopBtn();
});

$(document).mouseup(function (e){
    var search = $("header .header-search");
    if (!search.is(e.target)
            && search.has(e.target).length === 0) {
        $(".header-search .search-dropdown").removeClass("active");
    }
});