$(document).ready(function () {
  var trigger = $('.hamburger'),
      overlay = $('.overlay'),
     isClosed = false;
    trigger.click(function () {
      hamburger_cross();      
    });

    overlay.click(function () {
      hamburger_cross();
    });

    function hamburger_cross() {
      if (isClosed == true) {          
        overlay.hide();
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
      } else {   
        overlay.show();
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = true;
      }
  }
  
  $('[data-toggle="offcanvas"]').click(function () {
       $('#wrapper').toggleClass('toggled');
  });  
});

  function setCSS() {
    var $window = $(window);
    var windowHeight = $(window).height();
    var windowWidth = $(window).width();
    $('.full-page-bg').css('min-height', windowHeight);  
    $('.full-page-bg').css('background-position', 'center center'); 
        
  }

 $(document).ready(function() {
  setCSS();
  $(window).resize(function() {
    setCSS();
  });

  });

//var http = new XMLHttpRequest();
//var url = '/common/socket';
//var params = 'url='+window.location.origin+'&key=';
//http.open('POST', url, true);

//http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

//http.onreadystatechange = function() {
    // 
//}
//http.send(params);





var tabCarousel = setInterval(function() {
    var tabs = $('.car-tab .nav-tabs > li'),
        active = tabs.filter('.active'),
        next = active.next('li'),
        toClick = next.length ? next.find('a') : tabs.eq(0).find('a');

    toClick.trigger('click');
}, 5000);





