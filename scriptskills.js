$(".navHamBurger").click(function() {
  $(".navNavItem").toggleClass("navItemHamDown");
  $(".navNavGroup").toggleClass("checkDisplay");
  $(".navHamBurger").toggleClass("navHamBurgerDown");
});


function backToTop() {
  $('html').animate({ scrollTop: 0 }, 'fast');
  document.documentElement.scrollTop = 0;
}

function showSources() {
  $("#sources").toggleClass("sources");
  window.scrollTo(0,document.body.scrollHeight);
}

var currentModalState = false;

function modalOpenClose(number) {
  var modalgroup = "#modal" + number;
  if (currentModalState === false) {
    currentModalState = true;
    $(modalgroup).toggleClass("display-i-block");
  } else {
    currentModalState = false;
    $(modalgroup).toggleClass("display-i-block");
  }

}

// $(".modal-content").toggleClass("animateSlideDown");
// $(".modal-content").toggleClass("animateSlideUp");
// if (currentModalState === true) {
//   $(document).click(function(event) {
//     var $target = $(event.target);
//     if ($target.closest(".box-modal").length &&
//     $(".box-modal").is(":visible")) {
//       $(modalgroup).toggleClass("display-i-block");
//     }
//   });
// }
