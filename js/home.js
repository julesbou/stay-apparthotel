$(function() {

  if (!$('.rooms').length) return

  const $imgs = $('.rooms .room img')

  // for locale development
  if ($imgs.toArray().every($img => $img.complete)) loaded()

  // for remote
  let cbCount = $imgs.length
  $imgs.on('load', function() {
    cbCount--
    if (cbCount === 0) loaded()
  })

  function loaded() {
    $('.rooms .room').css('display', 'flex')
    $('img').unveil()
  }
})
