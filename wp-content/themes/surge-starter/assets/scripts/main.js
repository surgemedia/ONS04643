/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        // JavaScript to be fired on all pages
      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // About us page, note the change from about-us to about_us.
    'about_us': {
      init: function() {
        // JavaScript to be fired on the about us page
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

    /*=============================================
  = Enabling multi-level navigation =
  ===============================================*/
  $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
      event.preventDefault(); 
      event.stopPropagation(); 
      $(this).parent().siblings().removeClass('open');
      $(this).parent().toggleClass('open');
  });

/*=================================
=            Animation            =
=================================*/





})(jQuery); // Fully reference jQuery after this point.



$(document).ready(function() {

//--------------------------------------------------------------------
//-----------------------Create your map------------------------------
//--------------------------------------------------------------------
var map;
var current_local;
var map_div_id = 'map-canvas'; //div you want to become the map 
var searchbox_id = "target"; //id of the input search
var radius = 6; // km radius of center of the postcode for the search
var distance_cap; //anything higher then this distance is an
var list_locations = [];
var markers = []; var gmarkers = []; var iwindows = [];
var fixed_postcode;
  // var styles = [
  //   {
  //     stylers: [
  //       { hue: "#918FA8" },
  //       { saturation: -20 }
  //     ]
  //   },{
  //     featureType: "road",
  //     elementType: "geometry",
  //     stylers: [
  //       { lightness: 100 },
  //       { visibility: "simplified" }
  //     ]
  //   },{
  //     featureType: "road",
  //     elementType: "labels",
  //     stylers: [
  //       { visibility: "off" }
  //     ]
  //   }
  // ];


//--------------THIS CODE BUILDS THE MAP WITH YOUR SETTINGS--------------------------------------------------------------------------------------------------------------------------------
function initialize() { 
 var map = new google.maps.Map(document.getElementById(map_div_id), { mapTypeId: google.maps.MapTypeId.ROADMAP, zoom:8, center:new google.maps.LatLng(-29.611670456607648, 132.80273450000004)  }); 
 function createMarker(latlng, logo, name, website, formatted_phone_number, image, address) {
    var infowindow = new google.maps.InfoWindow({});
    function getLogo(logo){if(logo.length > 0){ var string = "<li class='img'><img src='" + logo + "' />";  } else var string = ''; return string;}

  //"<li class='website'>Website: " + '<a href="http://max-connect.com.au'+ website +'">View Webiste</a>'
    var contentString = "<div class='map_popup'>" + "<ul class='map_details_list'>" + getLogo(logo)  + "</li>" + "<li class='name'>" + name + "</li>" + "</li>" + "<li class='phone'>Phone: " + formatted_phone_number + "</li>" + "<li class='address'>Address: " + address + "</li>" + "<li><a href='#list_locations'>View More Options</a></li>" + "</ul>"  +"</div>";
    var marker = new google.maps.Marker({
        position: latlng,
        icon: image,
        map: map,
        zIndex: Math.round(latlng.lat() * -100000) << 5
    });
    list_locations.push([ logo,name,website,formatted_phone_number,image, address ]);
    infowindow.setContent(contentString);
    iwindows.push(infowindow);
    gmarkers.infowindow = iwindows;
    gmarkers.push(marker);
}
//----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

//---------------------------------------------------------------------
//------------------------Add Locations Below--------------------------
//-----------------(Copy and paste then change the values)--------------
// [pbAdvCollection Collection="720dca4c-82d8-4941-9e0e-8e73d5ed6346"]

// [ItemTemplate]
// //---------------------SHOP LOCATION 1-----------------------------------
// var location = new google.maps.LatLng(parseFloat([item.Latitude]),parseFloat([item.Longitude])); 
// var image  = '[pbImage ImageName="Marker Image"]';
// var name = "MAX Employment " + '[item.displayedname]';
// var website = '';
// var logo = '[pbImage ImageName="Logo" FilenameOnly="true" thumbnail="false"]';
// var formatted_phone_number = '[item.phone]';
// var fax = '[item.fax]';
// var dirt_address = $.trim('[item.address]');

// var address = dirt_address;

// createMarker(location, logo, name, website, formatted_phone_number, image, address );

// [/ItemTemplate]
// [/pbAdvCollection]

//-----------------------------------------------------------------------------------------------
//---ERROR REPORTING (this displays in a popup in the center when there is no location found)----
//-----------------------------------------------------------------------------------------------
// var error_loc = new google.maps.LatLng(-24.766785 , 133.813477);  
// var error_img  = '/site/DefaultSite/filesystem/scripts/postcode/invisble.gif';
// var error_title = "Sorry, there is Max locations in your area - Please try another suburb";
// var error_window = new google.maps.InfoWindow({});
// var error_marker = new google.maps.Marker({ map: map, position: error_loc, icon: error_img  }); 
// var error_content = "<div class='map_popup'>"+"<ul class='map_details_list'>"+"<li class='title'>"+error_title+"</li>"+"</ul>"+"</div>";
// error_window.setContent(error_content);
//-----------------------------------------------------------------------------------------------
//-------------------------------------YOUR FINISHED YAY-----------------------------------------
//-----------------------------------------------------------------------------------------------











//-----------------------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------------------
//-------------------------YOU DONT NEED TO CHANGE ANYTHING BELOW--------------------------------
//-----------------------------------------------------------------------------------------------
//----------------------------------------------------------------------------------------------- 
for (i = 0; gmarkers.length > i; i++) {
    click_info(gmarkers[i], iwindows[i]);
}
var input = document.getElementById(searchbox_id);
var searchBox = new google.maps.places.SearchBox(input, 'bounds', defaultBounds);

function click_info(marker_click, info_click) {
    var count = 0;
    google.maps.event.addListener(marker_click, 'click', function () {
        count++;
        if (count == 1) {
            info_click.open(map, this);
        } else {
            info_click.close(map, this);
            count = 0;
        };
    });
}
var defaultBounds = new google.maps.LatLngBounds(new google.maps.LatLng(-13.752725, 111.884766), new google.maps.LatLng(-43.325178, 153.720703));
map.fitBounds(defaultBounds);
var geodesic = new google.maps.Polyline({
    geodesic: true
});
google.maps.event.addListener(searchBox, 'places_changed', function () {
        var places = searchBox.getPlaces();
        var bounds = new google.maps.LatLngBounds();
        var target_value = document.getElementById(searchbox_id).value;

var searched_pc = target_value;



//-------------------------Fixes 3 number post codes-----------------------------------------
var target_length = target_value.length;
if(target_length = 3) { fixed_postcode =  parseInt("0"+target_value); } 
var myStringArray = Postcode_list.filter(function(n){return n}); 
var len = myStringArray.length;

// try array.indexOf - with (4032) inside myStringArray
// var index_pc = "("+fixed_postcode+")";
// var foundIndex = Postcode_list.indexOf(index_pc);
Array.prototype.clean = function(deleteValue) {
  for (var i = 0; i < this.length; i++) {
    if (this[i] == deleteValue) {         
      this.splice(i, 1);
      i--;
    }
  }
  return this;
};


//-------------------------checks postcode to geocode------------------------------------------

for (var i = 0; i < len; ++i) {
    
        var s = myStringArray[i];
        var ps = postcode_safe(s);
        if (ps == fixed_postcode) {
            var current_geocode = latlong_safe(s);
            var lat = split_lat(current_geocode, 0);
            var longt = split_lat(current_geocode, 1);
            
            current_local = new google.maps.LatLng(lat, longt);
            
            
        };
    
}
//-------------------------Checks the clostes marker------------------------------------------  
var map_listing = [];
function smallestDist(array){
  var losest = Math.min.apply( Math, array);
  var inArray = $.inArray( losest, array);
  //console.log(inArray+ 'inArray');
  var indexOf = array.indexOf(+losest);
  //console.log(indexOf+" indexOf")
 //
  return indexOf;

}
function calcDistance(p1, p2) {
  try {
              var checked = parseFloat((google.maps.geometry.spherical.computeDistanceBetween(p1, p2) / 1000).toFixed(2));
      } catch(err){ console.log('These was an issue finding the distance between your postcode and our locations')}
              distance_away.push(parseFloat(checked));
              return checked;
            }

// function check_closest(location, radius, marker_n, infowindow_n) {
//     document.getElementById(searchbox_id).className = "search working";
//     calcDistance(current_local, location);
// }

//  = error_marker;
// closest_marker.position = error_loc;
var closest_marker;
var areaCheck = 0;
var distance_away = []; 
//--------------------------ERROR CHECKING --------------------------------------------
// console.log("current: " + current_local);
// console.log("gmarker: " + gmarkers[0].position);
for (i = 0; gmarkers.length > i; i++) {
   calcDistance(current_local, gmarkers[i].position);
  
    
}

function displayClosest(){
  var arr = [];
  var index;
  var list_item;
for(i = 0; i < distance_away.length; i++) {
  //console.log(map_listing[i]);
  var index = i;
  map_listing.push([i,distance_away[i]]);
  //console.log(map_listing);

  arr = map_listing.sort(function(a,b) {
      return a[1] - b[1];
    });
  //console.log(arr);
}
for(i = 0; i < 3; i++) {
  //console.log(arr[i][1]);
  var index = parseInt(arr[i][0]);
  var list_item = list_locations[index];
  //console.log(list_item);
  if(list_item !== undefined){
  var content = '<div class="list_item">'+'<h2>'+list_item[1]+'</h2>';
  // content += '<img src="'+list_item[0]+'" />';
  content += '<p>'+list_item[2]+'</p>';
  content += '<p>'+list_item[3]+'</p>';
  content += '<p>'+list_item[4]+'</p>';
  content += '<p>'+list_item[5]+'</p>';

  content += '</div>';
  var list_content = $('#list_locations').append(content);
  }
  
}
}

function ShowClosest(index){
if(index < 0){ index = 0}
iwindows[index].open(map, gmarkers[index]);
     closest_marker = gmarkers[index];
     $('#list_locations').empty();
}
ShowClosest(smallestDist(distance_away));
displayClosest();



bounds.extend(closest_marker.position);
map.fitBounds(bounds);
});
//--------------------------ERROR CHECKING --------------------------------------------
// var styledMap = new google.maps.StyledMapType(styles, {name: "Styled Map"});
//  map.mapTypes.set('map_style', styledMap);
//   map.setMapTypeId('map_style');
  // Bias the SearchBox results towards places that are within the bounds of the
  // current map's viewport.
 google.maps.event.addListener(map, 'bounds_changed', function() {
 var bounds = map.getBounds();
 searchBox.setBounds(bounds);
  //console.log(bounds);
  });
}

google.maps.event.addDomListener(window, 'load', initialize);
});
