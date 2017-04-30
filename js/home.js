$(function() {

  if (!$('.rooms').length) return

  const $imgs = $('.rooms .room img')

  let nbImgDone = 0
  $imgs.each((i, $img) => $img.complete && nbImgDone++)

  let nbImgRemaining = $imgs.length - nbImgDone
  if (nbImgRemaining === 0) loaded()

  $imgs.on('load', function() {
    nbImgRemaining--
    if (nbImgRemaining === 0) loaded()
  })

  function loaded() {
    $('.rooms .room').css('display', 'flex')
    $('img').unveil()
  }
})
