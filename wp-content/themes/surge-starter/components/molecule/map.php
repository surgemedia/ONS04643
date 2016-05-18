<article class="<?php echo $vars['class'] ?>">
<div class="row">
	<p><?php echo $vars['description']; ?></p>

	<?php
			get_component([
								'template' => 'atom/link',
								'vars' => [
											"class" => 'button text-uppercase',
											"toggle" => '',
											"text" => 'Use My Current Location',
											"url" => ""
											]
							]);

	?>

	<?php
			get_component([
								'template' => 'atom/link',
								'vars' => [
											"class" => 'button text-uppercase',
											"toggle" => 'role="button" data-toggle="collapse" href="#collapseExample"',
											"text" => 'Enter Postcode or Suburb',
											"url" => ""
											]
							]);
	?>
	<?php
			get_component([
								'template' => 'atom/link',
								'vars' => [
											"class" => 'button text-uppercase',
											"toggle" => 'role="button" data-toggle="collapse" href="#collapseExample"',
											"text" => 'Browse by State',
											"url" => ""
											]
							]);
	?>

		


	<input id="target" value="400" type="text" name="search">


	<div id="map-canvas" style="height:500px"></div>
	<script>
		
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
var styles = [
    {
        "featureType": "all",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#193341"
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "labels.text",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#ffffff"
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "gamma": 0.01
            },
            {
                "lightness": 20
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "saturation": -31
            },
            {
                "lightness": -33
            },
            {
                "weight": 2
            },
            {
                "gamma": 0.8
            },
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "geometry",
        "stylers": [
            {
                "lightness": 30
            },
            {
                "saturation": "-48"
            },
            {
                "color": "#2c5a71"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "geometry",
        "stylers": [
            {
                "saturation": 20
            }
        ]
    },
    {
        "featureType": "poi.park",
        "elementType": "geometry",
        "stylers": [
            {
                "lightness": 20
            },
            {
                "saturation": -20
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "simplified"
            },
            {
                "saturation": "-4"
            },
            {
                "lightness": "-4"
            },
            {
                "gamma": "1.39"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "geometry",
        "stylers": [
            {
                "lightness": 10
            },
            {
                "saturation": -30
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "saturation": 25
            },
            {
                "lightness": 25
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "all",
        "stylers": [
            {
                "lightness": -20
            }
        ]
    }
];

//--------------THIS CODE BUILDS THE MAP WITH YOUR SETTINGS--------------------------------------------------------------------------------------------------------------------------------
function initialize() { 
 var map = new google.maps.Map(document.getElementById(map_div_id), { mapTypeId: google.maps.MapTypeId.ROADMAP, zoom:8, center:new google.maps.LatLng(-29.611670456607648, 132.80273450000004)  }); 
 function createMarker(latlng, logo, name, website, formatted_phone_number, image, address) {
    var infowindow = new google.maps.InfoWindow({});
    function getLogo(logo){if(logo.length > 0){ var string = "<li class='img'><img src='" + logo + "' />";  } else var string = ''; return string;}

  //"<li class='website'>Website: " + '<a href="http://max-connect.com.au'+ website +'">View Webiste</a>'
    var contentString = "<div class='map_popup'>" + "<ul class='map_details_list'>" + getLogo(logo)  + "</li>" + "<li class='name'>" + name + "</li>" + "</li>" + "<li class='phone'>Phone: " + formatted_phone_number + "</li>" + "<li class='address'>Address: " + address + "</li>" + "" + "</ul>"  +"</div>";
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

<?php 
// WP_Query arguments
$args = array ('post_type'              => array( 'location' ));
$query = new WP_Query( $args );

// The Loop
if ( $query->have_posts() ) { while ( $query->have_posts() ) { $query->the_post(); ?>
	
// //---------------------SHOP LOCATION 1-----------------------------------
var location = new google.maps.LatLng(<?php echo get_field('address')['lat']; ?>, <?php echo get_field('address')['lng']; ?>); 
var image  = 'http://totalcombatpaintball.com/wp-content/uploads/2014/10/Map-Marker-Icons-64-2.png';
var name = "Onsite " + "<?php echo get_the_title(); ?>";
var website = '';
var logo = '';
var formatted_phone_number = "<?php echo get_field('phone'); ?>";
var fax = 'fax';
var dirt_address = jQuery.trim("<?php echo get_field('address')['address']; ?>");

var address = dirt_address;

createMarker(location, logo, name, website, formatted_phone_number, image, address );

<?php } }
// Restore original Post Data
wp_reset_postdata();

 ?>
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
//Disabled Search
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
  var inArray = jQuery.inArray( losest, array);
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

function check_closest(location, radius, marker_n, infowindow_n) {
    document.getElementById(searchbox_id).className = "search working";
    calcDistance(current_local, location);
}

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
  var list_content = jQuery('#list_locations').append(content);
  }
  
}
}

function ShowClosest(index){
if(index < 0){ index = 0}
iwindows[index].open(map, gmarkers[index]);
     closest_marker = gmarkers[index];
     jQuery('#list_locations').empty();
}
ShowClosest(smallestDist(distance_away));
displayClosest();



bounds.extend(closest_marker.position);
map.fitBounds(bounds);
});
//--------------------------ERROR CHECKING --------------------------------------------
var styledMap = new google.maps.StyledMapType(styles, {name: "Styled Map"});
 map.mapTypes.set('map_style', styledMap);
  map.setMapTypeId('map_style');
  // Bias the SearchBox results towards places that are within the bounds of the
  // current map's viewport.
 google.maps.event.addListener(map, 'bounds_changed', function() {
 var bounds = map.getBounds();
 searchBox.setBounds(bounds);
  //console.log(bounds);
  });
}

google.maps.event.addDomListener(window, 'load', initialize);
	</script>
</div>
</article>