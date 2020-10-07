var map;
var myLatLng;
var geocoder;

$(document).ready(function(){

    
    document.getElementById("search-btn").onclick=searchByAddress;
    const input = document.getElementById("location");
    const autocomplete = new google.maps.places.Autocomplete(input);
    function searchByAddress(){
        


        geocoder = new google.maps.Geocoder();
        
        var address = document.getElementById("location").value;
        geocoder.geocode( { 'location': address}, function(results, status) {
    

        createMap(address);
        nearbySearch(address,"post_office");});
    }

    document.getElementById("geolocation").onclick=geoLocationInit;
    function geoLocationInit(){
        if(navigator.geolocation){
            navigator.geolocation.getCurrentPosition(success,fail);
        }else{
            alert("Browser Not supported");
        }
    }

    function success(position){
        console.log(position);
        var latval=position.coords.latitude;
        var lngval=position.coords.longitude;

        myLatLng = new google.maps.LatLng(latval,lngval);
        createMap(myLatLng);
        nearbySearch(myLatLng,"post_office");
    }

 // var myLatLng= new google.maps.LatLng(6.9271,79.8612);  
  
    function fail(){
        alert("It fails");
    }
 
  
    function createMap(myLatLng){
    map = new google.maps.Map(document.getElementById('map'), {
    center: myLatLng,
    zoom: 12,
    });
    
    var marker=new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: name

      });
    }
    
    function createMarker(latlng,icn,name){
    var marker = new google.maps.Marker({
        position: latlng,
        map: map,
        icon: icn,
        title: name
    });
    }

    function nearbySearch(myLatLng,type){
    var request = {
        location: myLatLng,
        radius: '2500',
        type: [type]
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
            name=place.name;
    
            createMarker(latlng,icn,name);
      }
    }  
    
    }
    
    }
    
  
});
