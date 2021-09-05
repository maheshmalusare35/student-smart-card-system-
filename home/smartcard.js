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
  
  
