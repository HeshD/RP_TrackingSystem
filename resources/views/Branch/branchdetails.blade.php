@extends('backend.layouts.main')
@section('content')
    <div class="container">

    <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>District</th>
                            <th>Province</th>
                            <th>Branch Type</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($branch as $row)
                        <tr>
                            <td>{{$row->id}}</td>
                            <td>{{$row->name}}</td>  
                            <td>{{$row->address}}</td>
                            <td>{{$row->district}}</td>  
                            <td>{{$row->province}}</td>  
                            <td>{{$row->branch_type}}</td>  
                            <td>
                            <a href="/deletebr/{{$row->id}}" name="searchbutton" class="btn btn-warning">Delete</button> </a>
                            <a href="/updatepm/{{$row->id}}" name="searchbutton" class="btn btn-success">Update</button></a></td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>

    </div>


@endsection