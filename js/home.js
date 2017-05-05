$(function() {

  if (!$('.rooms').length) return

  const $imgs = $('.rooms .room img')
  let nbImgLoaded = 0

  $imgs.each(function() {
    if (this.complete) loaded()
    else $(this).one('load', loaded)
  })

  function loaded() {
    nbImgLoaded++
    if (nbImgLoaded === $imgs.length) {
      $('.rooms .room').css('display', 'flex')
      $('img').unveil()
    }
  }
})
