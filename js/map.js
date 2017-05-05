function initMap() {
  var coords = { lat: 50.636394, lng: 3.060681 }

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: window.innerWidth < 1000 ? 14 : 15,
    scaleControl: true,
    scrollwheel: false,
    center: coords,
  })

  var marker = new google.maps.Marker({
    position: coords,
    map: map,
    animation: google.maps.Animation.DROP,
  })

  var contentString = '<div id="content">'+
    '<div id="siteNotice"></div>'+
    '<b>Nous sommes ici</b>' +
  '</div>'

  var infoWindow = new google.maps.InfoWindow({  content: contentString })

  setTimeout(() => {
    infoWindow.open(map, marker)
  }, 2000)

  marker.addListener('click', () => {
    infoWindow.open(map, marker)
  })
}
