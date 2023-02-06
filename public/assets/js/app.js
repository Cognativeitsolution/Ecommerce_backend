// Toggle menu Button
$('.toggle_menu').click(function(){
    $('.sidebar__container').addClass('active')
})

$('.close-container').click(function(){
    $('.sidebar__container').removeClass('active')
})

// Search progress 
$('.input').bind('keyup', function() {
    var value = $(this).val();
    if (value != '') {
       $('.search_result_box').fadeIn(100);
    } else {
       $('.search_result_box').fadeOut(700);
    }
 });


// Featured Offer 
// var list4 = $('.featured_grad');
// for (var i = 0; i < list4.length; i++) {
//     var srcImg = list4[i].getAttribute('data-bg');
//     list4[i].style.backgroundImage = "url('" + srcImg + "')";
// };


// FAQs
$('.question').click(function() {
   $(this).children('p').slideToggle();
   $(this).siblings().children('p').slideUp();
   $(this).find('i.fa').toggleClass('fa-caret-down').toggleClass('fa-caret-up');
});
$('.str_item svg').click(function() {
   $(this).parent().siblings().slideToggle();
});
$('.verified_filter').click(function() {
   $(this).children('.verified_btn').toggleClass('active')
});

// Blog reply 
$(document).ready(function(){
    $("#reply_user").click(function(){
      $("#reply_form").slideToggle("slow");
    });
  });

var swiper = new Swiper(".heroSwiper", {
    autoplay:true,
    loop:true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });