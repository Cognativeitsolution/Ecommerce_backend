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
var list4 = $('.featured_grad');
for (var i = 0; i < list4.length; i++) {
    var srcImg = list4[i].getAttribute('data-bg');
    list4[i].style.backgroundImage = "url('" + srcImg + "')";
};


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


// FAQ image
for (var list = $(".bg_img"), i = 0; i < list.length; i++) {
   var src = list[i].getAttribute("data-bg");
   list[i].style.backgroundImage = "url('" + src + "')";
}


// All Stores
var list3 = $('.resp_img');
for (var i = 0; i < list3.length; i++) {
    var srcImg = list3[i].getAttribute('data-bg');
    list3[i].style.backgroundImage = "url('" + srcImg + "')";
};

// blog images
var list3 = $('.lazy_img');
for (var i = 0; i < list3.length; i++) {
    var srcImg = list3[i].getAttribute('data-bg');
    list3[i].style.backgroundImage = "url('" + srcImg + "')";
};


// blog banner image
var list3 = $('.blog_img');
for (var i = 0; i < list3.length; i++) {
    var srcImg = list3[i].getAttribute('data-bg');
    list3[i].style.backgroundImage = "url('" + srcImg + "')";
};


// Single blog banner image
var list3 = $('.sb_img');
for (var i = 0; i < list3.length; i++) {
    var srcImg = list3[i].getAttribute('data-bg');
    list3[i].style.backgroundImage = "url('" + srcImg + "')";
};

// Blog reply 
$(document).ready(function(){
    $("#reply_user").click(function(){
      $("#reply_form").slideToggle("slow");
    });
  });

// latest blog image
var list3 = $('.lazy-lts');
for (var i = 0; i < list3.length; i++) {
    var srcImg = list3[i].getAttribute('data-bg');
    list3[i].style.backgroundImage = "url('" + srcImg + "')";
};



var swiper = new Swiper(".heroSwiper", {
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });