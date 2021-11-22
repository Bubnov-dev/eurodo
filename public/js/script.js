$(document).ready(function(){

  // TEST ПОТОМ УДАЛИТЬ

  $('.main-form_wrapper input').blur(function(e){
          if($(this).val()!='') {
            $('.form-downlist').addClass('active');
          } else {
            $('.form-downlist').removeClass('active');
          }
    });

  $('.get-location').click(function(e){
    e.preventDefault();
    var id = $(this).attr('href');
    $(id).addClass('active');
    $('html').addClass('noScroll');
  });

  $('.tags-mobile .tag').click(function(){
    var id = $(this).data('target');
    $(id).addClass('active');
    $('html').addClass('noScroll');
  });

  $('.modal-back').click(function(e){
    e.preventDefault();
    $(this).closest('.modal-base').removeClass('active');
    $('html').removeClass('noScroll');
  });

  // Fixed

   $(function() {
  var fired = false;
  function test(){
    var offset_el = $('.sticky-bottom__box').offset().top + $('.sticky-bottom__box').outerHeight();
    var offset_end = $('.sticky-bottom__box+div').offset().top;
    if(Math.round(offset_el) < Math.round(offset_end)){
      if(!fired){
        $('.sticky-bottom__box').addClass('active');
        fired = true;
      }
    }
    else{
      if(fired){
        $('.sticky-bottom__box').removeClass('active');
        fired = false;
      }
    }
  }
  if($('.sticky-bottom__box').length){
    $(window).on('load scroll resize', test);
  }
  });

  // Footer Menu

  $('.footer-menu .m-toggle').click(function(e){
    $(this).closest('.footer-menu').toggleClass('active');
  });

  // Mobile Menu

  $(function() {

    var opened_menu = false;

    function hideMenu(){
      $('#page').removeClass('panel-open');
      setTimeout(function() {
        $('html').removeClass('slideout-open');
        opened_menu = false;
      }, 400);
    }

  $('.mobile-toggle-menu').click(function(e){
    e.preventDefault();
    if(!opened_menu){
      $('html').addClass('slideout-open');
      $('#page').addClass('panel-open');
      setTimeout(function() {
        opened_menu = true;
      }, 400);
    }
    else{
      hideMenu()
    }
  });

  $(document).on('click','.panel-open',function(e){
    if(opened_menu){
      hideMenu()
    }
  });

  });

  // Mobile VH

  let vh = window.innerHeight * 0.01;
  document.documentElement.style.setProperty('--vh', `${vh}px`);

  (function init100vh(){
    function setHeight() {
      var vh = window.innerHeight * 0.01;
      document.documentElement.style.setProperty('--vh', `${vh}px`);
    }
    setHeight();
    window.addEventListener('resize', setHeight);
  })();

  //Mobile add variant2

  if (window.innerWidth  <= 768){
    $(".variant2-mobile").addClass("variant2")
  }
  

});