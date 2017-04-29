$(function() {

  if (!$('.gallery').length) return

  const $gallery = $('.gallery')
  const $galleryFullpage = $('.gallery-fullpage')
  const $imgs = $('.gallery .img')

  $gallery.find('img').unveil()

  let currImg
  let imgs = [...$imgs].map(img => $(img).find('img').attr('src'))

  $imgs.on('click', function(event) {
    $('body').addClass('has-overlay')
    currImg = $(event.target).find('img').attr('src')
    $galleryFullpage.addClass('show')
      .find('.img').empty().append(`<img src="${currImg}" />`)
  })

  $galleryFullpage.find('.left').on('click', function() {
    let currIndex = imgs.findIndex(img => img === currImg)
    if (currIndex === 0) currIndex = imgs.length - 1
    else currIndex -= 1
    currImg = imgs[currIndex]

    $galleryFullpage
      .find('.img').empty().append(`<img src="${currImg}" />`)
  })

  $galleryFullpage.find('.right').on('click', function() {
    let currIndex = imgs.findIndex(img => img === currImg)
    if (currIndex === imgs.length - 1) currIndex = 0
    else currIndex += 1
    currImg = imgs[currIndex]

    $galleryFullpage
      .find('.img').empty().append(`<img src="${currImg}" />`)
  })

  $galleryFullpage.find('.close').on('click', function() {
    $('body').removeClass('has-overlay')
    $galleryFullpage.removeClass('show')
  })

})
