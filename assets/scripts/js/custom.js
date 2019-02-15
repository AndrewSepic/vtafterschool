//Custom JS for VT After School
// by Andrew@thinkupdesign.ca
//


jQuery(document).ready(function($) {

  $('form#searchform').on("click", function(){
    console.log('Clicked search!');
    $(this).addClass('open');
    $(this).animate({
      width: [ 150, "swing"]
    }, 500);
  });

//End Document Ready
});