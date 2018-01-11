$(function() {
  var eliam = ['com', 'apparthotel+site@gmail', 'stay'].reverse().join('.')
  $('.footer .eliam')
    .text(eliam.replace('+site', ''))
    .attr('href', 'mailto:' + eliam)
})
