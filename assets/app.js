$(document).ready(function () {
  var maxSlides = $(".item").length;
  var current = 1;

  $(".btn-prev").click(function () {
    if (current === 1) {
      current = maxSlides;
      showSlide();
    } else {
      current--;
      showSlide();
    }
  });

  $(".btn-next").click(function () {
    if (current === maxSlides) {
      current = 1;
      showSlide();
    } else {
      current++;
      showSlide();
    }
  });

  function showSlide() {
    $(".item").removeClass("active");

    $('.item[data-id="' + current + '"]').addClass("active");
  }
});

$(document).ready(function(){
  $('.owl-carousel').owlCarousel({
    loop:true,
    margin:30,
    items:3,
    nav:true,
    navText:["",""],
    responsive:{
          0:{
              items:1,
            
              
          },
          700:{
                items:2,
                
              
          },
        
          
    }
  });
});
