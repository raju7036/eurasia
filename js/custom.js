

$('.your-class').slick({
    slidesToShow: 2,
    slidesToScroll: 1,
    autoplay: true,
    infinite: true,
    // autoplaySpeed: 2000,
    navs:true, 
    nextArrow: '<button class="navs next"><i class="bi bi-chevron-right"></i></button>',
    prevArrow: '<button class="navs previous"><i class="bi bi-chevron-left"></i></button>',
  });

  

  $('.process-class').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    infinite: true,
    navs:true, 
    nextArrow: '<button class="navs next"><i class="bi bi-chevron-right"></i></button>',
    prevArrow: '<button class="navs previous"><i class="bi bi-chevron-left"></i></button>',
    // responsive: [
    //   {
    //     breakpoint: 1024,
    //     settings: {
    //       slidesToShow:1,
    //       slidesToScroll:1,
    //       infinite: true,
    //       dots: false
    //     }
    //   },
    //   {
    //     breakpoint: 600,
    //     settings: {
    //       slidesToShow: 2,
    //       slidesToScroll: 2
    //     }
    //   },
    //   {
    //     breakpoint: 480,
    //     settings: {
    //       slidesToShow: 1,
    //       slidesToScroll: 1
    //     }
    //   }
    //   // You can unslick at a given breakpoint now by adding:
    //   // settings: "unslick"
    //   // instead of a settings object
    // ]
  });