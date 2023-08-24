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
  });

  var glacierSiteA = {
    info:
      '<strong>Glacier Site A Coal Pass</strong><br>\
        Coal, fossils, gold, quartz<br>\
        lat: 48.8706, long: -121.9388',
    lat: 48.8706,
    long: -121.9388,
  }

  var glacierSiteB = {
    info:
      '<strong>Glacier Site B Excelsior</strong><br>\
        Coal, fossils, gold, quartz<br>\
        lat: 48.8989, long: -121.8060',
    lat: 48.8989,
    long: -121.8060,
  }

  var glacierSiteC = {
    info:
      '<strong>Glacier Site C Palm fronds</strong><br>\
        Coal, fossils, gold, quartz<br>\
        lat: 48.9210, long: -121.9578',
    lat: 48.9210,
    long: -121.9578,
  }

  var glacierSiteD = {
    info:
      '<strong>Glacier Site D Fossil Ck</strong><br>\
        Coal, fossils, gold, quartz<br>\
        lat: 48.9054, long: -121.8516',
    lat: 48.9054,
    long: -121.8516,
  }

  var glacierSiteE = {
    info:
      '<strong>Glacier Site E Greenstone</strong><br>\
        Coal, fossils, gold, quartz<br>\
        lat: 48.9023, long: -121.8045',
    lat: 48.9023,
    long: -121.8045,
  }

  var beaverValleySiteA = {
    info:
      '<strong>Beaver Valley Site A</strong><br>\
        Zeolites, tumbler material, jasper<br>\
        lat: 47.9013, long: -122.7295',
    lat: 47.9013,
    long: -122.7295,
  }

  var beaverValleySiteB = {
    info:
      '<strong>Beaver Valley Site B</strong><br>\
        Zeolites, tumbler material, jasper<br>\
        lat: 48.0264, long: -122.7233',
    lat: 48.0264,
    long: -122.7233,
  }
  var locations = [
    //[.info, .lat, .long, site:alpha],
    //when missing var, has marker on Spokane.
    [glacierSiteA.info, glacierSiteA.lat, glacierSiteA.long, 11],
    [glacierSiteB.info, glacierSiteB.lat, glacierSiteB.long, 12],
    [glacierSiteC.info, glacierSiteC.lat, glacierSiteC.long, 13],
    [glacierSiteD.info, glacierSiteD.lat, glacierSiteD.long, 14],
    [glacierSiteE.info, glacierSiteE.lat, glacierSiteE.long, 15],
    [beaverValleySiteA.info, beaverValleySiteA.lat, beaverValleySiteA.long, 20],
    [beaverValleySiteB.info, beaverValleySiteB.lat, beaverValleySiteB.long, 30],
  ]

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 7,
    center: new google.maps.LatLng(47.94042428027075, -119.01079224398552,),
    mapTypeId: google.maps.MapTypeId.ROADMAP,
  })
  var infowindow = new google.maps.InfoWindow({})

var marker, i

for (i = 0; i < locations.length; i++) {
  marker = new google.maps.Marker({
    position: new google.maps.LatLng(locations[i][1], locations[i][2]),
    map: map,
  })

  google.maps.event.addListener(
    marker,
    'click',
    (function (marker, i) {
      return function () {
        infowindow.setContent(locations[i][0])
        infowindow.open(map, marker)
      }
    })(marker, i)
  )
}
}

