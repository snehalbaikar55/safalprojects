var map;
var infowindow;
var infowindowmain;
var _url1 = 'www.thepropertist.com';

function initMap() {

    var _lat = $("#hdLat").val();
    var _lon = $("#hdLon").val();

    var pyrmont = { lat: parseFloat(_lat), lng: parseFloat(_lon) };
    var _Address = $("#hdAddress").val();
    var _Title = $("#hdTitle").val();

    map = new google.maps.Map(document.getElementById('map1'), {
        center: pyrmont,
        zoom: 15
    });
    var marker = new google.maps.Marker({
        //icon: "http://" + _url1 + "/PropertyDescription/img/" + _markerImg,
        map: map,
        position: pyrmont
    });

    infowindow = new google.maps.InfoWindow();
    infowindowmain = new google.maps.InfoWindow({
        content: "<strong>" + _Title + "</strong><br/>" + _Address
    });

    infowindowmain.open(map, marker);

    marker.addListener('click', function () {
        infowindowmain.open(map, marker);
    });

    var service = new google.maps.places.PlacesService(map);

    service.nearbySearch({
        location: pyrmont,
        radius: 2000,
        types: ['bus_station']
    }, callback);

    service.nearbySearch({
        location: pyrmont,
        radius: 2000,
        types: ['school']
    }, callback);

    //service.nearbySearch({
    //    location: pyrmont,
    //    radius: 2000,
    //    types: ['shopping_mall']
    //}, callback);

    service.nearbySearch({
        location: pyrmont,
        radius: 2000,
        types: ['hospital']
    }, callback);

    service.nearbySearch({
        location: pyrmont,
        radius: 2000,
        types: ['train_station']
    }, callback);

    //service.nearbySearch({
    //    location: pyrmont,
    //    radius: 2000,
    //    types: ['atm']
    //}, callback);

    //service.nearbySearch({
    //    location: pyrmont,
    //    radius: 2000,
    //    types: ['bank']
    //}, callback);

}

function callback(results, status) {

    var _lat = $("#hdLat").val();
    var _lon = $("#hdLon").val();
    var pyrmont = { lat: parseFloat(_lat), lng: parseFloat(_lon) };

    if (status === google.maps.places.PlacesServiceStatus.OK) {
        for (var i = 0; i < results.length; i++) {
            CalculateDistance(results[i], pyrmont);
        }
    }
}

