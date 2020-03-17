@extends('backend.layouts.main')
@section('content')

                <div class="container">
                <div class="row justify-content-center">
                <div class="col-md-6">
                <div class="card">
                <div class="card-header"><h1>Add Post Master</h1></div>
                @if(session('status'))
                                <div class="alert alert-success" role="alert">
                                {{session('status')}} 
                                </div>
                            @endif    

                <div class="card-body">

                    <form method="POST" action="/addpostmaster">

                    @csrf
                    <!-- Text input-->
                    <div class="form-group">
                    <label>Name</label>  
                    <input id="name" name="name" type="text" placeholder="" class="form-control input-md">
                    </div>
                    
                    <div class="form-group">
                    <label>Phone</label>  
                    <input id="phone" name="phone" type="text" placeholder="" class="form-control input-md">
                    </div>
                 
                    <!-- Select Basic -->
                    <div class="form-group">
                    <label>Branch</label>
                    <div class="col-md-6">
                        <select id="branch" name="branch" class="form-control">
                        <option value="Mt.Lavinia">Mt.Lavinia</option>
                        <option value="Dehiwala">Dehiwala</option>
                        </select>
                    </div>
                    </div>

                    <!-- Textarea -->
                    <div class="form-group">
                    <label>Address</label>                     
                        <textarea class="form-control" id="address" name="address"></textarea>
                    </div>
                    <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
                    </div>

                    <!-- Password input-->
                    <div class="form-group">
                    <label>Password</label>
                    
                    <input id="password" name="password" type="password" placeholder="" class="form-control">
                        
                    </div>
                    

                    <!-- Button -->
                    <div class="form-group">
                    <label class="col-md-4 control-label" for="singlebutton"></label>
                    <div class="col-md-4">
                        <button tyep="submit" class="btn btn-primary">Save</button>
                           

                        <button id="cancel" name="cancelbutton" class="btn btn-danger">cancel</button>
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
                
              