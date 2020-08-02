$(document).ready(function(){
    
  var map;
  var service;
  var infowindow;

  function initMap() {
  var sydney = new google.maps.LatLng(-33.867, 151.195);

  infowindow = new google.maps.InfoWindow();

  map = new google.maps.Map(
      document.getElementById('map'), {center: sydney, zoom: 15});

  var request = {
      query: 'Museum of Contemporary Art Australia',
      fields: ['name', 'geometry'],
  };

  var service = new google.maps.places.PlacesService(map);

  service.findPlaceFromQuery(request, function(results, status) {
      if (status === google.maps.places.PlacesServiceStatus.OK) {
      for (var i = 0; i < results.length; i++) {
          createMarker(results[i]);
      }
      map.setCenter(results[0].geometry.location);
      }
  });
  }

      

});

var placeSearch, address;
            function initAutocomplete() {
                // Create the autocomplete object, restricting the search predictions to
                // geographical location types.
                autocomplete = new google.maps.places.Autocomplete(
                    document.getElementById('address'), {types: ['geocode']});

                // Avoid paying for data that you don't need by restricting the set of
                // place fields that are returned to just the address components.
                autocomplete.setFields(['address_component']);

                // When the user selects an address from the drop-down, populate the
                // address fields in the form.
                autocomplete.addListener('place_changed', fillInAddress);
