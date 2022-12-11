function initMap () {
  const location = {lat: 18.4241, lng: 33.9249}
  const map = new google.maps.Map(document.getElementById('map'), {
    zoom: 4,
    center: location
  })
  const marker = new google.maps.Marker({
    position: location,
    map: map
  })
}
