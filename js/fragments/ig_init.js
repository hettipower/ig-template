jQuery(document).ready(function ($) {

  Fancybox.bind('[data-fancybox]', {
    //
  });
    
  $('.client-carousel').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1000,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

  $('.service-carousel').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1000,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

  $('.navigationToggler').on('click' , function(){
    $(this).parent().toggleClass('open-menu');
  });

  $('.main-slider').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
  });

  $('header nav .navigation li.has-submenu .icon').on('click' , function(){
    $(this).parent().toggleClass('open-submenu');
  });

  var firstVisit = localStorage.getItem('firstVisit');
  if (firstVisit == null) {
    localStorage.setItem('firstVisit', 1);

    // Show popup here
    Fancybox.show([{ src: "#popup-form", type: "inline" }]);
  }

});