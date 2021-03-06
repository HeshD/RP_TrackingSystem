@extends('backend.layouts.main')

@section('content')

                <div class="container">
                <div class="row justify-content-center">
                <div class="col-md-6">
                <div class="card">
                <div class="card-header"><h1>Place Delivery Request</h1></div>
                @if(session('status'))
                                <div class="alert alert-success" role="alert">
                                {{session('status')}} 
                                </div>
                            @endif    

                <div class="card-body">

                    <form method="POST" action="/delreq">

                    @csrf
                 
                    <div class="form-group">
                    <label>Sender Name</label>  
                    <input id="sname" name="sname" type="text" placeholder="" class="form-control input-md">
                    </div>
                    
                    <div class="form-group">
                    <label>Sender Address</label>                     
                        <textarea class="form-control" id="saddress" name="saddress"></textarea>
                    </div>

                    <div class="form-group">
                    <label>Reciever Name</label>  
                    <input id="rname" name="rname" type="text" placeholder="" class="form-control input-md">
                    </div>
                    <div class="form-group">
                    <label>Reciever Address</label>                     
                        <textarea class="form-control" id="raddress" name="raddress"></textarea>
                    </div>

                    <div class="form-group">
                    <label>Reciever Phone</label>  
                    <input id="phone" name="phone" type="text" placeholder="" class="form-control input-md">
                    </div>
                 
               
                    <div class="form-group">
                    <div class="row">
                    <div class="col-md-6">
                    <label>Origin Office</label>

                        <select id="branch_name" name="branch_name" class="form-control">
                        <option>Select Post Office</option>
                        @foreach(App\Branch::all() as $data)
                        <option value="{{$data->id}}">{{$data->name}}</option>

                        @endforeach
                        </select>
                    </div>

                    <div class="col-md-6">
                    <label>Package type</label>

                        <select id="package_type" name="package_type" class="form-control">
                        <option value="">Select Package Type</option>
                             <option value="Letter">Letter</option>
                             <option value="Parcel">Parcel</option>
                             <option value="Speed Post">Speed Post</option></select>

                    </div>
                    </div>
                    </div>

                    <label>Weight of the Package</label>
                    <div class="col-md-6">
                    <input id="weight" name="weight" type="text" placeholder="" class="input form-control input-md">

                    </div>
                  
                    <label>Postage Fee: <label id=""></label></label>
                    <div class="row">&nbsp;&nbsp;&nbsp;&nbsp;<label>Rs :</label>
                    <div class="col-md-6">
                        <input id="postage" name="weight" type="text" placeholder="" class="form-control input-md" readonly>

                    </div>
                    </div>
                  
                    <script type="text/javascript" src="{{asset('/js/postcal.js')}}"></script>

                    
                    <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
                    </div>

                   
                    

                   
                    <div class="form-group">
                    <label class="col-md-4 control-label" for="singlebutton"></label>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-primary">Save</button>
                           

                        <button id="cancel" button type="reset" name="cancelbutton" class="btn btn-danger">Clear</button>
                    </div>
                    </div>
                </div>
                </div>
                </div>
                </div>
                </div>   
            </div>
            </div>
                    </form>

@endsection
                
              