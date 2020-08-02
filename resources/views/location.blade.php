@extends('layouts.app')
<style> #map {
        height: 80%;
        width: 60%;
      }
</style>
@section('content')
    <div class="container">
        <div class="row form-group">
			<div class="col-md-8">

            <label class="inputLabel">*City and State, or ZIP Code</label>
            <form class="form-inline">
            <input type="text" class="form-control" id="location" name="location" placeholder="Type your address or location"> 
            &nbsp;
            <button type="search" onclick="initMap()" class="btn btn-primary">Search</button>
								&nbsp; &nbsp; <label>Or</label>
								&nbsp; &nbsp; <a href="#"  role="button">
                                    Use Current Location
                                </a>
								
							
			</form>
            </div> 

           
  
        </div>
        <div id="map"> </div>
            <script>
                          

            var map;
            var service;
            var infowindow;

      function initMap() {var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 7.8731, lng: 80.7718},
          zoom: 8
        });
        var input = document.getElementById('location');


        var autocomplete = new google.maps.places.Autocomplete(input);

        // Bind the map's bounds (viewport) property to the autocomplete object,
        // so that the autocomplete requests use the current map bounds for the
        // bounds option in the request.
        autocomplete.bindTo('bounds', map);

        // Set the data fields to return when the user selects a place.
        autocomplete.setFields(
            ['address_components', 'geometry', 'icon', 'name']);

        var infowindow = new google.maps.InfoWindow();
        var infowindowContent = document.getElementById('infowindow-content');
        infowindow.setContent(infowindowContent);
        var marker = new google.maps.Marker({
          map: map,
          anchorPoint: new google.maps.Point(0, -29)
        });

        autocomplete.addListener('place_changed', function() {
          infowindow.close();
          marker.setVisible(false);
          var place = autocomplete.getPlace();
          if (!place.geometry) {
            // User entered the name of a Place that was not suggested and
            // pressed the Enter key, or the Place Details request failed.
            window.alert("No details available for input: '" + place.name + "'");
            return;
          }

          // If the place has a geometry, then present it on a map.
          if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
          } else {
            map.setCenter(place.geometry.location);
            map.setZoom(17);  // Why 17? Because it looks good.
          }
          marker.setPosition(place.geometry.location);
          marker.setVisible(true);

          var address = '';
          if (place.address_components) {
            address = [
              (place.address_components[0] && place.address_components[0].short_name || ''),
              (place.address_components[1] && place.address_components[1].short_name || ''),
              (place.address_components[2] && place.address_components[2].short_name || '')
            ].join(' ');
          }

          infowindowContent.children['place-icon'].src = place.icon;
          infowindowContent.children['place-name'].textContent = place.name;
          infowindowContent.children['place-address'].textContent = address;
          infowindow.open(map, marker);
        });

        // Sets a listener on a radio button to change the filter type on Places
        // Autocomplete.
        function setupClickListener(id, types) {
          var radioButton = document.getElementById(id);
          radioButton.addEventListener('click', function() {
            autocomplete.setTypes(types);
          });
        }

        setupClickListener('changetype-all', []);
        setupClickListener('changetype-address', ['address']);
        setupClickListener('changetype-establishment', ['establishment']);
        setupClickListener('changetype-geocode', ['geocode']);

        document.getElementById('use-strict-bounds')
            .addEventListener('click', function() {
              console.log('Checkbox clicked! New state=' + this.checked);
              autocomplete.setOptions({strictBounds: this.checked});
            });
      }





        </script>

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgmbaZhYCMs0ooDCmnEwkCw7Bu0I1Mhqc&libraries=places&callback=initMap"
        async defer></script>

        </div>

    </div>

@endsection