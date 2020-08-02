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
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>User Type</th>
                            <th>Branch</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $row)
                        <tr>
                            <td>{{$row->id}}</td>
                            <td>{{$row->name}}</td>  
                            <td>{{$row->phone}}</td>
                            <td>{{$row->address}}</td>  
                            <td>{{$row->usertype}}</td>  
                            <td>{{$row->branch}}</td>  
                            <td>{{$row->email}}</td>  
                            <td>
                            <a href="/deletepm/{{$row->id}}" name="searchbutton" class="btn btn-warning">Delete</button> </a>
                            <a href="/updatepm/{{$row->id}}" name="searchbutton" class="btn btn-success">Update</button></a></td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </form>
</div>
@endsection