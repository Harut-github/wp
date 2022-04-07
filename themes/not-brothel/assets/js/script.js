//  ================ -menu-click-start- ================
$(document).ready(function () {
    var time = 0;
    $('.open-menu').on('click', function () {
        $(this).toggleClass('close-menu');
        if (window.innerHeight < 380) {
        }
        if ($(this).hasClass('close-menu')) {
            $('.menu-cnt').addClass('transition-menu');
            $('.menu-header-mobile').css({'width': '100%', transition: '0.3s'});
            $('body').addClass('body_fix');
        } else {
            $('.menu-cnt').addClass('menu-width');
            $('body').removeClass('body_fix');
            $('.menu-cnt').removeClass('transition-menu');
            time = 0;
        }

    });
    $('.for-mobile-bg').on('click', function () {
        if ($('.open-menu').hasClass('close-menu')) {
            $('.open-menu').removeClass('close-menu')
        }
        $('.menu-cnt').removeClass('transition-menu');
        $('.menu-cnt').css({width: '0%!important'});
        $('body').removeClass('body_fix');
        time = 0;
    })
});

//  ================ -menu-click-end- ================

$(document).ready(function() {
    $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });
});


var swiper = new Swiper(".franchise-slide", {
    slidesPerView: 2,
    breakpoints: {
        '999': {
            slidesPerView: 2,
            slidesPerGroup: 1,
        },
        '769': {
            slidesPerView: 1,
            slidesPerGroup: 1,
        },
        '320': {
            slidesPerView: 1,
            slidesPerGroup: 1,
        },
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

});

$('.open_modal').on('click', function () {
    var attr = $(this).attr('data-val');
    var modal = $('#' + attr);
    let isCopyText = $(this).attr('data-is-copy-text');
    if (isCopyText) {
        $('.add-text-btn')[0].innerText = $(this)[0].innerText;
    }
    modal.removeClass('out');
    modal.fadeIn();
});

$('.close').on('click', function () {
    var prt = $(this).parents('.modal');
    prt.addClass('out')
    setTimeout(function () {
        prt.fadeOut();
    }, 100);

})

$('.close_this').on('click', function () {
    var prt = $(this).parents('.modal');
    prt.addClass('out')
    setTimeout(function () {
        prt.fadeOut();
    }, 100)

});
$(window).on('click', function (event) {
    $('.modal').each(function () {
        var gtattr = $(this).attr('id');
        var new_mod = $('#' + gtattr);
        var md_cnt = $(new_mod).find('.modal-content');

        if (event.target === $(md_cnt)[0]) {
            setTimeout(function () {
                $(new_mod).addClass('out')
                $(new_mod).fadeOut()

            }, 100)
        }
        if (event.target === this) {
            setTimeout(function () {
                $(new_mod).addClass('out')
                $(new_mod).fadeOut()

            }, 100)

        }
    })
});



$(function () {
    var Accordion = function (el, multiple) {
        this.el = el || {};
        this.multiple = multiple || false;
        var links = this.el.find('.link');
        links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
    };

    Accordion.prototype.dropdown = function (e) {
        var $el = e.data.el;
        $this = $(this),
            $next = $this.next();

        $next.slideToggle();


        if (!e.data.multiple) {

            $el.find('.submenu').not($next).slideUp();
        }

        if (!$this.hasClass('open')) {
            $('.link').each(function () {
                $(this).removeClass('open')
            })
            $this.addClass('open')
        } else {
            $this.removeClass('open')
        }
    }

    var accordion = new Accordion($('#accordion'), false);
});


$('.menu a').click(function () {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
        && location.hostname == this.hostname) {
        var $target = $(this.hash);
        $target = $target.length && $target
            || $('[name=' + this.hash.slice(1) + ']');
        if ($target.length) {
            var targetOffset = $target.offset().top - 10;
            $('html,body')
                .animate({scrollTop: targetOffset}, 2000);
            return false;
        }
    }
});