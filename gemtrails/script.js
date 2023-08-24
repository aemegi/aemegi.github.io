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

  /*
  var name = {
    info:
      '<strong>name site</strong><br>\
        stones<br>\
        lat: 48.0264, long: -122.7233',
    lat: 48.0264,
    long: -122.7233,
  }
  */

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

  var nugentsCornerSiteA = {
    info:
      '<strong>Nugent\'s Corner Site A Nooksack</strong><br>\
        Tumbler, gold<br>\
        lat: 48.8398, long: -122.2912',
    lat: 48.8398,
    long: -122.2912,
  }

  var nugentsCornerSiteB = {
    info:
      '<strong>Nugent\'s Corner Site B Racehorse</strong><br>\
        Tumbler, gold<br>\
        lat: 48.8682, long: -122.1336',
    lat: 48.8682,
    long: -122.1336,
  }

  var blanchardHillSiteA = {
    info:
      '<strong>Blanchard Hill Site A turn</strong><br>\
        Stilpnomelane crystals in matrix<br>\
        lat: 48.6105, long: -122.3829',
    lat: 48.6105,
    long: -122.3829,
  }
  
  var blanchardHillSiteB = {
    info:
      '<strong>Blanchard Hill Site B main site</strong><br>\
      Stilpnomelane crystals in matrix<br>\
        lat: 48.6129, long: -122.3944',
    lat: 48.6129,
    long: -122.3944,
  }

  var concreteSiteA = {
    info:
      '<strong>Concrete Site A Grandy Creek</strong><br>\
        Tumbler material, calcite, fossils<br>\
        lat: 48.5530, long: -122.8603',
    lat: 48.5530,
    long: -122.8603,
  }
  
  var concreteSiteB = {
    info:
      '<strong>Concrete Site B Swift Creek</strong><br>\
      Tumbler material, calcite, fossils<br>\
        lat: 48.7354, long: -122.6582',
    lat: 48.7354,
    long: -122.6582,
  }
  
  var concreteSiteC = {
    info:
      '<strong>Concrete Site C Concrete Gate</strong><br>\
      Tumbler material, calcite, fossils<br>\
        lat: 48.5470, long: -122.7394',
    lat: 48.5470,
    long: -122.7394,
  }
  
  var baconCreekSiteA = {
    info:
      '<strong>Bacon Creek Site A Bacon Ck</strong><br>\
        Soapstone<br>\
        lat: 48.5969, long: -122.3729',
    lat: 48.5969,
    long: -122.3729,
  }
  
  var baconCreekSiteB = {
    info:
      '<strong>Bacon Creek Site B Cascade River</strong><br>\
        Soapstone<br>\
        lat: 48.4810, long: -122.2248',
    lat: 48.4810,
    long: -122.2248,
  }
  
  var beaverValleySiteA = {
    info:
      '<strong>Beaver Valley Site A</strong><br>\
        Zeolites, tumbler material, jasper<br>\
        lat: 47.9013, long: -122.7295',
    lat: 47.9013,
    long: -122.7295,
  }

  var walkerValleySiteA = {
    info:
      '<strong>Walker Valley Site A jade in creek</strong><br>\
        Quartz geodes, jade, quartz<br>\
        lat: 48.3784, long: -122.1684',
    lat: 48.3784,
    long: -122.1684,
  }
  
  var walkerValleySiteB = {
    info:
      '<strong>Walker Valley Site B restrooms</strong><br>\
      Quartz geodes, jade, quartz<br>\
        lat: 48.3754, long: -122.1698',
    lat: 48.3754,
    long: -122.1698,
  }
  
  var walkerValleySiteC = {
    info:
      '<strong>Walker Valley Site C small geodes</strong><br>\
      Quartz geodes, jade, quartz<br>\
        lat: 48.3719, long: -122.1659',
    lat: 48.3719,
    long: -122.1659,
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
    [nugentsCornerSiteA.info, nugentsCornerSiteA.lat, nugentsCornerSiteA.long, 21],
    [nugentsCornerSiteB.info, nugentsCornerSiteB.lat, nugentsCornerSiteB.long, 22],
    [blanchardHillSiteA.info, blanchardHillSiteA.lat, blanchardHillSiteA.long, 31],
    [blanchardHillSiteB.info, blanchardHillSiteB.lat, blanchardHillSiteB.long, 32],
    [concreteSiteA.info, concreteSiteA.lat, concreteSiteA.long, 41],
    [concreteSiteB.info, concreteSiteB.lat, concreteSiteB.long, 42],
    [concreteSiteC.info, concreteSiteC.lat, concreteSiteC.long, 43],
    [baconCreekSiteA.info, baconCreekSiteA.lat, baconCreekSiteA.long, 51],
    [baconCreekSiteB.info, baconCreekSiteB.lat, baconCreekSiteB.long, 52],
    [walkerValleySiteA.info, walkerValleySiteA.lat, walkerValleySiteA.long, 61],
    [walkerValleySiteB.info, walkerValleySiteB.lat, walkerValleySiteB.long, 62],
    [walkerValleySiteC.info, walkerValleySiteC.lat, walkerValleySiteC.long, 63],
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

