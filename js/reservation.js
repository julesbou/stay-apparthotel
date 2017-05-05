$(function() {

  const to = ['fr', 'barbry@orange', 'juliette'].reverse().join('.')
  const $form = $('form[name=reservation]')

  $form.find('.eliam').text(to)

  $form.on('submit', event => {
    event.preventDefault()

    const name = $form.find('[name=name]').val()
    const subject = encodeURIComponent(`Demande de réservation - ${name}`)
    const body = encodeURIComponent($form.find('[name=msg]').val())

    window.location.href = `mailto:${to}?subject=${subject}&body=${body}`
  })
})
