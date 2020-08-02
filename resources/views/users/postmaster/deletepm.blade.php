@extends('backend.layouts.main')
@section('content')
<div class="container">
                <div class="row justify-content-center">
                <div class="col-md-6">
                <form method="get" action="/searchpm" >
                <br>
                <input type="text" class="form-control" id="track_no" name="search" placeholder="Post master-Email" required autocomplete="email" autofocus> 
                            
                    <br>
                    <div class="text-center">

                        <button type="submit" name="searchbutton" class="btn btn-success">search</button>

                        <button id="cancel" name="cancelbutton" class="btn btn-danger">cancel</button>
                    </div>
                </div>
                </div>
                <br>
                
                </form>
</div>
@endsection