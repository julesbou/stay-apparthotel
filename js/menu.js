$(function() {

  var stickyThreshold = $('.header').outerHeight(true)

  $(window).scroll(updateMenu)
  updateMenu()


  function updateMenu() {
    if ($(window).scrollTop() > stickyThreshold) {
      $('.menu').addClass('sticky')
      $('.header').addClass('menu-sticked')
    } else {
      $('.menu').removeClass('sticky')
      $('.header').removeClass('menu-sticked')
    }
  }

})
