  $(".navHamBurger").click(function() {
    $(".navNavItem").toggleClass("navItemHamDown");
    $(".navNavGroup").toggleClass("checkDisplay");
    $(".navHamBurger").toggleClass("navHamBurgerDown");
  });

var imageIndex = 1;
showCurrentImage(imageIndex);

function changeCurrentImage(value) {
  showCurrentImage(imageIndex += value);
}

function showCurrentImage(value) {
  var count;
  var carouselItems = $(".carouselItem");
  if (value > carouselItems.length) {imageIndex = 1}
  if (value < 1) (imageIndex = carouselItems.length)
  for (count = 0; count < carouselItems.length; count++) {
    carouselItems[count].style.display = "none";
  }

  // imageIndex++;
  // if (imageIndex > carouselItems.length) {imageIndex = 1}
  carouselItems[imageIndex-1].style.display = "block";
  // setTimeout(showCurrentImage, 10000);


}
