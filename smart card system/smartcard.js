/*Navbar hide */
$(function(){ 
    var navMain = $(".navbar-collapse");

    navMain.on("click", "a", null, function () {
        navMain.collapse('hide');
    });
});


  /*login form hide and show */

  // $("#signup").click(function () {
  //   $("#first").fadeOut("fast", function () {
  //     $("#second").fadeIn("fast");
  //   });
  // });

  // $("#signin").click(function () {
  //   $("#second").fadeOut("fast", function () {
  //     $("#first").fadeIn("fast");
  //   });
  // });
  
/* scroll effect*/
$(document).ready(function(){
    $(window).scroll(function(){
        // sticky navbar on scroll script
        if(this.scrollY > 20){
            $('.navbar').addClass("sticky");          
        }else{
            $('.navbar').removeClass("sticky");            
        }

        if(this.scrollY > 100){            
            $('.navbar').css('background', 'linear-gradient(45deg, #ffaf00, #bb02ff)'); 
            // $('.navbar').css('background', 'red'); 
            $('.navbar .navbar-toggler-icon').css('color', '#fff'); 
            $('.navbar .navbar-nav .nav-item a').css('color', '#fff');
        }else{           
            $('.navbar').css('background', ''); 
            $('.navbar .navbar-toggler-icon').css('color', '');  
            $('.navbar .navbar-nav .nav-item a').css('color', '');                            
        }
        
        // scroll-up button show/hide script
        if(this.scrollY > 500){
            $('.scroll-up-btn').addClass("show");           
        }else{
            $('.scroll-up-btn').removeClass("show");          
        }
    });

    // slide-up script
    $('.scroll-up-btn').click(function(){
        $('html').animate({scrollTop: 0});
        // removing smooth scroll on slide-up button click
        $('html').css("scrollBehavior", "smooth");
    });

    
   
});