function CalculateDistance(place, pyrmont) {
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

var markerGroups = {
    "bus_station": [],
    "school": [],
    "shopping_mall": [],
    "hospital": [],
    "train_station": [],
    "atm": []
};

function createMarker(place, varDistance) {
    var markertype = "";
    var divid = "";
    var placeLoc = place.geometry.location;
    var _lat = $("#hdLat").val();
    var _lon = $("#hdLon").val();
    var pyrmont = { lat: parseFloat(_lat), lng: parseFloat(_lon) };

    if (place.types.indexOf("bus_station") > -1) {
        iconimg = "http://" + _url1 + "/builder/assets/img/busstop.png";
        markertype = "bus_station";
        divid = "bs";
    }
    else if (place.types.indexOf("school") > -1) {
        iconimg = "http://" + _url1 + "/builder/assets/img/school.png";
        markertype = "school";
        divid = "sch";
    }
    else if (place.types.indexOf("shopping_mall") > -1) {
        iconimg = "http://" + _url1 + "/builder/assets/img/store.png";
        markertype = "shopping_mall";
        divid = "shpm";
    }
    else if (place.types.indexOf("hospital") > -1) {
        iconimg = "http://" + _url1 + "/builder/assets/img/hospital.png";
        markertype = "hospital";
        divid = "hosp";
    }
    else if (place.types.indexOf("train_station") > -1) {
        iconimg = "http://" + _url1 + "/builder/assets/img/train_station.png";
        markertype = "train_station";
        divid = "trn";
    }
    else if (place.types.indexOf("atm") > -1 || place.types.indexOf("bank") > -1) {
        iconimg = "http://" + _url1 + "/builder/assets/img/bank.png";
        markertype = "atm";
        divid = "atm";
    }

    var marker = new google.maps.Marker({
        icon: iconimg,
        map: map,
        position: place.geometry.location,
    });

    marker.setVisible(false);

    markerGroups[markertype].push(marker);

    $("#" + divid + " ul").append("<li>" + place.name + " <span>" + varDistance + "</span></li>");
    $("#" + divid + " ul .first").remove();
    google.maps.event.addListener(marker, 'click', function () {
        infowindow.setContent("<p><strong>" + place.name + "</strong><br/>" + varDistance + "</p>");
        infowindow.open(map, this);
    });
}

function CallNearByLoc(type) {
    for (var i = 0; i < markerGroups[type].length; i++) {
        var marker = markerGroups[type][i];
        if (!marker.getVisible()) {
            marker.setVisible(true);
        } else {
            marker.setVisible(false);
        }
    }
}

/****************** 360 realtors  ***************************************/
function myFunction(vl,projectName, location, city) 
{

    var map, places, iw;
    var markers = [];
    var searchTimeout;
    var centerMarker;
    var autocomplete;
    var hostnameRegexp = new RegExp('^http?://.+?/');
      function initialize(location) 
      {
        
          var address = location;
          var geocoder = new google.maps.Geocoder();
          var cityLatitude;
          geocoder.geocode( { "address": address }, function(results, status) { getLat(results[0].geometry.location); });
          function getLat(locationName)
          { 
              var loc= String(locationName);
              var lon=loc.replace(/[\(\)-]/g, "");
              var myLatlngSet;
              var myLangSet;
              var mySplitResult = lon.split(",");
              myLatlngSet = mySplitResult[0];
              myLangSet = mySplitResult[1];
              var myLatlng = new google.maps.LatLng(myLatlngSet,myLangSet);
              var myOptions = {zoom: 12,center: myLatlng,mapTypeId: google.maps.MapTypeId.ROADMAP}
              map = new google.maps.Map(document.getElementById('map_canvas'), myOptions);
              places = new google.maps.places.PlacesService(map);
              google.maps.event.addListener(map, 'tilesloaded', tilesLoaded);
              document.getElementById('keyword').onkeyup = function(e) 
              {
                    if (!e) var e = window.event;
                    if (e.keyCode != 13) return;
                    document.getElementById('keyword').blur();
                    search(document.getElementById('keyword').value);
              }
              var typeSelect = document.getElementById(vl);
              typeSelect.onchange = function() 
              {
                 search();
              };
              var rankBySelect = document.getElementById('rankBy');
              rankBySelect.onchange = function() {   search();  };
          }
      }
      function tilesLoaded() 
      {
        search();
        google.maps.event.clearListeners(map, 'tilesloaded');
        google.maps.event.addListener(map, 'zoom_changed', searchIfRankByProminence);
        google.maps.event.addListener(map, 'dragend', search);
      }
      function searchIfRankByProminence() 
      {
          if (document.getElementById('rankBy').value == 'prominence') { search(); }    
      }
      function search() 
      {
        clearResults();
        clearMarkers();
        if (searchTimeout) 
        {
            window.clearTimeout(searchTimeout);
        }
        searchTimeout = window.setTimeout(reallyDoSearch, 500);
      }
      function reallyDoSearch() 
      {      
        var type = document.getElementById(vl).value;
        var keyword = document.getElementById('keyword').value;
        var rankBy = document.getElementById('rankBy').value;
        var search = {};
        if (keyword) 
        {
           search.keyword = keyword;
        }
        if (type != 'establishment') 
        {
           search.types = [type];
        }
        if (rankBy == 'distance' && (search.types || search.keyword)) 
        {
            search.rankBy = google.maps.places.RankBy.DISTANCE;
            search.location = map.getCenter();
            centerMarker = new google.maps.Marker({
            position: search.location,
            animation: google.maps.Animation.DROP,
            map: map,
            icon: "../360assets/images/map_1.png" });
        } 
        else 
        {
            search.bounds = map.getBounds();
        }
        ProjectNameString='<div id="infobox">'+projectName+'</div>';
        var infowindow = new google.maps.InfoWindow({ content:  ProjectNameString, });
        infowindow.open(map, centerMarker);
        google.maps.event.addListener(centerMarker, 'click', function() { infowindow.open(map,centerMarker); });
        if(document.getElementById(vl).value=="restaurant")
           iconset="../360assets/images/restaurants_map.png";
        else if(document.getElementById(vl).value=="university")
          iconset="../360assets/images/university_map.png";
         else if(document.getElementById(vl).value=="school")
          iconset="../360assets/images/schools_map.png";
         else if(document.getElementById(vl).value=="hospital")
          iconset="../360assets/images/hospitals_map.png";
         else if(document.getElementById(vl).value=="bank")
          iconset="../360assets/images/banks_map.png";
         else if(document.getElementById(vl).value=="atm")
          iconset="../360assets/images/atm_map.png";
         else if(document.getElementById(vl).value=="bar")
          iconset="../360assets/images/bar_map.png";
         else if(document.getElementById(vl).value=="cafe")
          iconset="../360assets/images/cafe_map.png";
         else if(document.getElementById(vl).value=="clothing_store")
          iconset="../360assets/images/shopping_malls.png";
         else if(document.getElementById(vl).value=="museum")
            iconset="../360assets/images/museum_map.png";
        places.search(search, function(results, status) {
        if (status == google.maps.places.PlacesServiceStatus.OK) 
        {
            for (var i = 0; i < results.length; i++) 
            {
                markers.push(new google.maps.Marker({
                position: results[i].geometry.location,
                animation: google.maps.Animation.DROP,
                //icon: icon
                icon: iconset         }));
                google.maps.event.addListener(markers[i], 'click', getDetails(results[i], i));
                window.setTimeout(dropMarker(i), i * 100);
                addResult(results[i], i);
            }
        }  });
      }
      function clearMarkers() 
      {
        for (var i = 0; i < markers.length; i++) {     markers[i].setMap(null);      }
        markers = [];
        if (centerMarker) {  centerMarker.setMap(null); }
      }
      function dropMarker(i) 
      {
        return function() { if (markers[i]) { markers[i].setMap(map); }  }
      }
      function addResult(result, i) 
      {
          var results = document.getElementById('resultsMap');
          var tr = document.createElement('tr');
          //tr.style.backgroundColor = (i% 2 == 0 ? '#F0F0F0'  : '#FFFFFF');
          tr.onclick = function() {  google.maps.event.trigger(markers[i], 'click'); };
          var iconTd = document.createElement('td');
          var nameTd = document.createElement('td');
          var icon = document.createElement('img');
          iconTd.style.padding = (i% 2 == 0 ? '0'  : '0');
          nameTd.style.padding = (i% 2 == 0 ? '0'  : '0');
          nameTd.style.fontSize = ('14px');
          //var icon = document.createElement('b');
              if(document.getElementById(vl).value=="restaurant")
              {
                  icon.setAttribute('class', 'set--mapicon map-res-hvr');
                  icon.setAttribute('src','../360assets/images/trans_img.gif');
              }
              else if(document.getElementById(vl).value=="university")
              {
                  icon.setAttribute('class', 'set--mapicon map-uni-hvr');
                  icon.setAttribute('src','../360assets/images/trans_img.gif');
              }
              else if(document.getElementById(vl).value=="school")
              {
                  icon.setAttribute('class', 'set--mapicon map-sch-hvr');
                  icon.setAttribute('src','../360assets/images/trans_img.gif');
              }
              else if(document.getElementById(vl).value=="hospital")
              {
                  icon.setAttribute('class', 'set--mapicon map-hos-hvr');
                  icon.setAttribute('src','../360assets/images/trans_img.gif');
              }
              else if(document.getElementById(vl).value=="bank")
              {
                  icon.setAttribute('class', 'set--mapicon map-ban-hvr');
                  icon.setAttribute('src','../360assets/images/trans_img.gif');
              }
              else if(document.getElementById(vl).value=="atm")
              {
                  icon.setAttribute('class', 'set--mapicon map-atm-hvr');
                  icon.setAttribute('src','../360assets/images/trans_img.gif');
              }
              else if(document.getElementById(vl).value=="bar")
              {
                  icon.setAttribute('class', 'set--mapicon map-bar-hvr');
                  icon.setAttribute('src','../360assets/images/trans_img.gif');
              }
              else if(document.getElementById(vl).value=="cafe")
              {
                  icon.setAttribute('class', 'set--mapicon map-cafe-hvr');
                  icon.setAttribute('src','../360assets/images/trans_img.gif');
              }
              else if(document.getElementById(vl).value=="clothing_store")
              {
                  icon.setAttribute('class', 'set--mapicon map-sho-hvr');
                  icon.setAttribute('src','../360assets/images/trans_img.gif');
              }
              else if(document.getElementById(vl).value=="museum")
              {
                  icon.setAttribute('class', 'set--mapicon map-mus-hvr');
                  icon.setAttribute('src','../360assets/images/trans_img.gif');
              }
          //icon.src = setIm;
          //icon.setAttribute('class', 'placeIcon');
          icon.setAttribute('className', 'placeIcon');
          var name = document.createTextNode(result.name);
          iconTd.appendChild(icon);
          nameTd.appendChild(name);
          tr.appendChild(iconTd);
          tr.appendChild(nameTd);
          results.appendChild(tr);
          document.getElementById('mapLoading').style.display='none';
      }
      function clearResults() 
      {
          document.getElementById('mapLoading').style.display='block';
          var results = document.getElementById('resultsMap');
          while (results.childNodes[0]) { results.removeChild(results.childNodes[0]); }
      }
      function getDetails(result, i) 
      {
        return function()   { places.getDetails({  reference: result.reference   }, showInfoWindow(i));   }
      }
      function showInfoWindow(i) 
      {
        return function(place, status) 
        {
          if (iw) { iw.close(); iw = null;  }
          if (status == google.maps.places.PlacesServiceStatus.OK) { iw = new google.maps.InfoWindow({content: getIWContent(place)});
           iw.open(map, markers[i]);         }
        }
      }
      function getIWContent(place) 
      {
          var content = '';
          content += '<table>';
          content += '<tr class="iw_table_row">';
          content += '<td style="text-align: right"><img class="hotelIcon" src="' + place.icon + '" width="28" height="28"/></td>';
          content += '<td><b><a href="' + place.url + '">' + place.name + '</a></b></td></tr>';
          content += '<tr class="iw_table_row"><td class="iw_attribute_name"></td><td>' + place.vicinity + '</td></tr>';
          if (place.formatted_phone_number) { }
          if (place.rating) 
          {
              var ratingHtml = '';
              for (var i = 0; i < 5; i++) 
              {
                  if (place.rating < (i + 0.5)) 
                  {
                     ratingHtml += '&#10025;';
                  } else 
                  {
                     ratingHtml += '&#10029;';
                  }
              }
              content += '<tr class="iw_table_row"><td class="iw_attribute_name"></td><td><span id="rating">' + ratingHtml + '</span></td></tr>';
          }
        if (place.website) 
        {
          var fullUrl = place.website;
          var website = hostnameRegexp.exec(place.website);
          if (website == null) 
          { 
            website = 'http://' + place.website + '/';
            fullUrl = website;
          }
        }
        content += '</table>';
        return content;
      }
      google.maps.event.addDomListener(window, 'load', initialize(" "+location+"  "+city+" "));
}


/*$(window).load(function(){
myFunction('r1');
});*/
