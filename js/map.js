function initMap() {
  var coords = { lat: 50.636394, lng: 3.060681 }

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: window.innerWidth < 1000 ? 14 : 16,
    scaleControl: true,
    center: coords,
  })

  var marker = new google.maps.Marker({
    position: coords,
    map: map,
    animation: google.maps.Animation.DROP,
  })
}
