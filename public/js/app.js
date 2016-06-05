$(function() {
  $('body').fadeIt('.preloader', 1500);
  focusTVShow(1500);
});

function focusTVShow(speed) {
  $('#searchTVShowForm').submit(function (e) {
    e.preventDefault();

    $('.title-container').animate({
      height: "280px",
      paddingTop: "15px"
    }, speed);
    $('.title').animate({
      marginBottom: "20px"
    }, speed);
  });
}
