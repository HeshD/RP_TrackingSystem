$(document).ready(function(){
  
  var myLatLng= new google.maps.LatLng(6.9271,79.8612);  

  const input = document.getElementById("location");
  const autocomplete = new google.maps.places.Autocomplete(input);

  var map = new google.maps.Map(document.getElementById("map"), {
        center: myLatLng,
        zoom: 8,
  });
function createMarker(latlng,icn){
  var marker = new google.maps.Marker({
    position: latlng,
    map: map,
    icon: icn,
    title: 'Hello!'
  });}
  var request = {
    location: myLatLng,
    radius: '4500',
    type: ['post_office']
    };

service = new google.maps.places.PlacesService(map);
service.nearbySearch(request, callback);
function callback(results, status) {

   // console.log(results);
 if (status == google.maps.places.PlacesServiceStatus.OK) {
    for (var i = 0; i < results.length; i++) {
        var place = results[i];
        latlng= place.geometry.location;
        icn=place.icon;

        createMarker(latlng,icn);
  }
}  



}

  

    
    });

         
        var request = {
        location: {lat: 7.8731, lng: 80.7718},
        radius: '1500',
        type: ['school']
        };
    service = new google.maps.places.PlacesService(map);
    service.nearbySearch(request, callback);

    

      function callback(results, status) {

            console.log(results);
      //  if (status == google.maps.places.PlacesServiceStatus.OK) {
      //    for (var i = 0; i < results.length; i++) {
      //      createMarker(results[i]);
        //  }
        //}  

       
        
        }
        