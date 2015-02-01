$(function () {
  $(window).scroll(function () {
    if ($(this).scrollTop() > 150) {
      $('.navbar').addClass("addColor");
    } else if ($(this).scrollTop() <= 150) {
      $('.navbar').removeClass("addColor");
    }
  });
});

$("#mobile_toggle").click(function() {
  var menu_height = $("#mainmenu").height();
  var new_height = menu_height + 90;

  if($(".navbar").hasClass("navOpen")) {
    $(".navbar").animate({
      height:75
    });
    $(".navbar").removeClass("navOpen");
  }else {
    $(".navbar").animate({
      height:new_height
    });
    $(".navbar").addClass("navOpen");
    $(".navbar").addClass("addColor");
  }
})

// Smooth Scroll
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
