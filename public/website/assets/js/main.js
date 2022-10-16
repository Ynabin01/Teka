// add animate.css class(es) to the elements to be animated
function setAnimation(_elem, _InOut) {
    // Store all animationend event name in a string.
    // cf animate.css documentation
    var animationEndEvent = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';

    _elem.each(function () {
        var $elem = $(this);
        var $animationType = 'animated ' + $elem.data('animation-' + _InOut);

        $elem.addClass($animationType).one(animationEndEvent, function () {
            $elem.removeClass($animationType); // remove animate.css Class at the end of the animations
        });
    });
}

$(document).ready(function () {
    $('.main-menu-toggle').click(function () {
        $(this).parent('nav').children('.main-menu-container-collapse').first().slideToggle('1000');
    });
    /* **
     * Sub Menu
     **/
    $('nav .menu-item-has-children').append('<span class="sub-toggle"> <i class="fa fa-plus"></i> </span>');
    $('nav .page_item_has_children').append('<span class="sub-toggle-children"> <i class="fa fa-plus"></i> </span>');

    $('nav .sub-toggle').click(function () {
        $(this).parent('.menu-item-has-children').children('ul.sub-menu').first().slideToggle('1000');
        $(this).children('.fa-plus').first().toggleClass('fa-minus');
    });

    $('.navbar .sub-toggle-children').click(function () {
        $(this).parent('.page_item_has_children').children('ul.sub-menu').first().slideToggle('1000');
        $(this).children('.fa-plus').first().toggleClass('fa-minus');
    });
    /**
     * Sticky nav
     */
    if ($(".header_sticky")[0]) {
        var windowWidth = $(window).width();
        if (windowWidth > 350) {
            var sticky_header = 'enable';

            if (sticky_header == 'enable') {
                try {
                    $(window).scroll(function () {
                        var sticky = $('.header_sticky'),
                            scroll = $(window).scrollTop();

                        if (scroll > 350) {
                            sticky.addClass('header_fixed')
                        } else {
                            sticky.removeClass('header_fixed');
                        }
                    });
                } catch (e) {
                    //console.log( e );
                }
            }
        }
    } else {
        // Do something if class does not exist
    }
//portfolio
    $('.grid').isotope({
        itemSelector: '.grid-item',
    });

// filter items on button click
    $('.filter-button-group').on('click', 'li', function () {
        var filterValue = $(this).attr('data-filter');
        $('.grid').isotope({filter: filterValue});
        $('.filter-button-group li').removeClass('active');
        $(this).addClass('active');
    });
//portfolio


    //counter
    $('.counter').counterUp();
    /*main slider*/
    var owl = $('.main_slider');
    owl.owlCarousel({
        loop: true,
        margin: 10,
        autoplay: false,
        autoplayTimeout: 5000,
        nav: true,
        video: true,
        navText: ["<i class='fas fa-angle-left'></i>", "<i class='fas fa-angle-right'></i>"],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }

    });

    // Fired before current slide change
    owl.on('change.owl.carousel', function (event) {
        var $currentItem = $('.owl-item', owl).eq(event.item.index);
        var $elemsToanim = $currentItem.find("[data-animation-out]");
        setAnimation($elemsToanim, 'out');
    });
    // Fired after current slide has been changed
    var round = 0;
    owl.on('changed.owl.carousel', function (event) {

        var $currentItem = $('.owl-item', owl).eq(event.item.index);
        var $elemsToanim = $currentItem.find("[data-animation-in]");

        setAnimation($elemsToanim, 'in');
    });
    /*main slider*/


    $('.testimonial_slider ').owlCarousel({
        loop: true,
        margin: 10,
        dots: true,
        autoplay: true,
        autoplayTimeout: 5000,
        nav: true,
        navText: ["<i class='fas fa-angle-left'></i>", "<i class='fas fa-angle-right'></i>"],
        items: 1

    });

    $(' .client_logo').owlCarousel({
        loop: true,
        margin: 10,
        dots: true,
        nav: true,
        autoplay: true,
        autoplayTimeout: 5000,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 8
            }
        }

    });

    $('.search_main_menu a').click(function () {
        $('.top-search').slideToggle();
    });
    $('.close-search ').click(function () {
        $('.top-search').slideToggle();
    });


    /**
     * Gallery Lightbox
     */
    $("a[rel^='prettyPhoto']").prettyPhoto({
        theme: 'light_rounded',
        slideshow: 5000,
        autoplay_slideshow: false,
        keyboard_shortcuts: true,
        deeplinking: false,
        default_width: 500,
        default_height: 344,
        social_tools: false,
        allow_resize: false
    });


    /**
     * Faq
     */
    var accordion = (function () {
        var $accordion = $('.js-accordion');
        var $accordion_header = $accordion.find('.js-accordion-header');
        var $accordion_item = $('.js-accordion-item');

        // default settings
        var settings = {
            // animation speed
            speed: 400,

            // close all other accordion items if true
            oneOpen: false
        };

        return {
            // pass configurable object literal
            init: function ($settings) {
                $accordion_header.on('click', function () {
                    accordion.toggle($(this));
                });

                $.extend(settings, $settings);

                // ensure only one accordion is active if oneOpen is true
                if (settings.oneOpen && $('.js-accordion-item.active').length > 1) {
                    $('.js-accordion-item.active:not(:first)').removeClass('active');
                }

                // reveal the active accordion bodies
                $('.js-accordion-item.active').find('> .js-accordion-body').show();
            },
            toggle: function ($this) {

                if (settings.oneOpen && $this[0] != $this.closest('.js-accordion').find('> .js-accordion-item.active > .js-accordion-header')[0]) {
                    $this.closest('.js-accordion')
                        .find('> .js-accordion-item')
                        .removeClass('active')
                        .find('.js-accordion-body')
                        .slideUp()
                }

                // show/hide the clicked accordion item
                $this.closest('.js-accordion-item').toggleClass('active');
                $this.next().stop().slideToggle(settings.speed);
            }
        }
    })();
    accordion.init({speed: 300, oneOpen: true});

});