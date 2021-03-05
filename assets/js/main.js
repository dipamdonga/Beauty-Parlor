(function ($) {
    "use strict";

/*===========================================
              Table of contents
  01. Preloader
  02. WOW Js Active
  03. Mean Menu
  04. Set Background Color
  05. Sticky fix
  06. Scroll To Top
  07. Nice Select Active
  08. Popup Sidebar and Search Box
  09. Counter Up Active
  10. Tilt Js Active
  11. Hero Slider
  12. Date And Time Picker Active
  13. Service Slider
  14. Brand Slider
  15. Testomonial Sliders
  16. Blog Slider
  17. Parallax Active
  18. Team Member Slider
  19. Price Plan Slider
  20. Widget Blog Slide
  21. Features Slider Active
  22. Google Map
  23. Progrss Bar Width Set
  24. Image Box Slider
  25. Tab Indicator

  =============================================*/


  /*---------- 01. Preloader ----------*/
  $(window).on('load',function () {
    $('.preloader').fadeOut('slow');
  });




  /*---------- 02. WOW Js Active ----------*/
  new WOW().init();





  /*---------- 03. Mobile Menu Active ----------*/
  jQuery('nav').meanmenu({
    meanMenuContainer: '.mobile-menu-container',
    meanScreenWidth: "993"
  });


  /*---------- 04.Set Background Image ----------*/
  if ($('.background-image').length > 0) {
    $('.background-image').each(function () {
      var src = $(this).attr('data-src');
      $(this).css({
        'background-image': 'url(' + src + ')'
      });
    });
  };



  /*---------- 05. Sticky fix ----------*/
  $(window).on("scroll", function () {
      // This is for Mobile
      if ($(this).scrollTop() > 10) {
        $('header').addClass("sticky");
      } else {
        $('header').removeClass("sticky");
      }

    //Check to see if the window is top if not then display button
    if ($(this).scrollTop() > 400) {
      $('.scrollToTop').addClass('show');
    } else {
      $('.scrollToTop').removeClass('show');
    }

  });


  /*---------- 06. Scroll To Top ----------*/
  $('.scrollToTop').on('click', function () {
    $('html, body').animate({
      scrollTop: 0
    }, 500);
    return false;
  })


  /*---------- 07.Nice Select Active ----------*/
  $('select').niceSelect();



  /*---------- 08. Popup Sidebar and Search Box ----------*/
  function popupElement() {
    // Sidebar Popup
    $('.sidebarBtn').on('click', function (e) {
      e.preventDefault();
      $('.overly-sidebar-wrapper').addClass('show');
    });
    $('.overly-sidebar-wrapper').on('click', function (e) {
      e.stopPropagation();
      $('.overly-sidebar-wrapper').removeClass('show')
    });
    $('.overly-sidebar-wrapper .overly-sidebar-content').on('click', function (e) {
      e.stopPropagation();
      $('.overly-sidebar-wrapper').addClass('show')
    });
    $('#sidebar-close').on('click', function (e) {
      e.preventDefault();
      e.stopPropagation();
      $('.overly-sidebar-wrapper').removeClass('show');
    });


    // Search Box Popup
    $('.search-btn').on('click', function (e) {
      e.preventDefault();
      $('.popup-search-box').addClass('show');
    });
    $('.popup-search-box').on('click', function (e) {
      e.stopPropagation();
      $('.popup-search-box').removeClass('show');
    });
    $('.popup-search-box form').on('click', function (e) {
      e.stopPropagation();
      $('.popup-search-box').addClass('show');
    });
    $('.searchClose').on('click', function (e) {
      e.preventDefault();
      e.stopPropagation();
      $('.popup-search-box').removeClass('show');
    });
  };
  popupElement();


  /*----------- 09. Counter Up Active ----------*/
  $('.counter').counterUp({
    delay: 10,
    time: 1000
  });
  


/*----------- 10. Tilt Js Active ----------*/
  $('.js-tilt').tilt({
    maxTilt: 5,
    glare: true,
    maxGlare: .3,
    scale: 1.02,
  });



  
/*----------- 11. Hero Slider ----------*/
  function mainSlider() {
    var BasicSlider = $('.hero-slider-active');
    BasicSlider.on('init', function (e, slick) {
      var $firstAnimatingElements = $('.single-hero-slide:first-child').find('[data-animation]');
      doAnimations($firstAnimatingElements);
    });
    BasicSlider.on('beforeChange', function (e, slick, currentSlide, nextSlide) {
      var $animatingElements = $('.single-hero-slide[data-slick-index="' + nextSlide + '"]').find(
        '[data-animation]');
      doAnimations($animatingElements);
    });
    BasicSlider.slick({
      dots: false,
      infinite: true,
      autoplay: true,
      autoplaySpeed: 10000,
      speed: 800,
      fade: true,
      arrows: false,
      pauseOnFocus: false,
      pauseOnHover:false,
    });

    function doAnimations(elements) {
      var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
      elements.each(function () {
        var $this = $(this);
        var $animationDelay = $this.data('delay');
        var $animationType = 'animated ' + $this.data('animation');
        $this.css({
          'animation-delay': $animationDelay,
          '-webkit-animation-delay': $animationDelay
        });
        $this.addClass($animationType).one(animationEndEvents, function () {
          $this.removeClass($animationType);
        });
      });
    }
  }
  mainSlider();


  // Hero 3 Slider
  $('.hero-slide-v3').slick({
    dots: false,
    infinite: true,
    arrows: true,
    autoplay: true,
    autoplaySpeed: 5000,
    pauseOnHover: false,
    pauseOnFocus: false,
    fade: true,
    cssEase: 'ease-in-out',
    speed: 1500,
    useCSS: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    prevArrow: '<button type="button" class="slick-prev"><i class="flaticon-left-arrow-3"></i></button>',
    nextArrow: '<button type="button" class="slick-next"><i class="flaticon-right-arrow-2"></i></button>',
    responsive: [{
      breakpoint: 1200,
      settings: {
        arrows: false,
      }
    }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });






/*----------- 12. Date And Time Picker Active ----------*/
  // Time And Date Picker
  $('#dateAndTime').datetimepicker({
    timepicker: true,
    datepicker: true,
    format: 'y-m-d H:i',
    hours12: false,
    step: 30
  });
  
  // Only Time Picker
  $('#TimePick').datetimepicker({
    datepicker: false,
    timepicker: true,
    format: 'H:i',
    hours12: false,
    step: 10
  });

  // Only Date Picker
  $('#datePick').datetimepicker({
    timepicker: false,
    datepicker: true,
    format: 'y-m-d',
    step: 10
  });


  /*----------- 13. Service Slider ----------*/
  $('.service-slider-active').slick({
    dots: false,
    infinite: true,
    adaptiveHeight: true,
    infinite: true,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 5000,
    fade: false,
    speed: 1000,
    pauseOnHover: false,
    pauseOnFocus: false,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [{
      breakpoint: 1350,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 1200,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
      }, {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          adaptiveHeight: false,
        }
      },{
        breakpoint: 768,
        settings: {
        adaptiveHeight: false,
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });


  /*----------- 14. Brand Slider ----------*/
  $('.brand-slider-active').slick({
    dots: false,
    infinite: true,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 6000,
    speed: 1000,
    fade: false,
    pauseOnHover: false,
    pauseOnFocus: false,
    slidesToShow: 5,
    slidesToScroll: 1,
    responsive: [{
      breakpoint: 1350,
      settings: {
        slidesToShow: 4,
      }
    }, {
      breakpoint: 992,
      settings: {
        arrows: false,
        dots: false,
        infinite: true,
        autoplay: false,
        fade: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 768,
      settings: {
        arrows: false,
        dots: false,
        infinite: true,
        autoplay: false,
        fade: false,
        speed: 300,
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });







/*----------- 15. Testomonial Sliders ----------*/
  // Testomonial Main Slider
  $('.testomonial-slider-active').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 6000,
    pauseOnHover: false,
    pauseOnFocus: false,
    speed: 500,
    fade: true,
    arrows: false,
    dots: false,
    infinite: true,
    asNavFor: '.testomonial-slider-nav-active, .testomonial-slider-nav2-active, .testomonial-slider-nav3-active'
  });

  // Testomonial Nav Slider 1
  $('.testomonial-slider-nav-active').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 6000,
    pauseOnHover: false,
    pauseOnFocus: false,
    speed: 500,
    asNavFor: '.testomonial-slider-active, .testomonial-slider-nav2-active, .testomonial-slider-nav3-active',
    dots: false,
    centerMode: true,
    focusOnSelect: true,
    centerPadding: '0',
    arrows: false,
    infinite: true,
  });
  
  // Testomonial Nav Slider 2
  $('.testomonial-slider-nav2-active').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 6000,
    pauseOnHover: false,
    pauseOnFocus: false,
    speed: 500,
    arrows: false,
    variableWidth: true,
    asNavFor: '.testomonial-slider-nav-active, .testomonial-slider-active, .testomonial-slider-nav3-active',
    dots: false,
    focusOnSelect: true
  });

  // Testomonial Nav Slider 2
  $('.testomonial-slider-nav3-active').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 6000,
    pauseOnHover: false,
    pauseOnFocus: false,
    speed: 500,
    arrows: false,
    variableWidth: true,
    asNavFor: '.testomonial-slider-active, .testomonial-slider-nav-active, .testomonial-slider-nav2-active',
    dots: true,
    centerMode: true,
    focusOnSelect: true,
  });

  // Inner Testomonial
  $('.inner-testomonial').slick({
    dots: false,
    infinite: true,
    pauseOnHover: false,
    pauseOnFocus: false,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 6000,
    speed: 500,
  });






  /*----------- 16. Blog Slider ----------*/
  $('.latest-blog-slider').slick({
    dots: false,
    infinite: true,
    arrows: false,
    pauseOnHover: false,
    pauseOnFocus: false,
    fade: false,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 6000,
    speed: 500,
    responsive: [{
      breakpoint: 1350,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });

  // Blog Slider 2
  $('.blog-slider2-active').slick({
    dots: false,
    infinite: true,
    arrows: false, 
    autoplay: true,
    pauseOnHover: false,
    pauseOnFocus: false,
    autoplaySpeed: 6000,
    speed: 500,
    fade: false,
    centerMode: true,
    centerPadding: 0,
    focusOnSelect: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [{
      breakpoint: 1200,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });

 

  /*---------- 17. Isotope Active ----------*/
  $('.gallery-area').imagesLoaded(function () {
    $('.gallery-area').isotope({
      itemSelector: '.grid-item',
      percentPosition: true,
      masonry: {
        // use outer width of grid-sizer for columnWidth
        columnWidth: 1
      }
    })

  });





  /*----------- 18. Team Member Slider ----------*/
  $('.team-slider-active').slick({
    dots: false,
    infinite: true,
    arrows: false,
    pauseOnHover: false,
    pauseOnFocus: false,
    autoplay: true,
    autoplaySpeed: 6000,
    speed: 500,
    fade: false,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [{
      breakpoint: 1200,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });

  // Team Member Slider 2
  $('.team-slider2-active').slick({
    dots: false,
    infinite: true,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 6000,
    speed: 500,
    fade: false,
    pauseOnHover: false,
    pauseOnFocus: false,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [{
      breakpoint: 1200,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });








  /*----------- 19. Price Plan Slider ----------*/
  $('.price-plan-slide').slick({
    dots: false,
    infinite: true,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 6000,
    speed: 500,
    pauseOnHover: false,
    pauseOnFocus: false,
    fade: false,
    slidesToShow: 2,
    slidesToScroll: 1,
    responsive: [ {
      breakpoint: 992,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });



/*----------- 20. Widget Blog Slide ----------*/
  $('.small-blog-slide-active').slick({
    dots: true,
    infinite: true,
    slidesToShow: 1,
    pauseOnHover: false,
    pauseOnFocus: false,
    slidesToScroll: 1,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 6000,
    speed: 500,
  });




  /*----------- 21. Features Slider Active ----------*/
  $('.features-slide-active').slick({
    dots: false,
    infinite: true,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 6000,
    speed: 500,
    fade: false,
    pauseOnHover: false,
    pauseOnFocus: false,
    centerMode: true,
    focusOnSelect: true,
    centerPadding: '0',
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [{
          breakpoint: 1200,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        }, {
        breakpoint: 992,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }, {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });






/*----------- 22. Google Map ----------*/
  function basicmap() {
    // Basic options for a simple Google Map
    // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
    var mapOptions = {
      // How zoomed in you want the map to start at (always required)
      zoom: 11,
      scrollwheel: false,
      // The latitude and longitude to center the map (always required)
      center: new google.maps.LatLng(40.6700, -73.9400), // New York
      // This is where you would paste any style found on Snazzy Maps.
      styles: [{ "featureType": "water", "elementType": "geometry", "stylers": [{ "color": "#e9e9e9" }, { "lightness": 17 }] }, { "featureType": "landscape", "elementType": "geometry", "stylers": [{ "color": "#f5f5f5" }, { "lightness": 20 }] }, { "featureType": "road.highway", "elementType": "geometry.fill", "stylers": [{ "color": "#ffffff" }, { "lightness": 17 }] }, { "featureType": "road.highway", "elementType": "geometry.stroke", "stylers": [{ "color": "#ffffff" }, { "lightness": 29 }, { "weight": .2 }] }, { "featureType": "road.arterial", "elementType": "geometry", "stylers": [{ "color": "#ffffff" }, { "lightness": 18 }] }, { "featureType": "road.local", "elementType": "geometry", "stylers": [{ "color": "#ffffff" }, { "lightness": 16 }] }, { "featureType": "poi", "elementType": "geometry", "stylers": [{ "color": "#f5f5f5" }, { "lightness": 21 }] }, { "featureType": "poi.park", "elementType": "geometry", "stylers": [{ "color": "#dedede" }, { "lightness": 21 }] }, { "elementType": "labels.text.stroke", "stylers": [{ "visibility": "on" }, { "color": "#ffffff" }, { "lightness": 16 }] }, { "elementType": "labels.text.fill", "stylers": [{ "saturation": 36 }, { "color": "#333333" }, { "lightness": 40 }] }, { "elementType": "labels.icon", "stylers": [{ "visibility": "off" }] }, { "featureType": "transit", "elementType": "geometry", "stylers": [{ "color": "#f2f2f2" }, { "lightness": 19 }] }, { "featureType": "administrative", "elementType": "geometry.fill", "stylers": [{ "color": "#fefefe" }, { "lightness": 20 }] }, { "featureType": "administrative", "elementType": "geometry.stroke", "stylers": [{ "color": "#fefefe" }, { "lightness": 17 }, { "weight": 1.2 }] }]
    };
    // Get the HTML DOM element that will contain your map 
    // We are using a div with id="map" seen below in the <body>
    var mapElement = document.getElementById('contact-map');

    // Create the Google Map using our element and options defined above
    var map = new google.maps.Map(mapElement, mapOptions);

    // Let's also add a marker while we're at it
    var marker = new google.maps.Marker({
      position: new google.maps.LatLng(40.6700, -73.9400),
      map: map,
      title: 'Cryptox'
    });
  }
  if ($('#contact-map').length != 0) {
    google.maps.event.addDomListener(window, 'load', basicmap);
  }



  /*---------- 23.Progrss Bar Width Set ----------*/
  if ($('.progress-bar').length > 0) {
    $('.progress-bar').each(function () {
      var width = $(this).attr('aria-valuenow');
      $(this).css({
        'width': width + '%'
      });
    });
  };




/*---------- 24. Image Box Slider ----------*/
  $('.img-box-slider').slick({
    dots: false,
    infinite: true,
    autoplay: true,
    pauseOnHover: false,
    pauseOnFocus: false,
    autoplaySpeed: 6000,
    speed: 500,
    prevArrow: '<button type="button" class="slick-prev"><i class="flaticon-left-arrow-3"></i></button>',
    nextArrow: '<button type="button" class="slick-next"><i class="flaticon-right-arrow-2"></i></button>',

  });  


/*---------- 25. Tab Indicator ----------*/
  if ($('.tab-swipe').length > 0) {
        $('.tab-swipe').append('<li class="indicator"></li>');
        if ($('.tab-swipe li a').hasClass('active')) {
            let cLeft = $('.tab-swipe li a.active').position().left + 'px',
                cWidth = $('.tab-swipe li a.active').css('width');
            $('.indicator').css({
                left: cLeft,
                width: cWidth
            })
        }
        $('.tab-swipe li a').on('click', function () {
            $('.tab-swipe li a').removeClass('isActive');
            $(this).addClass('isActive');
            let cLeft = $('.tab-swipe li a.isActive').position().left + 'px',
                cWidth = $('.tab-swipe li a.isActive').css('width');
            $('.indicator').css({
                left: cLeft,
                width: cWidth
            })
        });
    }





  /*----------- 21. Gallery Slider Active ----------*/
  $('.gallery-slider1-active').slick({
    dots: false,
    pauseOnHover: false,
    pauseOnFocus: false,
    infinite: true,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 700,
    fade: false,
    speed: 4000,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [{
      breakpoint: 1200,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 576,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });

  // Gallery Slider 2
  $('.gallery-slider2-active').slick({
    dots: false,
    infinite: true,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 700,
    fade: false,
    pauseOnHover: false,
    pauseOnFocus: false,
    speed: 4000,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [{
      breakpoint: 1200,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }, {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });


$(document).ready(function(){
       $(document).bind("contextmenu",function(e){
          return false;
       });
    });












  





  
















})(jQuery);