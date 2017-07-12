$(function() {

  const to = ['fr', 'barbry@orange', 'juliette'].reverse().join('.')
  const $form = $('form[name=reservation]')

  $form.find('.eliam').text(to).attr('href', 'mailto:' + to)

  $form.on('submit', event => {
    event.preventDefault()

    const email = $form.find('[name=email]').val()
    const name = $form.find('[name=name]').val()
    const body = encodeURIComponent($form.find('[name=msg]').val())

    sendData({ email, name, body })
  })


  function sendData(data) {
    var XHR = new XMLHttpRequest();
    var urlEncodedData = "";
    var urlEncodedDataPairs = [];
    var name;

    // Turn the data object into an array of URL-encoded key/value pairs.
    for(name in data) {
      urlEncodedDataPairs.push(encodeURIComponent(name) + '=' + encodeURIComponent(data[name]));
    }

    // Combine the pairs into a single string and replace all %-encoded spaces to
    // the '+' character; matches the behaviour of browser form submissions.
    urlEncodedData = urlEncodedDataPairs.join('&').replace(/%20/g, '+');

    // Set up our request
    XHR.open('POST', window.location.hostname === 'localhost' ? 'http://localhost:8000' : 'https://stayapparthotel-mailer.herokuapp.com');

    // Add the required HTTP header for form data POST requests
    XHR.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    // Finally, send our data.
    XHR.send(urlEncodedData);
  }

})
