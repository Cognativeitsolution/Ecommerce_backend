
// Open Sidebar
$("#menu_toggle-btn").click(function(){
  $(".sidebar_container").addClass("active");
})
  
// Close Sidebar 
$("#close_cross").click(function(){
  $(".sidebar_container").removeClass("active");
})

// Login page slider 

var swiper = new Swiper(".login_side-banner", {
  spaceBetween: 30,
  loop:true,
  autoplay: true,
  slidesPerView: 1,
  speed: 800,

 pagination: {
el: '.swiper-pagination',
},
 breakpoints: {
  375:{
   //   slidesPerView: 2,
     spaceBetween: 20,
   },
   425:{
   //   slidesPerView: 2,
     spaceBetween: 20,
   },
   640: {
   //   slidesPerView: 2,
     spaceBetween: 20,
   },
   768: {
   //   slidesPerView: 4,
     spaceBetween: 40,
   },
   1024: {
   //   slidesPerView: 5,
     spaceBetween: 50,
   },
 },
});


// main page hero slider 

var swiperhero = new Swiper(".hero_slider", {
  spaceBetween: 30,
  loop:true,
  autoplay: true,
  slidesPerView: 1,
  speed: 2000,

//  pagination: {
// el: '.swiper-pagination',
// clickable: true,
// },
navigation: {
  nextEl: ".swiper-button-next",
  prevEl: ".swiper-button-prev",
},
 breakpoints: {
  375:{
   //   slidesPerView: 2,
     spaceBetween: 20,
   },
   425:{
   //   slidesPerView: 2,
     spaceBetween: 20,
   },
   640: {
   //   slidesPerView: 2,
     spaceBetween: 20,
   },
   768: {
   //   slidesPerView: 4,
     spaceBetween: 40,
   },
   1024: {
   //   slidesPerView: 5,
     spaceBetween: 50,
   },
 },
});


// user testimonial slider

var swiper = new Swiper(".testimonial_ss", {
spaceBetween: 30,

// slidesPerView: 7,
 navigation: {
   nextEl: ".swiper-button-next",
   prevEl: ".swiper-button-prev",
   
 },
 breakpoints: {
  375:{
     slidesPerView: 1,
     spaceBetween: 20,
   },
   425:{
     slidesPerView: 1,
     spaceBetween: 20,
   },
   640: {
     slidesPerView: 1,
     spaceBetween: 20,
   },
   768: {
     slidesPerView: 1,
     spaceBetween: 40,
   },
   1024: {
     slidesPerView: 1,
     spaceBetween: 50,
   },
 },
});


// background image
for (var list = $(".bg_img"), i = 0; i < list.length; i++) {
  var src = list[i].getAttribute("data-bg");
  list[i].style.backgroundImage = "url('" + src + "')";
}

// nav-tabs
$(document).on('click', '.nav_un-list li', function(){
  $(this).addClass('active').siblings('li').removeClass('active');

})

// Form Validation

const form = document.getElementById("form-control");
const userName = document.getElementById("fullname");
const userMail = document.getElementById("email");
const commentArea = document.getElementById("user_comment");


// email regex
function checkEmail(){
  let emailReg = /^([a-z\d\.-]+)@([a-z\d-]+)\.([a-z]{2,8})()$/;
  if(emailReg.test(userMail.value)){
    userMail.className += " valid";
  }
  else if(!emailReg.test(userMail.value)){
    userMail.className += " invalid";
  }
}


// show error message
function showErrorMessage(){
  if(userName.value == ""){
    document.getElementById("uname-err").innerHTML = "UserName is Required";
    document.getElementById('uname-err').style.color = "red";
    userName.className += " invalid" ;
  }
  if(userMail.value == ""){
    document.getElementById("umail-err").innerHTML = "Email Address is Required";
    document.getElementById('umail-err').style.color = "red";
    userMail.className += " invalid" ;
  }

  if(commentArea.value == ""){
    document.getElementById("msg-err").innerHTML = "Please enter your message";
    document.getElementById('msg-err').style.color = "red";
    commentArea.className += " invalid" ;
  }
 
}


// form.click('submit',function(e){
//   // To stop from reloading page
//   e.preventDefault(); 

//     checkEmail();

//     showErrorMessage();
   
//   });


$('#nav_un-list a').click(function (evt) {
  evt.preventDefault();
  $(this).tab('show');
});

$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
  //new tab
  console.log(e.target);
  
  //previous tab
  console.log(e.relatedTarget);
})
$('.mobile_menu li').click(function () {
  
  $(this).find('ul').slideToggle();
  
});
