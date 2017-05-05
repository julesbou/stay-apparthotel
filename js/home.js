$(function() {

  if (!$('.rooms').length) return

  const $imgs = $('.rooms .room img')

  let nbImgDone = 0
  $imgs.each((i, $img) => $img.complete && nbImgDone++)

  let nbImgRemaining = $imgs.length - nbImgDone
  if (nbImgRemaining === 0) {
    loaded()
    return
  }

  console.log(nbImgRemaining, nbImgDone)

  $imgs.on('load', function(event) {
    console.log('ok', event.target)
    nbImgRemaining--
    if (nbImgRemaining === 0) loaded()
  })

  /*
  setTimeout(() => {
    nbImgDone = 0
    $imgs.each((i, $img) => $img.complete && nbImgDone++)
    nbImgRemaining = $imgs.length - nbImgDone
    if (nbImgRemaining === 0) loaded()
  }, 1000)
  */

  function loaded() {
    $('.rooms .room').css('display', 'flex')
    $('img').unveil()
  }
})
