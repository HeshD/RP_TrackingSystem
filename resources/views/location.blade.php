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
            <button type="search" id="search-btn" class="btn btn-primary">Search</button>
								&nbsp; &nbsp; <label>Or</label>
								&nbsp; &nbsp; <a href="#"   id="geolocation"  role="button">
                                    Use Current Location
                                </a>
				
							
			</form>
            </div> 

           
  
        </div>
        <div id="map"> </div>

        <script type="text/javascript" src="{{asset('/js/script.js')}}"></script>

            

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgmbaZhYCMs0ooDCmnEwkCw7Bu0I1Mhqc&libraries=places&v=weekly&callback=initMap"
        async defer></script>

        </div>

    </div>

@endsection