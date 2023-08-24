var map

function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    center: {
      lat: 47.662612716147976, 
      lng: -117.41910788641546,
    },
    zoom: 8,
  })
  
  const myLatLng = { lat: 47.662612716147976, lng: -117.41910788641546 };

  new google.maps.Marker({
    position: myLatLng,
    map,
    title: "Hello World!",
    info: "Hello World!",
  });






  
}

