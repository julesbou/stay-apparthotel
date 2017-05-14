
function goBack() {
  if (history.length === 1){
    window.location = '/'
  } else {
    history.back()
  }
}
