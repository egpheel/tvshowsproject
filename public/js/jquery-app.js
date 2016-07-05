$(function() {
  focusTVShow(1500);
});

function focusTVShow(speed) {
  $('#searchTVShowForm').submit(function (e) {
    e.preventDefault();

    $('.searching').fadeIn(speed);

    var formData = {
      search: $('.request').val()
    }

    $.ajax({
      type: 'POST',
      url: '/shows',
      data: {
        formData,
        '_token': $('input[name=_token]').val()
      },
      success: function (response) {
        $("<img id='imgLoader' src='" + response.fanart + "' onload='setTVShow(this.src, " + speed + ")'/>");

        console.log(response);
        vm.changeShow(response.name, response.rating.average, $(response.summary).text());
      },
      error: function (data) {
          console.log('Error:', data);
      }
    });
  });
}

function setTVShow(img, speed) {
  $('.searching').fadeOut(1000);

  $('.title-container').animate({
    height: "280px",
    paddingTop: "15px"
  }, speed);
  $('.title').animate({
    marginBottom: "20px"
  }, speed);

  $('.tvshow').css({
    background: 'url(' + img + ')',
    backgroundSize: 'cover',
    backgroundPosition: 'center top'
  }).fadeIn(speed);
  $('.tvshow-wrap').fadeIn(speed);
}
