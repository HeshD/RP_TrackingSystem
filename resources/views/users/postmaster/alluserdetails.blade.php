@extends('backend.layouts.main')
@section('content')
    <div class="container">

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

    </div>


@endsection