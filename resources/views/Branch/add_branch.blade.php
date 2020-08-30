@extends('backend.layouts.main')

<style> #map {
        height: 100%;
      }
</style>

@section('content')
    <div class="content-wrapper">
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header"><h1>Add Post Office</h1></div>
                <div class="card-body">

                <form method="POST" action="/addpostoffice">

                @csrf
                    <div class="form-group">
                    <label>Branch Name</label>  
                    <input id="name" name="name" type="text" placeholder="" class="form-control input-md">
                    </div>

                    <div class="form-group">
                    <label>Branch Address</label>  
                    <input id="address" name="address" type="text" placeholder=""  onFocus="geolocate()" class="form-control input-md">
                    </div>

                    <div class="form-group">
                    <label>Province</label>
                    <div class="col-md-6">
                        <select id="province" name="province" class="form-control">
                        <option value="Western">Western</option>
                        <option value="Sothern">Sothern</option>
                        </select>
                    </div>
                    </div>

                    <div class="form-group">
                    <label>District</label>
                    <div class="col-md-6">
                        <select id="district" name="district" class="form-control">
                        <option value="Colombo">Colombo</option>
                        <option value="Kalutara">Kalutara</option>
                        </select>
                    </div>
                    </div>

                    <div class="form-group">
                    <label>Branch type</label>
                    <div class="col-md-6">
                        <select id="branch_type" name="branch_type" class="form-control">
                        <option value="Supra">Supra Office</option>
                        <option value="Class 1">Class 1 Office</option>
                        <option value="Class 2">Class 2 Office</option>
                        <option value="Sub">Sub Post Office</option>
                        </select>
                    </div>
                    </div>
                    <div class="form-group">
                    <div class="col-md-8">
                    <label>Branch Code</label>  
                    <input id="branch_code" name="branch_code" type="text" placeholder="" class="form-control input-md">
                    </div>
                    </div>

                    <div class="form-group">
                    <label class="col-md-4 control-label" for="singlebutton"></label>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-primary">Save</button>
                           

                        <button id="cancel" name="cancelbutton" class="btn btn-danger">cancel</button>
                    </div>
                    </div>
                </form>
                </div>
            </div>
            

       
        </div>


        
        </div>
    </div>
    </div>
    </div>


@endsection