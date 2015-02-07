$(function() {
  var txt = $('#contactMessage'),
  hiddenDiv = $(document.createElement('div')),
  content = null;

  txt.addClass('txtstuff');
  hiddenDiv.addClass('hiddendiv common');

  $('body').append(hiddenDiv);
  txt.on('keyup', function () {
  $(hiddenDiv).css('width', $(this).width())
    content = $(this).val();

    content = content.replace(/\n/g, '<br>');
    hiddenDiv.html(content + '<br class="lbr">');

    $(this).css('height', hiddenDiv.height());
  })
});

$(function() {
  var iOS = navigator.userAgent.match(/(iPod|iPhone|iPad)/);
  if(iOS){

    function iosVhHeightBug() {
      var height = $(window).height();
      $("#top_content").css('height', height);
      $("#work").css('min-height', height);
      $(".y_half").css('height', height / 2);
      $(".work").css('height', height);
      $(".testimonials").css('display', "none");
      $("#contact").css('display', "none");
    }

    iosVhHeightBug();
    $(window).bind('resize', iosVhHeightBug);

  }
})

/*$(function() {
  var querie = 800;
  var windowWidth = $(window).width();
  var rightWidth = $(".about_text").height() + 100;

  if(windowWidth > querie) {
    $(".about_left").height(rightWidth);
  }else {
    $(".about_left").height();
  }
})*/

$(function () {
  $(window).scroll(function () {
    if ($(this).scrollTop() > 80) {
      $('.navbar').addClass("addColor");
    } else if ($(this).scrollTop() <= 80) {
      $('.navbar').removeClass("addColor");
    }
  });
});

$("#mainmenu li a").click(function() {
  $(".navbar").stop(true, false).animate({
    height:80
  });
  $(".navbar").removeClass("navOpen");
})

$( window ).resize(function() {
  var windowWidth = $(window).width();
  var querie = 800;
  var menuClass = $(".navbar").hasClass("navOpen");
  //var rightWidth = $(".about_text").height() + 100;
  //$(".about_left").height(rightWidth);

  if(windowWidth > querie && menuClass) {
    $(".navbar").css("height","")
    $(".navbar").removeClass("navOpen");
  }
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
          scrollTop: target.offset().top - 79
        }, 1000);
        return false;
      }
    }
  });
});
