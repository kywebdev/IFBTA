var $ = jQuery;
jQuery(document).ready(function($) {

    // back to top smooth scrolling
    $('a[href^="#"]').on('click', function(e) {
        e.preventDefault();

        var target = this.hash;
        var $target = $(target);

        $(target + ' .accordion-button').removeClass('collapsed').attr('aria-expanded', 'true');
        $(target + ' + .accordion-collapse').addClass('show');
        
        $('html, body').stop().animate({
            'scrollTop': 0 + $target.offset().top
        }, 900, 'swing', function() {});
    });
    
    // move the nav based on window size
    function moveNav(width) {
        if ($('.menu-toggle').css('display') == 'block') {
            $('.primary-nav').insertBefore('.mobile-menu .subnav');
        } else {
            $('.mobile-menu .primary-nav').insertBefore('.join-member-nav');
        }
    }
    moveNav( $(window).width() );
    $(window).on('resize', function() {
        moveNav( $(this).width() );
    });

    // add active class to nav item based on page template
    if ($('body').hasClass('events')) {
        $('.primary-nav .top-level > li:nth-child(1) a').addClass('active');
    }
    if ($('body').hasClass('chapters')) {
        $('.primary-nav .top-level > li:nth-child(2) a').addClass('active');
    }
    if ($('body').hasClass('membership')) {
        $('.primary-nav .top-level > li:nth-child(3) a').addClass('active');
    }
    if ($('body').hasClass('partners')) {
        $('.primary-nav .top-level > li:nth-child(4) a').addClass('active');
    }
    if ($('body').hasClass('news')) {
        $('.primary-nav ul .parent > a').addClass('active');
        $('.primary-nav ul .parent ul li:nth-child(4) a').addClass('active');
    }
    if ($('body').hasClass('webinars')) {
        $('.primary-nav ul .parent > a').addClass('active');
        $('.primary-nav ul .parent ul li:nth-child(5) a').addClass('active');
    }
    if ($('body').hasClass('certification')) {
        $('.primary-nav .top-level > li:nth-child(6) a').addClass('active');
    }

    // toggle the mobile menu
    $('.menu-toggle').on('click', function() {
        $(this).toggleClass('open');
        $('.mobile-menu').toggleClass('open');
        $('body').toggleClass('nav-open');
    });

    // toggle the mobile menu subnav
    function subnav(width) {
        if ($('.menu-toggle').css('display') == 'block') {
            $('.mobile-menu .menu-item-has-children').on('click', function() {
                $(this).toggleClass('show-children');
                $(this).children('ul').toggleClass('show');
            });
        }
    }
    subnav( $(window).width() );
    $(window).on('resize', function() {
        subnav( $(this).width() );
    });

    // our partners slider
    if ($('.top-partners__slider')) {
        $('.top-partners__slider').slick({
            infinite: true,
            dots: false,
            arrows: true,
            adaptiveHeight: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 6000,
            speed: 1000,
            pauseOnFocus: false,
            pauseonHover: true,
            touchThreshold: 100,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                    }
                }
            ]
        });
    }

    // our partners slider
    if ($('.our-partners__slider')) {
        $('.our-partners__slider').slick({
            infinite: true,
            dots: true,
            arrows: true,
            adaptiveHeight: true,
            slidesToShow: 6,
            slidesToScroll: 6,
            autoplay: true,
            autoplaySpeed: 6000,
            speed: 1000,
            pauseOnFocus: false,
            pauseonHover: true,
            touchThreshold: 100,
            responsive: [
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 4, 
                        slidesToScroll: 4
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        dots: false
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2, 
                        dots: false
                    }
                }
            ]
        });
    }

    // columns slider
    if ($('.columns-slider')) {
        $('.columns-slider').slick({
            infinite: true,
            dots: true,
            arrows: true,
            adaptiveHeight: true,
            autoplay: true,
            autoplaySpeed: 7000,
            speed: 1000,
            pauseOnFocus: false,
            pauseonHover: true,
            touchThreshold: 100,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        dots: false
                    }
                }
            ]
        });
    }

    // testimonials slider
    if ($('.testimonials__slider')) {
        $('.testimonials__slider').slick({
            infinite: true,
            dots: true,
            arrows: true,
            adaptiveHeight: true,
            slidesToShow: 1,
            touchThreshold: 100,
            responsive: [
                {
                    breakpoint: 576,
                    settings: {
                        arrows: false
                    }
                }
            ]
        });
    }

    // events slider
    if ($('.events-hero__slider')) {
        $('.events-hero__slider').slick({
            infinite: true,
            dots: false,
            arrows: true,
            adaptiveHeight: true,
            slidesToShow: 1,
            touchThreshold: 100
        });
    }

    // prevent dropdown from closing when buttons within it are clicked
    $('.events-section .dropdown-menu').click(function(e) {
        e.stopPropagation();
    });

    // events filtering
    if($('.events-section .event-list').length) {
        var mixer = mixitup('.events-section .event-list');
    }

    // move event details page title
    function eventDetailsTitle(width) {
        if (width <= 991) {
            $('.event-details-heading h1').appendTo('.event-details-hero__details');
        } else {
            $('.event-details-hero__details h1').prependTo('.event-details-heading .container');
        }
    }
    eventDetailsTitle( $(window).width() );
    $(window).on('resize', function() {
        eventDetailsTitle( $(this).width() );
    });

    // news slider
    if ($('.news-hero__slider')) {
        $('.news-hero__slider').slick({
            infinite: true,
            dots: false,
            arrows: true,
            adaptiveHeight: true,
            slidesToShow: 1,
            touchThreshold: 100
        });
    }

    // leadership slider
    if ($('.leadership-slider')) {
        $('.leadership-slider').slick({
            infinite: true,
            dots: false,
            arrows: true,
            adaptiveHeight: true,
            slidesToShow: 5,
            touchThreshold: 100,
            autoplay: true,
            autoplaySpeed: 5000,
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 4,
                    }
                },
                {
                    breakpoint: 850,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 650,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 400,
                    settings: {
                        slidesToShow: 1,
                    }
                }
            ]
        });
    }

    // get the about page modal URL using the person's name
    $('.leadership-slider .slide').each(function() {
        var personName = $(this).children().children().children('.leadership-slider__text__name').text();
        var personNameFormatted = personName.replace(/\s+/g, '-').replace(/\(|\)|\“|\”/g, '').replace(/\./g, '').toLowerCase();
        var url = '/about#' + personNameFormatted;
        if ($(this).hasClass('has-modal')) {
            $(this).children('a').attr('href', url);
        } else {
            $(this).children('a').attr('href', '/about#leadership');
        }
    });

    // add an id of the person's name to their container
    $('.leadership-list__person').each(function() {
        var personName = $(this).children().children('.leadership-list__person__text__name').children('.name').text();
        var personNameFormatted = personName.replace(/\s+/g, '-').replace(/\(|\)|\“|\”/g, '').replace(/\./g, '').toLowerCase();
        $(this).attr('id', personNameFormatted + '-leader');
        $(this).attr('data-id', personNameFormatted);
    });

    // create an array of people's ids
    var ids = $('.leadership-list__person.has-modal').map(function(index) {
        return $(this).data('id');
    });

    // if hash is in the array, populate the modal with the person's data; otherwise hide the modal
    var hashName = location.href.split('#')[1];
    var anchor = location.hash;
    if ($('.about').length && anchor !== null && anchor !== "") {
        if ($.inArray(hashName, ids) != -1) {
            $('#leadership-modal').modal('show');

            var button = $('#' + hashName + '-leader button');
            var image = button.data('image');
            var name = button.data('name');
            var role = button.data('role');
            var title = button.data('title');
            var bio = button.data('bio');
            var modal = $(this);
            modal.find('.leadership-info__img img').attr({
                'src': image,
                'alt': name
            });
            modal.find('.leadership-info__text__heading__name .name').text(name);
            modal.find('.leadership-info__text__heading__name .role').text(role);
            modal.find('.leadership-info__text__heading__title').text(title);
            modal.find('.leadership-info__text__bio').html(bio);
        } else {
            $('#leadership-modal').modal('hide');
            history.pushState('', document.title, window.location.pathname);
            var url = window.location;
            var urlLeadership = url + '#leadership';
            window.location.replace(urlLeadership);
        }
    }

    // swap leadership modal content on button click
    $('#leadership-modal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var image = button.data('image');
        var name = button.data('name');
        var nameFormatted = name.replace(/\s+/g, '-').replace(/\(|\)|\“|\”/g, '').replace(/\./g, '').toLowerCase();
        var role = button.data('role');
        var title = button.data('title');
        var bio = button.data('bio');
        var modal = $(this);
        modal.find('.leadership-info__img img').attr({
            'src': image,
            'alt': name
        });
        modal.find('.leadership-info__text__heading__name .name').text(name);
        modal.find('.leadership-info__text__heading__name .role').text(role);
        modal.find('.leadership-info__text__heading__title').text(title);
        modal.find('.leadership-info__text__bio').html(bio);
        
        // add person's name to url
        history.pushState('', document.title, window.location.pathname);
        var url = window.location;
        var urlPerson = url + '#' + nameFormatted;
        window.location.replace(urlPerson);
    });

    // remove person's name from url when modal is closed
    $('#leadership-modal').on('hide.bs.modal', function (event) {
        history.pushState('', document.title, window.location.pathname);
    });

    // slide toggle the open chapter form
    $('.chapters .hero button.btn').on('click', function() {
        $('.open-chapter-form').slideToggle();
    });

    // automatically open an accordion item if it's hash is in the url
    var anchor = location.hash;
    if (anchor !== null && anchor !== "") {
        $(anchor + ' .accordion-button').removeClass('collapsed').attr('aria-expanded', 'true');
        $(anchor + ' + .accordion-collapse').addClass('show');
    }

    // automatically scroll to the top of the accordion item when clicked
    $('.accordion-collapse').on('shown.bs.collapse', function(e) {
        var $panel = $(this).closest('.accordion-item');
        $('html,body').animate({
            scrollTop: $panel.offset().top
        }, 500);
    });

    // add active class to clicked webinars buttons
    $('.webinars-hero__buttons .btn').on('click', function() {
        $('.webinars-hero__buttons .btn').removeClass('active');
        $(this).addClass('active');
    });

});