
 var map;
 var latitude = $("#hdLat").val();
 var longitude = $("#hdLng").val();
 var infowindow;
 var service;
var markers = [];
var pyrmont = {lat: parseFloat(latitude), lng:parseFloat(longitude)};
      function initMap() {
                
       // var pyrmont = {lat: 19.2183, lng:72.9781};

        map = new google.maps.Map(document.getElementById('map1'), {
          center: pyrmont,
          zoom: 12
        });

       // infowindow = new google.maps.InfoWindow();
       
        var marker = new google.maps.Marker({
        //icon: "http://" + _url1 + "/PropertyDescription/img/" + _markerImg,
        map: map,
        position: pyrmont,
        animation: google.maps.Animation.DROP
    });

    infowindow = new google.maps.InfoWindow();
    infowindowmain = new google.maps.InfoWindow({
        content: place.name
    });

    infowindowmain.open(map, marker);

    marker.addListener('click', function () {
        infowindowmain.open(map, marker);
    });
        var service = new google.maps.places.PlacesService(map);
       
       // google.maps.event.addListenerOnce(map, 'bounds_changed', performSearch);
       /* service.nearbySearch({
        location: pyrmont,
        radius: 500,
        types: ['bus_station']
    }, callback);*/

      }

      function find_nearby()
      {
        if (document.getElementById('r1').checked) {
    vals = document.getElementById('r1').value;
    }
    else if(document.getElementById('r2').checked)
    {
        vals = document.getElementById('r2').value;
    }
    else if(document.getElementById('r3').checked)
    {
         vals = document.getElementById('r3').value;
    } 

    else{
         vals = document.getElementById('r4').value;
    }    
      performSearch(vals);
      deleteMarkers();
      $('div .service_box1 table tr').remove();
      }

      function performSearch(vals)
      {
        var request = {
    location: pyrmont,
    radius:700,
    types: [vals]
  };

   var service = new google.maps.places.PlacesService(map);
  service.nearbySearch(request, callback);
      }


      function callback(results, status) {
        if (status === google.maps.places.PlacesServiceStatus.OK) {
           
          for (var i = 0; i < results.length; i++) {
           //createMarker(results[i]);
            calculateDistances(results[i],pyrmont)

          }

        }
      }
       function calculateDistances(place,pyrmont) {

    var service = new google.maps.DistanceMatrixService();
    service.getDistanceMatrix(
      {
        origins: [pyrmont],
        destinations: [place.geometry.location],
        travelMode: google.maps.TravelMode.DRIVING,
        unitSystem: google.maps.UnitSystem.METRIC,
        avoidHighways: false,
        avoidTolls: false
        
      }, function (response, status) {
        if (status == google.maps.DistanceMatrixStatus.OK) {
            var varM = response.rows[0].elements[0].distance.text + " | " + response.rows[0].elements[0].duration.text;
            createMarker(place, varM);
        }
    });
  }

      function createMarker(place, varM) {
        var placeLoc = place.geometry.location;
        icons ="http://localhost/horizonfp/images/amenities/icons8-Marker-26.png";
        var marker = new google.maps.Marker({
          map: map,
          position: place.geometry.location,
          animation: google.maps.Animation.DROP,
          icon: icons
        });
          markers.push(marker);

    $("div .service_box1 table").append("<tr><td class='td1'>" + place.name + "</td> <td class='distance td1'>" + varM + "</td></tr>");
    $(" ul .first").remove();
        google.maps.event.addListener(marker, 'click', function() {
            infowindow.setContent("<p><strong>" + place.name + "</strong><br/>" + varM + "</p>");
        infowindow.open(map, this);
         /* infowindow.setContent(place.name);
          infowindow.open(map, this);*/
        });
      }
    function setMapOnAll(map) {
      for (var i = 0; i < markers.length; i++) {
       markers[i].setMap(map);
      }
    }
    function clearMarkers() {
       setMapOnAll(null);
     }

      function deleteMarkers() {
        clearMarkers();
        markers = [];
      }

     

  /*function callback1(response, status) {
    if (status != google.maps.DistanceMatrixStatus.OK) {
      alert('Error was: ' + status);
    } else {
      var origins = response.originAddresses;
      var destinations = response.destinationAddresses;
      var outputDiv = document.getElementById('outputDiv');
      outputDiv.innerHTML = '';

      for (var i = 0; i < origins.length; i++) {
    var results = response.rows[i].elements;
    for (var j = 0; j < results.length; j++) {
        var outputDiv = document.getElementById("outputDiv");
    

$("div .service_box1").append("<p>" +  results[j].distance.text + " |<span>" + results[j].duration.text+ "</span></p>");

     $(" ul .first").remove();
    }
}
    }
  }*/

     /* function CalculateDistance(place, pyrmont) {
    var service = new google.maps.DistanceMatrixService();
    service.getDistanceMatrix(
    {
        origins: [pyrmont],
        destinations: [place.geometry.location],
        travelMode: google.maps.TravelMode.DRIVING,
        unitSystem: google.maps.UnitSystem.METRIC,
        avoidHighways: false,
        avoidTolls: false
    }, function (response, status) {
        if (status == google.maps.DistanceMatrixStatus.OK) {
            var varM = response.rows[0].elements[0].distance.text + " | " + response.rows[0].elements[0].duration.text;
            createMarker(place, varM);
        }
    });
}*/
/*var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map1'), {
          center: {lat: 19.0760, lng:72.8777},
          zoom: 11
        });

        var request = {
            location:center,
            radius:8047,
            types:['cafe']
        };

        var service = new google.maps.places.PlacesService(map);
        service.nearbySearch(request,neraByPlaces);

        function neraByPlaces(results,status){
            if(status === google.maps.places.PlacesServiceStatus.OK){
                for(var i=0;i<results.length;i++){
                    createMarker(results[i]);
                }
            }
        }

        function createMarker(place){
            var placeLoc = place.geometry.location;
            var marker = new google.maps.Marker({
                map:map,
                position:place.geometry.location
            });
        }
        }*/

        
        /*var markers = [
        {
        	coords:{lat:19.0600,lng: 72.8900}, iconImage:'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png'
        },
        {
        	coords:{lat:19.2183,lng: 72.9781}
        }

        ];

        for(var i =0; i< markers.length; i++)
        {
        	addMarker(markers[i]);
        }*/
       /* addMarker({coords:{lat:19.0600,lng: 72.8900	}, iconImage:'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png'});
        addMarker({coords:{lat:19.2183,lng: 72.9781}});*/


        /*function addMarker(props){
        	var marker = new google.maps.Marker({
         	position:props.coords,
         	map:map,
        	icon:props.iconImage
         });
        }*/

         

         /*var infoWindow = new google.maps.InfoWindow({
         	content:'<h3>Sydney</h3>'
         });

         marker.addListener('click',function(){
        	infoWindow.open(map,marker);
         });*/
        
      