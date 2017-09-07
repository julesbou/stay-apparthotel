$(function() {

  const $form = $('form[name=contact]')

  $form.on('submit', event => {
    event.preventDefault()

    const $email = $form.find('[name=email]')
    const $name = $form.find('[name=name]')
    const $msg = $form.find('[name=msg]')

    const msgValid = $msg.validity
    if (msgValid && !msgValid.valid) {
      alert('Le message n\'est pas valide')
      return
    }

    const emailValid = $email.validity
    if (emailValid && !emailValid.valid) {
      alert('L\'adresse mail n\'est pas valide')
      return
    }

    $.post({
      url: window.location.hostname === '127.0.0.1' ? 'http://localhost:8000' : 'https://stayapparthotel-mailer.herokuapp.com',
      crossDomain: true,
      data: {
        email: $email.val(),
        name: $name.val(),
        body: $msg.val(),
      },
      dataType: 'json',
      success: (data, status) => {
        if (status !== 202 && status !== 200) {
          alert('Une erreur est survenue. Votre message n\'a pas pu être envoyé. Merci de nous contacter par mail ' + window.eliam)
        } else {
          alert('Votre message a bien été envoyé. Nous vous répondrons dans les plus brefs délais.')
        }
      },
      error: () => {
        alert('Une erreur est survenue. Votre message n\'a pas pu être envoyé. Merci de nous contacter par mail ' + window.eliam)
      }
    })
  })
})
