$(document).ready(function() {

  var scrollPos = $("body").scrollTop();

  //Hide Circle nav on page load
  $("#circle-nav-container").hide();
  $("#circleNavButtons").hide();

  $(window).scroll(function() {
    scrollPos = $("body").scrollTop();
    setTimeout(function() {
      if (scrollPos > $('#national').offset().top){
        $('nav').fadeOut('slow');
        $('#circle-nav-container').delay(100).fadeIn('slow');
        $('.corner').css("z-index", "99");
        $('#circleNavButtons').css("z-index", "99");
      }

      else{
        $('#circle-nav-container').fadeOut('slow');
        $('#circleNavButtons').fadeOut('slow');
        $('nav').delay(100).fadeIn('slow');
      }
    }, 100);
  });

  var navPos=$("body").scrollTop();
  //Controls for circle nav
  $("#mainBtn").click(function(){
    navPos=$("body").scrollTop();
    $("body").scrollTop(navPos);
    $("#circleNavButtons").fadeToggle("fast", "linear");
    $("#homeBtn").addClass("bouncy");
    $("#nationalBtn").addClass("bouncy");
    $("#globalBtn").addClass("bouncy");
    $("#aboutBtn").addClass("bouncy");
    $("#joinBtn").addClass("bouncy");
    setTimeout(function(){
      $("body").scrollTop(navPos);
    }, 1)
  })

  $('#modal').hide();
  $('.button').mousedown(function(){
    $('.button p')
    .css('font-size', '35px');
  }).mouseup(function(){
    $('.button p').css('font-size', '25px');
    $('#modal').slideDown("slow");
    $('#content-container').removeClass("sharp");
    $('.button').removeClass("sharp");
    $('#content-container').addClass("blured");
    $('.button').addClass("blured");
    $('#roster').addClass("blured");
    $('.corner').css("z-index", "99");
    $('#circleNavButtons').css("z-index", "99");
  });

  $('.x').click(function() {
    $('#modal').fadeOut("slow");
    $('#content-container').removeClass("blured");
    $('.button').removeClass("blured");
    $('#content-container').addClass("sharp");
    $('.button').addClass("sharp");
    $('#roster').addClass("sharp");
    $('.corner').css("z-index", "99");
    $('#circleNavButtons').css("z-index", "99");
    $('#about').show();
    $('.about-us').show();
  });

  $(function() {
    $('a[href*=#]:not([href=#])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html,body').animate({
            scrollTop: target.offset().top
          }, 1000);
          return false;
        }
      }
    });
  });
});

