$.fn.fadeIt = function(preloader, speed) {
  var currentBackground = this.css('background-image'),
      preloadingBackground = $(preloader).css('background-image');

  if (currentBackground != preloadingBackground) {
    console.log('hai');
  } else {
    console.log('nooo');
  }

  //this.fadeOut(speed);
  return this;
}
