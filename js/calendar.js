$(function() {

  const $modal = $('.modal-calendar')

  $('.btn-calendar').click(() => {
    $modal.addClass('show')
  })

  $modal.find('.close').on('click', close)

  $('body').on('keyup', function(event) {
    if (event.keyCode === 27) close() // ESC
  })


  function close() {
    $('body').removeClass('has-overlay')
    $modal.removeClass('show')
  }


})
