(function ($) {
    "use strict";


  /***************************************
  jQuery MeanMenu activation code
  ***************************************/
  $('nav#dropdown').meanmenu({
    siteLogo: '<a href="index.html"><img src="img/logo.png" /></a>'
  });

  /***************************************
   Wow js Active
  ***************************************/
   new WOW().init();

  /***************************************
  jquery preloader 
  ***************************************/
  $(window).load(function(){
    $( '#preloader' ).fadeOut( 'slow', function () {
      $( this ).remove();
    } );
  });

  /***************************************
  Colorbox image zooming 
  ***************************************/
  if($('a.zoom').length){
    $('a.zoom').colorbox({rel:'gal'});
  }
   
  /***************************************
  jquery Scollup activation code
  ***************************************/
  $.scrollUp({
    scrollText: '<i class="fa fa-angle-up"></i>',
    easingType: 'linear',
    scrollSpeed: 900,
    animation: 'fade'
  });

  /***************************************
   Video Popup
  ***************************************/

  if ($(".popup-youtube").length) {

      $('.popup-youtube').magnificPopup({
          disableOn: 700,
          type: 'iframe',
          mainClass: 'mfp-fade',
          removalDelay: 160,
          preloader: false,
          fixedContentPos: false
      });
  }

  /**************************************
  jQuery for isotope initialization
  ***************************************/
  $(window).load(function(){
      var $container = $('.featuredContainer');
      $container.isotope({
          filter: '*',
          animationOptions: {
          duration: 750,
          easing: 'linear',
          queue: false
          }
      });
      $('.isotop-classes-tab').on('click', 'a',function(){
          $('.isotop-classes-tab .current').removeClass('current');
          $(this).addClass('current');
          var selector = $(this).attr('data-filter');
          $container.isotope({
              filter: selector,
              animationOptions: {
              duration: 750,
              easing: 'linear',
              queue: false
              }
           });
           return false;
      });
  });

  /**************************************
  About counter
  ***************************************/
  if($('.about-counter').length){
    $('.about-counter').counterUp({
      delay: 50,
      time: 3000
    });
  }

  /**************************************
  Accordion over right functionality
  ***************************************/
  $('#accordion').children('.panel').children('.panel-collapse').each(function(){
    if($(this).hasClass('in')){
      $(this).parent('.panel').children('.panel-heading').addClass('active');
    }
  });
  $('#accordion')
    .on('show.bs.collapse', function(e) {
    $(e.target).prev('.panel-heading').addClass('active');
    })
    .on('hide.bs.collapse', function(e) {
    $(e.target).prev('.panel-heading').removeClass('active');
    });

  /****************************************
  Circle Bars - Knob
  ***************************************/
  if(typeof($.fn.knob) != 'undefined') {
    $('.knob.knob-nopercent').each(function () {
      var $this = $(this),
        knobVal = $this.attr('data-rel');
      $this.knob({
      'draw' : function () {
      }
      });
      $this.appear(function() {
      $({
        value: 0
      }).animate({
        value: knobVal
      }, {
        duration : 2000,
        easing   : 'swing',
        step     : function () {

          $this.val(Math.ceil(this.value)).trigger('change');
        }
      });
      }, {accX: 0, accY: -150});
    });


    //others skill
    $('.knob').each(function () {
      var $this = $(this),
        knobVal = $this.attr('data-rel');
      $this.knob({
      'draw' : function () {
        $(this.i).val(this.cv + '%')
      }
      });
      $this.appear(function() {
      $({
        value: 0
      }).animate({
        value: knobVal
      }, {
        duration : 2000,
        easing   : 'swing',
        step     : function () {
          $this.val(Math.ceil(this.value)).trigger('change');
        }
      });
      }, {accX: 0, accY: -150});
    });
  }

  /****************************************
  jquery Stiky Menu activation code
  ***************************************/
  var globalStickerHeight = $('#sticker').outerHeight();
    $(window).on('scroll', function(){

      var s = $('#sticker');
      var w = $('.wrapper-area');
      var windowpos = $(window).scrollTop();
      var windowWidth = $(window).width();
    
      if(windowWidth > 767){
        var topBar = 0;
        if($('.header-top-area').length){
          topBar = $('.header-top-area').outerHeight();
        }else{
          topBar = s.outerHeight();
        }
        if($('#slider-area').length){
          topBar = $('#slider-area').outerHeight();
        }

        if( windowpos >= topBar){
          s.addClass('stick');
          if(!$('.main-header-area.index2').length){
            w.css('padding-top', globalStickerHeight+'px');
          }
        } else {
          s.removeClass('stick');
          if(!$('.main-header-area.index2').length){
            w.css('padding-top', 0);
          }
        } 
      }else{
        if( windowpos > 0){
          $('.mean-container .mean-bar').css('position', 'fixed');
          $('.mean-container .mean-bar').css('width', windowWidth + 'px');
          var h = $('.mean-bar').outerHeight();
          w.css('padding-top', h+'px');
        } else {
          $('.mean-container .mean-bar').css('position', 'relative');
          w.css('padding-top', 0);
        }
      }
    });

  /***************************************
  Contact Form activation code
  ***************************************/
  if($('#contact-form').length){
    $('#contact-form').validator().on('submit', function (e) {
         var $this = $(this),
            $target = $('.form-response');
       if (e.isDefaultPrevented()) {
          $target.html('<div class="alert alert-success"><p>Please select all required field.</p></div>');
       } else {
        var name = $('#form-name').val();
        var email = $('#form-email').val();
        var message = $('#form-message').val();
        // ajax call
         $.ajax({
           url: 'php/form-process.php',
           type: 'POST',
           data: 'name=' + name + '&email=' + email + '&message=' + message,
           beforeSend: function() { 
              $target.html('<div class="alert alert-info"><p>Loading ...</p></div>');
          },
           success: function( text ){
                  if(text == 'success'){
                      $this[0].reset();
                      $target.html('<div class="alert alert-success"><p>Message Has Been Sent.</p></div>');
                  } else {
                      $target.html('<div class="alert alert-success"><p>'+text+'</p></div>');
                  }
               }
         });

         return false;
       }
    });
  }

  /****************************************
  Google Map activation code
  ***************************************/
  if($('#googleMap').length){
      var initialize = function() {
        var mapOptions = {
            zoom: 15,
            scrollwheel: false,
            center: new google.maps.LatLng(-37.81618, 144.95692)
        };

        var map = new google.maps.Map(document.getElementById('googleMap'),
            mapOptions);

        var marker = new google.maps.Marker({
            position: map.getCenter(),
            animation:google.maps.Animation.BOUNCE,
            icon: 'img/map-marker.png',
            map: map
        });

      }
    google.maps.event.addDomListener(window, 'load', initialize);
  }

  /****************************************
   Carousel slider initiation
  ***************************************/
  $('.kon-carousel').each(function () {
      var carousel = $(this),
          loop = carousel.data('loop'),
          items = carousel.data('items'),
          margin = carousel.data('margin'),
          stagePadding = carousel.data('stage-padding'),
          autoplay = carousel.data('autoplay'),
          autoplayTimeout = carousel.data('autoplay-timeout'),
          smartSpeed = carousel.data('smart-speed'),
          dots = carousel.data('dots'),
          nav = carousel.data('nav'),
          navSpeed = carousel.data('nav-speed'),
          rXsmall = carousel.data('r-x-small'),
          rXsmallNav = carousel.data('r-x-small-nav'),
          rXsmallDots = carousel.data('r-x-small-dots'),
          rXmedium = carousel.data('r-x-medium'),
          rXmediumNav = carousel.data('r-x-medium-nav'),
          rXmediumDots = carousel.data('r-x-medium-dots'),
          rSmall = carousel.data('r-small'),
          rSmallNav = carousel.data('r-small-nav'),
          rSmallDots = carousel.data('r-small-dots'),
          rMedium = carousel.data('r-medium'),
          rMediumNav = carousel.data('r-medium-nav'),
          rMediumDots = carousel.data('r-medium-dots'),
          rLarge = carousel.data('r-large'),
          rLargeNav = carousel.data('r-large-nav'),
          rLargeDots = carousel.data('r-large-dots'),
          center = carousel.data('center');

      carousel.owlCarousel({
          loop: (loop ? true : false),
          items: (items ? items : 4),
          lazyLoad: true,
          margin: (margin ? margin : 0),
          autoplay: (autoplay ? true : false),
          autoplayTimeout: (autoplayTimeout ? autoplayTimeout : 1000),
          smartSpeed: (smartSpeed ? smartSpeed : 250),
          dots: (dots ? true : false),
          nav: (nav ? true : false),
          navText: ["<i class='fa fa-angle-left' aria-hidden='true'></i>", "<i class='fa fa-angle-right' aria-hidden='true'></i>"],
          navSpeed: (navSpeed ? true : false),
          center: (center ? true : false),
          responsiveClass: true,
          responsive: {
              0: {
                  items: ( rXsmall ? rXsmall : 1),
                  nav: ( rXsmallNav ? true : false),
                  dots: ( rXsmallDots ? true : false)
              },
              480: {
                  items: ( rXmedium ? rXmedium : 2),
                  nav: ( rXmediumNav ? true : false),
                  dots: ( rXmediumDots ? true : false)
              },
              768: {
                  items: ( rSmall ? rSmall : 3),
                  nav: ( rSmallNav ? true : false),
                  dots: ( rSmallDots ? true : false)
              },
              992: {
                  items: ( rMedium ? rMedium : 5),
                  nav: ( rMediumNav ? true : false),
                  dots: ( rMediumDots ? true : false)
              },
              1199: {
                  items: ( rLarge ? rLarge : 6),
                  nav: ( rLargeNav ? true : false),
                  dots: ( rLargeDots ? true : false)
              }
          }
      });

  });

  /********************************************
  Define the maximum height for mobile menu 
  **********************************************/
  $(window).on("load resize", function(){

    var wHeight = $(window).height();
   $(".mean-nav > ul").css('max-height', wHeight + "px");

 });

})(jQuery);
