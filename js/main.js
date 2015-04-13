$(document).ready(function() {

  var scrollPos = $('body').scrollTop();

  //Hide Circle nav on page load
  $('#circle-nav-container').hide();
  $('#circleNavButtons').hide();

  //Hide images on page load
  $(".index-image").css("opacity", "0");

  //Scroll detection for nav bar transition
  $(window).scroll(function() {
    scrollPos = $('body').scrollTop();
    setTimeout(function() {
      if (scrollPos > $('#global').offset().top){
        $('nav').fadeOut('slow');
        $('#circle-nav-container').delay(100).fadeIn('slow');
        $('.corner').css('z-index', '99');
        $('#circleNavButtons').css('z-index', '99');
      }

      else{
        $('#circle-nav-container').fadeOut('slow');
        $('#circleNavButtons').fadeOut('slow');
        $('nav').delay(100).fadeIn('slow');
      }
    }, 100);

    //Scroll detection for image fading
    $(".index-image").each(function() {
      if (scrollPos > $(this).offset().top - 400  ){
        $(this).animate({opacity: 1}, 500);
      } 
    });
  });

  var navPos=$('body').scrollTop();
  //Controls for circle nav
  $('#mainBtn').click(function(){
    navPos=$('body').scrollTop();
    $('body').scrollTop(navPos);
    $('#circleNavButtons').fadeToggle('fast', 'linear');
    $('#homeBtn').addClass('bouncy');
    $('#nationalBtn').addClass('bouncy');
    $('#globalBtn').addClass('bouncy');
    $('#aboutBtn').addClass('bouncy');
    $('#joinBtn').addClass('bouncy');
    setTimeout(function(){
      $('body').scrollTop(navPos);
    }, 1)
  })

  //Modal window control and button animating
  $('#modal').hide();

  //Blur on load for instructional modal window
  $('.content-container, .button, #roster, footer, nav, #circle-nav-container, #circleNavButtons').removeClass('sharp');
  $('.content-container, .button, #roster, footer, nav, #circle-nav-container, #circleNavButtons').addClass('blured');
  $('.corner').css('z-index', '99');
  $('#circleNavButtons').css('z-index', '99');
  //End blurring

  $('.button').mousedown(function(){
    $('.button p')
    .css('font-size', '35px');
  }).mouseup(function(){
    $('.button p').css('font-size', '25px');
    $('#modal').fadeIn('slow');
    $('.content-container, .button, #roster, footer, nav, #circle-nav-container, #circleNavButtons').removeClass('sharp');
    $('.content-container, .button, #roster, footer, nav, #circle-nav-container, #circleNavButtons').addClass('blured');
    $('.corner').css('z-index', '99');
    $('#circleNavButtons').css('z-index', '99');
  });

  //Control for exiting modal window
  $('.x').click(function() {
    $('#modal').fadeOut('slow');
    $('#load-modal').fadeOut('slow');
    $('.content-container, .button, #roster, footer, nav, #circle-nav-container, #circleNavButtons').removeClass('blured');
    $('.content-container, .button, #roster, footer, nav, #circle-nav-container, #circleNavButtons').addClass('sharp');
    $('.corner').css('z-index', '99');
    $('#circleNavButtons').css('z-index', '99');
    $('#about').show();
    $('.about-us').show();
  });

  //Smooth scrolling code snippet from CSS-Tricks
  $(function() {
    $('a[href*=#]:not([href=#])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html,body').animate({
            scrollTop: target.offset().top - 100
          }, 1000);
          return false;
        }
      }
    });
  });
});

// Detect if no movement has occured for page refresh

var timer = null;

function goAway() {
    clearTimeout(timer);
    timer = setTimeout(function() {
        window.location = 'http://galatea.stetson.edu/~mwood/ScarceSupply';
    }, 15000);
}

window.addEventListener('mousemove', goAway, true);

goAway();