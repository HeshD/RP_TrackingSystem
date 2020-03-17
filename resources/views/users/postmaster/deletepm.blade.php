@extends('backend.layouts.main')
@section('content')
<div class="container">
                <div class="row justify-content-center">
                <div class="col-md-6">
               

                <input type="text" class="form-control" id="track_no" name="track_no" placeholder="Post master-Email"> 
                <br>
                <button id="search" name="search" class="btn btn-success">search</button>

                <button id="cancel" name="cancelbutton" class="btn btn-danger">cancel</button>
                </div>
                </div>
</div>
@endsection